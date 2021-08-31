<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use COM;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['categories'] = Categorie::paginate(10);
        return view('dashboard.categories', $data);
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
        // dd('wwww');
        $request->validate([
            'name' => 'required',
        ]);

        $categorie = new Categorie();
        $categorie->name = $request->name;
        $categorie->save();
        return redirect()->route('categories.index')
            ->with('success', 'Categorie created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Categorie  $categorie
     * @return \Illuminate\Http\Response
     */
    public function show(Categorie $categorie)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Categorie  $categorie
     * @return \Illuminate\Http\Response
     */
    public function edit(Categorie $categorie)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Categorie  $categorie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Categorie $categorie)
    {

        $categorie->update($request->all());
        return redirect()->route('categories.index')
            ->with('success', 'categorie has been update successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Categorie  $categorie
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    }
    public function delete($id)
    {
        $categories = Categorie::find($id);
        // dd($categories);
        $categories->delete();
        return redirect()->route('categories.index')
            ->with('success', 'categorie has been deleted successfully');
    }
    public function editCat($id)
    {
        $cat = Categorie::find($id);
        return response()->json([
            'status' => 200,
            'categorie' => $cat,
        ]);
    }

    public function updateCategorie(Request $request, Categorie $categorie)
    {
        $categorie = Categorie::find($request->input('cat_id'));
        // dd($categorie);
        $categorie->name = $request->input('name');
        // dd($categorie);
        $categorie->update();
        return redirect()->route('categories.index')
            ->with('success', 'categorie has been update successfully');
    }
}
