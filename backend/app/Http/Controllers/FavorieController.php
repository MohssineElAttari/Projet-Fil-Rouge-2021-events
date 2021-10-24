<?php

namespace App\Http\Controllers;

use App\Models\Favorie;
use Illuminate\Http\Request;

class FavorieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.favourites');
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Favorie  $favorie
     * @return \Illuminate\Http\Response
     */
    public function show(Favorie $favorie)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Favorie  $favorie
     * @return \Illuminate\Http\Response
     */
    public function edit(Favorie $favorie)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Favorie  $favorie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Favorie $favorie)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Favorie  $favorie
     * @return \Illuminate\Http\Response
     */
    public function destroy(Favorie $favorie)
    {
        //
    }
}
