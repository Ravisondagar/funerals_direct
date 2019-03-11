@extends('adminlte::page')
@section('title', 'View author')
@section('content')
	<div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">author</h3>

          <div class="box-tools">
            <div class="input-group input-group-sm" style="width: 150px;">
              <a href="{!! route('authors.index') !!}" class="btn btn-primary pull-right" >Back</a>
            </div>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body table-responsive no-padding">
          <table class="table table-hover">
            <tr>
              <th>ID</th>
              <th>Name</th>
              <th>Description</th>
              <th>Designation</th>
              <th>Website</th>
              <th>Image</th>
            </tr>
            <tr>
              <td>{!! $author->id !!}</td>
              <td>{!! $author->name !!}</td>
              <td>{!! $author->description !!}</td>
              <td>{!! $author->designation !!}</td>
              <td>{!! $author->website !!}</td>
              <td><img src="{!! asset($author->image_url()) !!}" style="height: 200px;width: 200px"></td>
            </tr>
          </table>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </div>
  </div>
@stop