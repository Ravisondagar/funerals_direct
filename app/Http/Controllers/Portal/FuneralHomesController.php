<?php

namespace App\Http\Controllers\Portal;

use App\FuneralHome;
use App\FuneralHomeProfile;
use Illuminate\Http\Request;
use Former;
use Auth;
use Validator;

class FuneralHomesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $funeral_homes = FuneralHome::all();
        return view('user.my-funeral-home',compact('funeral_homes'));
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
        //Rules for validation
        $rules=[
          'name' => 'required',
        ];

        // Messages for validation
        $messages=[
          'name.required' => 'Please enter name.',
        ];
        
        // Make validator with rules and messages
        $validator = Validator::make($request->all(),$rules,$messages);
        // If validator fails than it will redirect back and gives error otherwise go to try catch section
        if ($validator->fails()) { 
          //Former::withErrors($validator);
          return redirect()->back()->withErrors($validator)->withInput();
        }
        // If no error than go inside otherwise go to the catch section
        /*try
        {*/
          $funeral_home = New FuneralHome;
          $funeral_home->user_id = Auth::user()->id;
          $funeral_home->name = $request->get('name');
          $funeral_home->save();

          return redirect()->route('funeral-home.index')->withSuccess("Insert record successfully.");
        /*}
        catch(\Exception $e)
        {
          return redirect()->route('funeral-home.index')->withError('Something went wrong, Please try after sometime.');
        }*/
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
    public function update(Request $request, $id)
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

    public function setting($id)
    {
        $funral_profile = FuneralHome::find($id);
        return view('user.about-us2',compact('id','funral_profile'));
    }
}
