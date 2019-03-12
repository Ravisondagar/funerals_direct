@extends('adminlte::page')
@section('title', 'Edit Advertisement')
@section('content')
  <div class="box box-primary">
    <div class="box-header with-border">
      <h3 class="box-title">Edit Advertisement</h3>
      <a href="{!! route('advertisements.index') !!}" class="btn btn-primary pull-right" >Back</a>
    </div>
    <!-- /.box-header -->
    <!-- form start -->
    <form role="form" method="post" action="{!! route('advertisements.update',$advertisement->id) !!}">
    @csrf
    @method('PATCH')
      <div class="box-body">
        <div class="form-group">
          <label for="exampleInputEmail1">Text</label>
          <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Advertisement Name" name="text" value="{!! $advertisement->text !!}">
          @if($errors->has('text'))<span>{!! $errors->first('text') !!}</span>@endif
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Link</label>
          <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Advertisement Name" name="link" value="{!! $advertisement->link !!}">
          @if($errors->has('link'))<span>{!! $errors->first('link') !!}</span>@endif
        </div>
        <div class="form-group">
          <div id="container">
          <label>Image</label>
          <div id="previewDiv">
            <img id="img" src="{!! asset($advertisement->image_url()) !!}" style="height: 100px;width: 100px">
          </div>
          <a href="javascript:;" class="btn btn-primary" id="uploader">Upload Image</a>
          @if($errors->has('image'))<p class="help-block">{!! $errors->first('image') !!}</p>@endif
          </div>
          <input type="hidden" name="image" id="image">
        </div>
        <div class="form-group">
          <label>Active</label>
          <input type="hidden" name="active" value="0">
          <input type="checkbox" name="active" value="1" @if($advertisement->active == '1') checked @endif>
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
</script>
@stop