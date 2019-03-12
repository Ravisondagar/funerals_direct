@extends('adminlte::page')
@section('title', 'View Blog')
@section('content')
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Blog</h3>

          <div class="box-tools">
            <div class="input-group input-group-sm" style="width: 150px;">
              <a href="{!! route('blogs.index') !!}" class="btn btn-primary pull-right" >Back</a>
            </div>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body table-responsive no-padding">
          <table class="table table-hover">
            <tr>
              <th>ID</th>
              <td>{!! $blog->id !!}</td>
            </tr>
             <tr>
              <th>Blog Category</th>
              <td>{!! $blog->blog_category->name !!}</td>
            </tr>
              <th>Title</th>
              <td>{!! $blog->title !!}</td>
            </tr>
              <th>Description</th>
              <td>{!! $blog->description !!}</td>
            </tr>
              <th>Image</th>
              <td><img src="{!! asset($blog->image_url()) !!}" style="height: 100px;width: 100px"></td>
            </tr>
            <tr>
              <th>Is Archive</th>
              <td>{!! $blog->is_archive !!}</td>
            </tr>
            <tr>
              <th>Publish</th>
              <td>{!! $blog->publish !!}</td>
            </tr>
          </table>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </div>
  </div>
@stop