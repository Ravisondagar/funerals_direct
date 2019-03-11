@extends('adminlte::page')
@section('title', 'Categories')
@section('content')
    <div class="box">
      <div class="box-header">
        <h3 class="box-title">Categories</h3>
        <a href="{!! route('categories.create') !!}" class="btn btn-primary pull-right">Add Category</a>
      </div>
      <!-- /.box-header -->
      <div class="box-body">
        <table id="example1" class="table table-bordered table-striped">
          <thead>
            <tr>
              <th>No</th>
              <th>Name</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach($categories as $key => $category)
              <tr>
                <td>{!! $key+1 !!}</td>
                <td>{!! $category->name !!}</td>
                <td>
                  <div class="btn-group">
                    <button type="button" class="btn btn-info">Action</button>
                    <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
                      <span class="caret"></span>
                      <span class="sr-only">Toggle Dropdown</span>
                    </button>
                    <ul class="dropdown-menu" role="menu">
                      <li><a href="{!! route('categories.edit',$category->id) !!}">Edit</a></li>
                      <li><a href="{!! route('categories.show',$category->id) !!}">View</a></li>
                      <li><a class="submit" href="javascript:;" data-id="{{$category->id}}" >Delete</a></li>
                      {!! Former::open()->action( URL::route("categories.destroy",$category->id) )->method('delete')->class('form'.$category->id) !!}
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