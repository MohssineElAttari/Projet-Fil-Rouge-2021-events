<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Citie;
use App\Models\Evenement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class EvenementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $data['events'] = Evenement::orderBy('id', 'desc')->paginate(5);
        $categories = Categorie::all();
        $cities = Citie::all();
        // dd($categories);
        return view('pages.eventCreate', ['categories' => $categories], ['cities' => $cities]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'titre' => 'required',
        //     'duree' => 'required',
        //     'day' => 'required',
        //     'time' => 'required',
        //     'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        //     'description' => 'required',
        //     'category' => 'required',
        //     'city' => 'required',
        //     'address' => 'required',
        // ]);
        // dd($request);
        $image = $request->file('image');
        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('assets/images'), $new_name);

        $evenement = new Evenement();
        $evenement->titre = $request->titre;
        $evenement->addrese = $request->address;
        $evenement->duree = $request->duration;
        $evenement->day = $request->day;
        $evenement->time = $request->time;
        $evenement->image = $new_name;
        $evenement->categorie_id = $request->category;
        $evenement->citie_id = $request->city;
        $evenement->user_id = Auth::user()->id;;
        $evenement->description = $request->description;
        $evenement->status = "open";
        $evenement->active = 1;
        $evenement->save();

        return redirect()->route('eventCreate')
            ->with('success', 'event has been created successfully.');
    }
    public function ListEvents()
    {
        $events = Evenement::paginate(8);
        // dd($events);
        return view('pages.events', ['events' => $events]);
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Evenement  $evenement
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // dd($id);
        $eventInfo = DB::table('evenements')
            ->join('users', 'users.id', '=', 'evenements.user_id')
            ->join('categories', 'categories.id', '=', 'evenements.categorie_id')
            ->join('cities', 'cities.id', '=', 'evenements.citie_id')
            ->where('evenements.id', '=', $id)
            ->get();
        // dd($eventInfo);
        return view('pages.event', ['eventInfo' => $eventInfo]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Evenement  $evenement
     * @return \Illuminate\Http\Response
     */
    public function edit(Evenement $evenement)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Evenement  $evenement
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Evenement $evenement)
    {
        $evenement = Evenement::find($id);
        // if($request->hasFile('image')){
        //     $request->validate([
        //       'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        //     ]);
        //     $path = $request->file('image')->store('public/images');
        //     $evenement->image = $path;
        // }
        $evenement->titre = $request->titre;
        $evenement->description = $request->description;
        $evenement->save();

        return redirect()->route('posts.index')
            ->with('success', 'Evenement updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Evenement  $evenement
     * @return \Illuminate\Http\Response
     */
    public function destroy(Evenement $evenement)
    {
        $evenement->delete();

        return redirect()->route('pages.event')
            ->with('success', 'event has been deleted successfully');
    }
}
