@extends('adminlte::page')
@section('title', 'View Location')
@section('content')
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Location</h3>

          <div class="box-tools">
            <div class="input-group input-group-sm" style="width: 150px;">
              <a href="{!! route('locations.index') !!}" class="btn btn-primary pull-right" >Back</a>
            </div>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body table-responsive no-padding">
          <table class="table table-hover">
            <tr>
              <th>ID</th>
              <td>{!! $location->id !!}</td>
            </tr>
            {{--  <tr>
              <th>Location Category</th>
              <td>{!! $location->blog_category->name !!}</td>
            </tr> --}}
              <th>Title</th>
              <td>{!! $location->title !!}</td>
            </tr>
              <th>Description</th>
              <td>{!! $location->description !!}</td>
            </tr>
              <th>Image</th>
              <td><img src="{!! asset($location->image_url()) !!}" style="height: 100px;width: 100px"></td>
            </tr>
            <tr>
              <th>Is Archive</th>
              <td>{!! $location->price !!}</td>
            </tr>
          </table>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </div>
  </div>
@stop