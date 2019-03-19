<?php

namespace App\Http\Controllers\Portal;

use App\FunerelHomeLocation;
use Illuminate\Http\Request;
use App\Location;

class FunerelHomeLocationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $location = new Location;
        $parents = $location->country();
        $locations = $location->location();
        return view('user.region.region',compact('id','parents','locations','location'));
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
     * @param  \App\FunerelHomeLocation  $funerelHomeLocation
     * @return \Illuminate\Http\Response
     */
    public function show(FunerelHomeLocation $funerelHomeLocation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\FunerelHomeLocation  $funerelHomeLocation
     * @return \Illuminate\Http\Response
     */
    public function edit(FunerelHomeLocation $funerelHomeLocation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\FunerelHomeLocation  $funerelHomeLocation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FunerelHomeLocation $funerelHomeLocation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\FunerelHomeLocation  $funerelHomeLocation
     * @return \Illuminate\Http\Response
     */
    public function destroy(FunerelHomeLocation $funerelHomeLocation)
    {
        //
    }

    public function select_country(Request $request)
    {
        $locations = Location::where('parent_id', '=', $request->get('id'))->get();
        return view('user.render.country',compact('locations'));
    }
}
