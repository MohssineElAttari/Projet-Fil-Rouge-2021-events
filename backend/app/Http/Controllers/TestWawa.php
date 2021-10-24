<?php

// namespace App\Http\Controllers;

// use App\Models\Citie;
// use Illuminate\Http\Request;

class TestWawa 
{
//    /**
//      * Display a listing of the resource.
//      *
//      * @return \Illuminate\Http\Response
//      */
//     public function index()
//     {
//         $data['cities'] = Citie::paginate(10);
//         return view('dashboard.cities', $data);
//     }

//     /**
//      * Show the form for creating a new resource.
//      *
//      * @return \Illuminate\Http\Response
//      */
//     public function create()
//     {
//         //
//     }

//     /**
//      * Store a newly created resource in storage.
//      *
//      * @param  \Illuminate\Http\Request  $request
//      * @return \Illuminate\Http\Response
//      */
//     public function store(Request $request)
//     {
//         // dd('wwww');
//         $request->validate([
//             'name' => 'required',
//         ]);

//         $citie = new Citie();
//         $citie->name = $request->name;
//         $citie->save();
//         return redirect()->route('cities.index')
//             ->with('success', 'Citie created successfully.');
//     }

//     /**
//      * Display the specified resource.
//      *
//      * @param  \App\Models\Citie  $citie
//      * @return \Illuminate\Http\Response
//      */
//     public function show(Citie $citie)
//     {
//         //
//     }

//     /**
//      * Show the form for editing the specified resource.
//      *
//      * @return \Illuminate\Http\Response
//      */
//     public function edit(Citie $citie)
//     {
//         //
//     }

//     /**
//      * Update the specified resource in storage.
//      *
//      * @param  \Illuminate\Http\Request  $request
//      * @param  \App\Models\Citie  $citie
//      * @return \Illuminate\Http\Response
//      */
//     public function update(Request $request, Citie $citie)
//     {

//         $citie->update($request->all());
//         return redirect()->route('cities.index')
//             ->with('success', 'citie has been update successfully');
//     }

    // /**
    //  * Remove the specified resource from storage.
    //  *
    //  * @param  \App\Models\Citie  $citie
    //  * @return \Illuminate\Http\Response
    //  */
    // public function destroy($id)
    // {
    // }
    // public function delete($id)
    // {
    //     $citie = Citie::find($id);
    //     // dd($cities);
    //     $citie->delete();
    //     return redirect()->route('cities.index')
    //         ->with('success', 'citie has been deleted successfully');
    // }
    // public function editCitie($id)
    // {
    //     $citie = Citie::find($id);
    //     return response()->json([
    //         'status' => 200,
    //         'citie' => $citie,
    //     ]);
    // }

    // public function updateCitie(Request $request, Citie $citie)
    // {
    //     $citie = Citie::find($request->input('citie_id'));
    //     // dd($citie);
    //     $citie->name = $request->input('name');
    //     // dd($citie);
    //     $citie->update();
    //     return redirect()->route('cities.index')
    //         ->with('success', 'citie has been update successfully');
    // }
}
