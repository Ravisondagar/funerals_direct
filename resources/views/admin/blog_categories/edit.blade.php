@extends('adminlte::page')
@section('title', 'Edit Category')
@section('content')
	<div class="box box-primary">
    <div class="box-header with-border">
      <h3 class="box-title">Edit Blog Category</h3>
      <a href="{!! route('blog-categories.index') !!}" class="btn btn-primary pull-right" >Back</a>
    </div>
    <!-- /.box-header -->
    <!-- form start -->
    <form role="form" method="post" action="{!! route('blog-categories.update',$blog_category->id) !!}">
    @csrf
    @method('PATCH')
      <div class="box-body">
        <div class="form-group">
          <label for="exampleInputEmail1">Name</label>
          <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Blog Category Name" name="name" value="{!! $blog_category->name !!}">
          @if($errors->has('name'))<span>{!! $errors->first('name') !!}</span>@endif
        </div>
      </div>
      <!-- /.box-body -->

      <div class="box-footer">
        <button type="submit" class="btn btn-primary">Update</button>
      </div>
    </form>
  </div>
@stop