@extends('adminlte::page')
@section('title', 'Edit extra')
@section('content')
  <div class="box box-primary">
    <div class="box-header with-border">
      <h3 class="box-title">Edit extra</h3>
      <a href="{!! route('extras.index') !!}" class="btn btn-primary pull-right" >Back</a>
    </div>
    <!-- /.box-header -->
    <!-- form start -->
    <form role="form" method="post" action="{!! route('extras.update',$extra->id) !!}">
    @csrf
    @method('PATCH')
      <div class="box-body">
        <div class="form-group">
          <label for="exampleInputEmail1">Title</label>
          <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter extra Name" name="title" value="{!! $extra->title !!}">
          @if($errors->has('title'))<span>{!! $errors->first('title') !!}</span>@endif
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Description</label>
          <textarea class="form-control" placeholder="Enter Description" name="description">{!! $extra->description !!}</textarea>
          @if($errors->has('description'))<span>{!! $errors->first('description') !!}</span>@endif
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Code</label>
          <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Maximum extra" name="code" value="{!! $extra->code !!}">
          @if($errors->has('code'))<span>{!! $errors->first('code') !!}</span>@endif
        </div>
        <div class="form-group">
          <label for="active">Active</label>
          <input type="hidden" name="active" value="0">
          <input type="checkbox" class="minimal-red" value="1" name="active" id="active" @if($extra->active == '1') checked @endif> 
        </div>
      </div>
      <!-- /.box-body -->

      <div class="box-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
  </div>
@stop