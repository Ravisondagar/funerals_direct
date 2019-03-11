<?php

namespace App\Http\Controllers\Admin;

use App\Range;
use Illuminate\Http\Request;
use Former;
use Auth;
use Validator;

class RangesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ranges = Range::all();
        return view('Admin.ranges.index',compact('ranges'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.ranges.add');
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
          'min' => 'required',
          'max' => 'required',
        ];

        // Messages for validation
        $messages=[
          'name.required' => 'Please enter first name.',
        ];
        
        // Make validator with rules and messages
        $validator = Validator::make($request->all(),$rules,$messages);
        // If validator fails than it will redirect back and gives error otherwise go to try catch section
        if ($validator->fails()) { 
          //Former::withErrors($validator);
          return redirect()->back()->withErrors($validator)->withInput();
        }
        // If no error than go inside otherwise go to the catch section
        try
        {
          $range = New Range;
          $range->name = $request->get('name');
          $range->min = $request->get('min');
          $range->max = $request->get('max');
          $range->save();

          return redirect()->route('ranges.index')->withSuccess("Insert record successfully.");
        }
        catch(\Exception $e)
        {
          return redirect()->route('ranges.index')->withError('Something went wrong, Please try after sometime.');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Range  $blogCategory
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $range = Range::find($id);
        return view('Admin.ranges.show',compact('range'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Range  $blogCategory
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $range = Range::find($id);
        return view('Admin.ranges.edit',compact('range'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Range  $blogCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //Rules for validation
        $rules=[
          'name' => 'required',
          'min' => 'required',
          'max' => 'required',
        ];

        // Messages for validation
        $messages=[
          'name.required' => 'Please enter first name.',
        ];
        
        // Make validator with rules and messages
        $validator = Validator::make($request->all(),$rules,$messages);
        // If validator fails than it will redirect back and gives error otherwise go to try catch section
        if ($validator->fails()) { 
          //Former::withErrors($validator);
          return redirect()->back()->withErrors($validator)->withInput();
        }
        // If no error than go inside otherwise go to the catch section
        try
        {
          $range = Range::find($id);
          $range->update($request->all());

          return redirect()->route('ranges.index')->withSuccess("Update record successfully.");
        }
        catch(\Exception $e)
        {
          return redirect()->route('ranges.index')->withError('Something went wrong, Please try after sometime.');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Range  $blogCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Find blog range
        $range = Range::find($id);
        $range->delete();
        return redirect()->route('ranges.index')->withSuccess('Deleted successfully');
    }
}
