<?php

namespace App\Http\Controllers\Portal;

use App\FuneralHome;
use Illuminate\Http\Request;

class FuneralHomesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('user.my-funeral-home');
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
     * @param  \App\FuneralHome  $funeralHome
     * @return \Illuminate\Http\Response
     */
    public function show(FuneralHome $funeralHome)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\FuneralHome  $funeralHome
     * @return \Illuminate\Http\Response
     */
    public function edit(FuneralHome $funeralHome)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\FuneralHome  $funeralHome
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FuneralHome $funeralHome)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\FuneralHome  $funeralHome
     * @return \Illuminate\Http\Response
     */
    public function destroy(FuneralHome $funeralHome)
    {
        //
    }
}
