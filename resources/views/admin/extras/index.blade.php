@extends('adminlte::page')
@section('title', 'Extra')
@section('content')
    <div class="box">
      <div class="box-header">
        <h3 class="box-title">Extra</h3>
        <a href="{!! route('extras.create') !!}" class="btn btn-primary pull-right">Add Extra</a>
      </div>
      <!-- /.box-header -->
      <div class="box-body">
        <table id="example1" class="table table-bordered table-striped">
          <thead>
            <tr>
              <th>No</th>
              <th>Title</th>
              <th>Description</th>
              <th>code</th>
              <th>Active</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach($extras as $key => $extra)
              <tr>
                <td>{!! $key+1 !!}</td>
                <td>{!! $extra->title !!}</td>
                <td>{!! $extra->description !!}</td>
                <td>{!! $extra->code !!}</td>
                <td>{!! $extra->active !!}</td>
                <td>
                  <div class="btn-group">
                    <button type="button" class="btn btn-info">Action</button>
                    <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
                      <span class="caret"></span>
                      <span class="sr-only">Toggle Dropdown</span>
                    </button>
                    <ul class="dropdown-menu" role="menu">
                      <li><a href="{!! route('extras.edit',$extra->id) !!}">Edit</a></li>
                      <li><a href="{!! route('extras.show',$extra->id) !!}">View</a></li>
                      <li><a class="submit" href="javascript:;" data-id="{{$extra->id}}" >Delete</a></li>
                      {!! Former::open()->action( URL::route("extras.destroy",$extra->id) )->method('delete')->class('form'.$extra->id) !!}
                      {!! Former::close() !!}
                      {{-- <li class="divider"></li>
                      <li><a href="#">Separated link</a></li> --}}
                    </ul>
                  </div>
                </td>
              </tr>
            @endforeach
          </tbody>
          <tfoot>
          <tr>
            <th>No</th>
            <th>Name</th>
          </tr>
          </tfoot>
        </table>
      </div>
      <!-- /.box-body -->
    </div>
@stop
@section('js')
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
      $(function () {
        $('#example1').DataTable()
        $('#example2').DataTable({
          'paging'      : true,
          'lengthChange': false,
          'searching'   : false,
          'ordering'    : true,
          'info'        : true,
          'autoWidth'   : false
        })
      })

    </script>
    <script>
      $(document).ready(function(){
        $('#logout').click(function(e){
          e.preventDefault(this);
          $('#form').submit();
        });
      });
      $(document).on('click','.submit',function(e){
        var r=$(this).data('id');
          e.preventDefault(this);
          swal({
                title: "Are you sure?",
                text: "Once deleted, you will not be able to recover this imaginary file!",
                icon: "warning",
                buttons: true,
                dangerMode: true,
              })
              .then((willDelete) => {
                if (willDelete) { 
                  $('.form'+r).submit();
                } else {
                  //swal("Your imaginary file is safe!");
                  return false;
                }
            });
      }); 
    </script>

@stop