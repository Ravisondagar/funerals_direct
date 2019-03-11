@extends('adminlte::page')
@section('title', 'View Category')
@section('content')
	<div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Category</h3>

              <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <a href="{!! route('categories.index') !!}" class="btn btn-primary pull-right" >Back</a>
                </div>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tr>
                  <th>ID</th>
                  <th>Name</th>
                </tr>
                <tr>
                  <td>{!! $category->id !!}</td>
                  <td>{!! $category->name !!}</td>
                </tr>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>
@stop