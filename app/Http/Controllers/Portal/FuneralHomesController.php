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
          $funeral_home->publish = 0;
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
    public function edit($id)
    {
        $funeral_home = FuneralHome::find($id);
        return view('user.render.render_reneme_name',compact('funeral_home'));

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
        $funeral_home = FuneralHome::find($id);
        $funeral_home->update($request->all());
        return redirect()->route('funeral-home.index')->withSuccess("Update record successfully.");
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

    public function publish(Request $request)
    {
         $funeral_home = FuneralHome::find($request->get('id'));
         $funeral_home->publish = 1;
         $funeral_home->update();
         return redirect()->route('funeral-home.index')->withSuccess("Update record successfully.");
    }

    public function unpublish(Request $request)
    {
         $funeral_home = FuneralHome::find($request->get('id'));
         $funeral_home->publish = 0;
         $funeral_home->update();
         return redirect()->route('funeral-home.index')->withSuccess("Update record successfully.");
    }

    public function delete(Request $request)
    {
         $funeral_home = FuneralHome::find($request->get('id'));
         $funeral_home->delete();
         return redirect()->route('funeral-home.index')->withSuccess("Update record successfully.");
    }

    public function duplicate(Request $request)
    {
        $funeral_home = New FuneralHome;
        $funeral_home->user_id = Auth::user()->id;
        $funeral_home->name = $request->get('name');
        $funeral_home->publish = 0;
        $funeral_home->save();

        $funeral_home_original = FuneralHome::find($request->get('id'));
        $funeral_home_profile = New FuneralHomeProfile;
        $funeral_home_profile->funeral_home_id = $funeral_home->id;
        $funeral_home_profile->business_logo = $funeral_home_original->funeral_home_profile->business_logo;
        $funeral_home_profile->phone = $funeral_home_original->funeral_home_profile->phone;
        $funeral_home_profile->phone_code = $funeral_home_original->funeral_home_profile->phone_code;
        $funeral_home_profile->free_code = $funeral_home_original->funeral_home_profile->free_code;
        $funeral_home_profile->free_phone = $funeral_home_original->funeral_home_profile->free_phone;
        $funeral_home_profile->mobile = $funeral_home_original->funeral_home_profile->mobile;
        $funeral_home_profile->address1 = $funeral_home_original->funeral_home_profile->address1;
        $funeral_home_profile->address2 = $funeral_home_original->funeral_home_profile->address2;
        $funeral_home_profile->website = $funeral_home_original->funeral_home_profile->website;
        $funeral_home_profile->about = $funeral_home_original->funeral_home_profile->about;
        $funeral_home_profile->videourl = $funeral_home_original->funeral_home_profile->videourl;

        $funeral_home_profile->save();
         
        return redirect()->route('funeral-home.index')->withSuccess("Update record successfully.");
    }


}
