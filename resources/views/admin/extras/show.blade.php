@extends('adminlte::page')
@section('title', 'View Extra')
@section('content')
	<div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Extra</h3>

              <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <a href="{!! route('extras.index') !!}" class="btn btn-primary pull-right" >Back</a>
                </div>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tr>
                  <th>ID</th>
                  <th>Title</th>
                  <th>Description</th>
                  <th>Code</th>
                  <th>Active</th>
                </tr>
                <tr>
                  <td>{!! $extra->id !!}</td>
                  <td>{!! $extra->title !!}</td>
                  <td>{!! $extra->description !!}</td>
                  <td>{!! $extra->code !!}</td>
                  <td>{!! $extra->active !!}</td>
                </tr>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>
@stop