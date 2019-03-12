<?php

namespace App\Http\Controllers\Admin;

use App\Blog;
use App\BlogCategory;
use Illuminate\Http\Request;
use Former;
use Auth;
use Validator;

class BlogsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::all();
        return view('Admin.blogs.index',compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $blog_categories = BlogCategory::all()->pluck('id','name');
        return view('Admin.blogs.add',compact('blog_categories'));
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
          'blog_category_id' => 'required',
          'title' => 'required',
          'description' => 'required',
        ];

        // Messages for validation
        $messages=[
          'blog_category_id.required' => 'Please select blog category.',
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
          $blog = New Blog;
          $blog->blog_category_id = $request->get('blog_category_id');
          $blog->author_id = Auth::user()->id;
          $blog->title = $request->get('title');
          $blog->description = $request->get('description');
          $blog->image = $request->get('image');
          $blog->is_archive = $request->get('is_archive');
          $blog->publish = $request->get('publish');
          $blog->save();

          return redirect()->route('blogs.index')->withSuccess("Insert record successfully.");
        }
        catch(\Exception $e)
        {
          return redirect()->route('blogs.index')->withError('Something went wrong, Please try after sometime.');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Blog  $blogCategory
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $blog = Blog::find($id);
        return view('Admin.blogs.show',compact('blog'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Blog  $blogCategory
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blog = Blog::find($id);
        $blog_categories = BlogCategory::all()->pluck('id','name');
        return view('Admin.blogs.edit',compact('blog','blog_categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Blog  $blogCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //Rules for validation
        $rules=[
          'blog_category_id' => 'required',
          'title' => 'required',
          'description' => 'required',
        ];

        // Messages for validation
        $messages=[
          'blog_category_id.required' => 'Please select blog category.',
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
          $blog = Blog::find($id);
          $blog->update($request->all());

          return redirect()->route('blogs.index')->withSuccess("Update record successfully.");
        }
        catch(\Exception $e)
        {
          return redirect()->route('blogs.index')->withError('Something went wrong, Please try after sometime.');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Blog  $blogCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Find blog blog
        $blog = Blog::find($id);
        $blog->delete();
        return redirect()->route('blogs.index')->withSuccess('Deleted successfully');
    }
}
