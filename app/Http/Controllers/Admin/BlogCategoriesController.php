<?php

namespace App\Http\Controllers\Admin;

use App\BlogCategory;
use Illuminate\Http\Request;
use Former;
use Auth;
use Validator;

class BlogCategoriesController extends Controller
{
    public function index()
    {
        $blog_categories = BlogCategory::all();
        return view('admin.blog_categories.index',compact('blog_categories'));
    }

    public function create()
    {
        return view('Admin.blog_categories.add');
    }


    public function store(Request $request)
    {
        //Rules for validation
        $rules=[
          'name' => 'required',
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
          $blog_category = New BlogCategory;
          $blog_category->name = $request->get('name');
          $blog_category->save();

          return redirect()->route('blog-categories.index')->withSuccess("Insert record successfully.");
        }
        catch(\Exception $e)
        {
          return redirect()->route('blog-categories.index')->withError('Something went wrong, Please try after sometime.');
        }
    }

    public function show($id)
    {
        $blog_category = BlogCategory::find($id);
        return view('Admin.blog_categories.show',compact('blog_category'));
    }

    public function edit($id)
    {
        $blog_category = BlogCategory::find($id);
        return view('Admin.blog_categories.edit',compact('blog_category'));
    }

    public function update(Request $request, $id)
    {
        //Rules for validation
        $rules=[
          'name' => 'required',
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
          $blog_category = BlogCategory::find($id);
          $blog_category->update($request->all());

          return redirect()->route('blog-categories.index')->withSuccess("Update record successfully.");
        }
        catch(\Exception $e)
        {
          return redirect()->route('blog-categories.index')->withError('Something went wrong, Please try after sometime.');
        }
    }

    public function destroy($id)
    {
        //Find blog blog_category
        $blog_category = BlogCategory::find($id);
        $blog_category->delete();
        return redirect()->route('blog-categories.index')->withSuccess('Deleted successfully');
    }
}
