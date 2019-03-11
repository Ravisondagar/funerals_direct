<?php

namespace App\Http\Controllers\Admin;

use App\Extra;
use Illuminate\Http\Request;
use Former;
use Auth;
use Validator;

class ExtrasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $extras = Extra::all();
        return view('Admin.extras.index',compact('extras'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.extras.add');
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
          'title' => 'required',
          'description' => 'required',
          'code' => 'required',
        ];

        // Messages for validation
        $messages=[
          'title.required' => 'Please enter first name.',
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
          $extra = New Extra;
          $extra->title = $request->get('title');
          $extra->description = $request->get('description');
          $extra->code = $request->get('code');
          $extra->active = $request->get('active');
          $extra->save();

          return redirect()->route('extras.index')->withSuccess("Insert record successfully.");
        }
        catch(\Exception $e)
        {
          return redirect()->route('extras.index')->withError('Something went wrong, Please try after sometime.');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Extra  $blogCategory
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $extra = Extra::find($id);
        return view('Admin.extras.show',compact('extra'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Extra  $blogCategory
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $extra = Extra::find($id);
        return view('Admin.extras.edit',compact('extra'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Extra  $blogCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //Rules for validation
        $rules=[
          'title' => 'required',
          'description' => 'required',
          'code' => 'required',
        ];

        // Messages for validation
        $messages=[
          'title.required' => 'Please enter first name.',
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
          $extra = Extra::find($id);
          $extra->update($request->all());

          return redirect()->route('extras.index')->withSuccess("Update record successfully.");
        }
        catch(\Exception $e)
        {
          return redirect()->route('extras.index')->withError('Something went wrong, Please try after sometime.');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Extra  $blogCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Find blog extra
        $extra = Extra::find($id);
        $extra->delete();
        return redirect()->route('extras.index')->withSuccess('Deleted successfully');
    }
}
