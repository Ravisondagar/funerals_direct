<?php

namespace App\Http\Controllers\Portal;

use App\FuneralHomeProfile;
use Illuminate\Http\Request;

class FuneralHomeProfilesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        /*//Rules for validation
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
        }*/
        // If no error than go inside otherwise go to the catch section
        /*try
        {*/

          $funeral_home_profile = New FuneralHomeProfile;
          $funeral_home_profile->funeral_home_id = $request->get('id');
          $funeral_home_profile->business_logo = $request->get('business_logo');
          $funeral_home_profile->phone = $request->get('phone');
          $funeral_home_profile->phone_code = $request->get('phone_code');
          $funeral_home_profile->free_code = $request->get('free_code');
          $funeral_home_profile->free_phone = $request->get('free_phone');
          $funeral_home_profile->mobile = $request->get('mobile');
          $funeral_home_profile->address1 = $request->get('address1');
          $funeral_home_profile->address2 = $request->get('address2');
          $funeral_home_profile->website = $request->get('website');
          $funeral_home_profile->about = $request->get('about');
          $funeral_home_profile->videourl = $request->get('videourl');

          $funeral_home_profile->save();

          return redirect()->route('funeral.setting',$request->get('id'))->withSuccess("Insert record successfully.");
        /*}
        catch(\Exception $e)
        {
          return redirect()->route('funeral-home.index')->withError('Something went wrong, Please try after sometime.');
        }*/
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\FuneralHomeProfile  $funeralHomeProfile
     * @return \Illuminate\Http\Response
     */
    public function show(FuneralHomeProfile $funeralHomeProfile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\FuneralHomeProfile  $funeralHomeProfile
     * @return \Illuminate\Http\Response
     */
    public function edit(FuneralHomeProfile $funeralHomeProfile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\FuneralHomeProfile  $funeralHomeProfile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $funeral_home_profile = FuneralHomeProfile::find($id);
        $funeral_home_profile->update($request->all());
        return redirect()->route('funeral.setting',$request->get('id'))->withSuccess("Update record successfully.");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\FuneralHomeProfile  $funeralHomeProfile
     * @return \Illuminate\Http\Response
     */
    public function destroy(FuneralHomeProfile $funeralHomeProfile)
    {
        //
    }
}
