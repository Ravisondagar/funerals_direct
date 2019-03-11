@extends('adminlte::page')
@section('title', 'Add Range')
@section('content')
	<div class="box box-primary">
    <div class="box-header with-border">
      <h3 class="box-title">Add Range</h3>
      <a href="{!! route('ranges.index') !!}" class="btn btn-primary pull-right" >Back</a>
    </div>
    <!-- /.box-header -->
    <!-- form start -->
    <form role="form" method="post" action="{!! route('ranges.store') !!}">
    @csrf
      <div class="box-body">
        <div class="form-group">
          <label for="exampleInputEmail1">Name</label>
          <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Range Name" name="name" value="{!! old('name') !!}">
          @if($errors->has('name'))<span>{!! $errors->first('name') !!}</span>@endif
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Min</label>
          <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Minimum Range" name="min" value="{!! old('min') !!}">
          @if($errors->has('min'))<span>{!! $errors->first('min') !!}</span>@endif
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Max</label>
          <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Maximum Range" name="max" value="{!! old('max') !!}">
          @if($errors->has('max'))<span>{!! $errors->first('max') !!}</span>@endif
        </div>
      </div>
      <!-- /.box-body -->

      <div class="box-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
  </div>
@stop