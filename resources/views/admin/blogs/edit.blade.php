@extends('adminlte::page')
@section('title', 'Edit Blog')
@section('content')
  <div class="box box-primary">
    <div class="box-header with-border">
      <h3 class="box-title">Edit Blog</h3>
      <a href="{!! route('blogs.index') !!}" class="btn btn-primary pull-right" >Back</a>
    </div>
    <!-- /.box-header -->
    <!-- form start -->
    <form role="form" method="post" action="{!! route('blogs.update',$blog->id) !!}">
    @csrf
    @method('PATCH')
      <div class="box-body">
        <div class="form-group">
          <label for="exampleInputEmail1">Blog Category</label>
            <select class="form-control select2" data-placeholder="Select a State"  name="blog_category_id">
              @foreach($blog_categories as $blog_category => $key)
                <option value="{!! $key !!}" @if($blog->blog_category->id == $key) selected @endif>{!! $blog_category !!}</option>
              @endforeach 
            </select>
          @if($errors->has('title'))<span>{!! $errors->first('title') !!}</span>@endif
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Title</label>
          <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Blog Title" name="title" value="{!! $blog->title !!}">
          @if($errors->has('title'))<span>{!! $errors->first('title') !!}</span>@endif
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Description</label>
          <textarea class="form-control" placeholder="Enter Description" name="description">{!! $blog->description !!}</textarea>
          @if($errors->has('description'))<span>{!! $errors->first('description') !!}</span>@endif
        </div>
        <div class="form-group">
          <div id="container">
          <label>Image</label>
          <div id="previewDiv">
            <img id="img" src="{!! asset($blog->image_url()) !!}" style="height: 100px;width: 100px">
          </div>
          <a href="javascript:;" class="btn btn-primary" id="uploader">Upload Image</a>
          @if($errors->has('image'))<p class="help-block">{!! $errors->first('image') !!}</p>@endif
          </div>
          <input type="hidden" name="image" id="image">
        </div>
        <div class="form-group">
          <label>Is Archive</label>
          <input type="hidden" name="is_archive" value="0">
          <input type="checkbox" name="is_archive" value="1" @if($blog->is_archive == '1') checked @endif>
        </div>
        <div class="form-group">
          <label>Publish</label>
          <input type="hidden" name="publish" value="0">
          <input type="checkbox" name="publish" value="1" @if($blog->publish == '1') checked @endif>
        </div>
      </div>
      <!-- /.box-body -->

      <div class="box-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
  </div>
@stop
@section('js')
<script src="{!! asset('unisharp/laravel-ckeditor/ckeditor.js') !!}"></script>
<script src="{!! asset('unisharp/laravel-ckeditor/adapters/jquery.js') !!}"></script>
<script src="{!! asset('js/plupload.full.min.js') !!}"></script>
<script type="text/javascript">
  var uploader = new plupload.Uploader({
      runtimes : 'html5,flash,silverlight,html4',
       
      browse_button : 'uploader', // you can pass in id...
      container: document.getElementById('container'), // ... or DOM Element itself
       
      url : "{{ asset('plupload/upload.php') }}",

      filters : {
          max_file_size : '10mb',
          mime_types: [
              {title : "Image files", extensions : "jpg,gif,png"},
              {title : "Zip files", extensions : "zip"}
          ]
      },
   
      // Flash settings
      flash_swf_url : "{{ asset('plupload/Moxie.swf') }}",
   
      // Silverlight settings
      silverlight_xap_url : "{{ asset('plupload/Moxie.xap') }}",
       
   
      init: {
          PostInit: function() {
              //document.getElementById('filelist').innerHTML = '';
          },
   
          FilesAdded: function(up, files) {
              
              uploader.start();
          },
   
          // UploadProgress: function(up, file) {
          //     document.getElementById(file.id).getElementsByTagName('b')[0].innerHTML = '<span>' + file.percent + "%</span>";
          // },
          UploadFile: function(up, file){
                      var tmp_url = '{!! asset('/tmp/') !!}';
                      console.log(file);
                      
                          $('#image').val(file.name);
                          $('#img').remove();
                          $('#previewDiv').append("<img src='"+tmp_url +"/"+ file.name+"' id='img' height='100px' width='100px'/>");
                          

                          /*$('#preview').val(file.name);
                          $('#previewDiv >img').remove();
                          $('#previewDiv').append("<img src='"+tmp_url +"/"+ file.name+"' id='preview' height='100px' width='100px'/>");*/
                      
                  },
          UploadComplete: function(up, files){
            
                  var tmp_url = '{!! asset('/tmp/') !!}';
                  console.log(files);
                  plupload.each(files, function(file) {
                      $('#image').val(file.name);
                      $('#previewDiv > img').remove();
                      $('#previewDiv').append("<img src='"+"/tmp/"+ file.name+"' id='preview' height='100px' width='100px'/>");
                  });
                  jQuery('.loader').fadeToggle('medium');
          },
   
          Error: function(up, err) {
              document.getElementById('console').innerHTML += "\nError #" + err.code + ": " + err.message;
          }
      }
  });
   
  uploader.init();

  $('textarea').ckeditor();
</script>
@stop