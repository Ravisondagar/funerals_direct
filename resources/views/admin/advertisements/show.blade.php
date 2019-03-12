@extends('adminlte::page')
@section('title', 'View Advertisement')
@section('content')
	<div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Advertisement</h3>

          <div class="box-tools">
            <div class="input-group input-group-sm" style="width: 150px;">
              <a href="{!! route('advertisements.index') !!}" class="btn btn-primary pull-right" >Back</a>
            </div>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body table-responsive no-padding">
          <table class="table table-hover">
            <tr>
              <th>ID</th>
              <td>{!! $advertisement->id !!}</td>
            </tr>
              <th>Text</th>
              <td>{!! $advertisement->text !!}</td>
            </tr>
              <th>Link</th>
              <td>{!! $advertisement->link !!}</td>
            </tr>
              <th>Image</th>
              <td><img src="{!! asset($advertisement->image_url()) !!}" style="height: 100px;width: 100px"></td>
            </tr>
              <th>Active</th>
              <td>{!! $advertisement->active !!}</td>
            </tr>
          </table>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </div>
  </div>
@stop