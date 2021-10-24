<?php

namespace App\Http\Controllers;

use App\Models\Abonnemment;
use Illuminate\Http\Request;

class AbonnemmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.subscribes');
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
     * @param  \App\Models\Abonnemment  $abonnemment
     * @return \Illuminate\Http\Response
     */
    public function show(Abonnemment $abonnemment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Abonnemment  $abonnemment
     * @return \Illuminate\Http\Response
     */
    public function edit(Abonnemment $abonnemment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Abonnemment  $abonnemment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Abonnemment $abonnemment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Abonnemment  $abonnemment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Abonnemment $abonnemment)
    {
        //
    }
}
