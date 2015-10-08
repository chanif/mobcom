@extends('app')

@section('title')
Add New Post
@endsection

@section('content')

<script type="text/javascript" src="{{ asset('/js/tinymce/tinymce.min.js') }}"></script>
<script type="text/javascript">
	tinymce.init({
		relative_urls : false,
		remove_script_host : false,
		convert_urls : true,
		selector : "textarea",
		plugins : ["advlist autolink lists link image charmap print preview anchor", "searchreplace visualblocks code fullscreen", "insertdatetime media table contextmenu paste jbimages"],
		toolbar : "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image jbimages",
	}); 
</script>

<form action="/new-news" method="post">
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	<div class="form-group">
		<input required="required" value="{{ old('title') }}" placeholder="Enter title here" type="text" name = "title"class="form-control" />
	</div>
	<div class="form-group">
		<textarea name='body'class="form-control">{{ old('body') }}</textarea>
	</div>

    <div class="form-group fileUpload btn btn-primary">
        <span>Upload Image</span>
        <input
                class="upload"
                id="{{ $surpass->renderId('input') }}"
                name="{{ $surpass->renderId('input') }}"
                data-url="{{ route('news_image_upload') }}"
                data-remove-url="{{ route('news_image_remove') }}"
                accept="image/*"
                type="file" multiple>
        {!! $surpass->html('preview') !!}
    </div>
    <div class="clearfix"></div>

	<input type="submit" name='publish' class="btn btn-success" value = "Publish"/>
	<input type="submit" name='save' class="btn btn-default" value = "Save Draft" />
</form>

@endsection

@section('surpass')

    <script src="{{ asset('/bower_components/blueimp-file-upload/js/vendor/jquery.ui.widget.js') }}"></script>
    <script src="{{ asset('/bower_components/blueimp-load-image/js/load-image.all.min.js') }}"></script>
    <script src="{{ asset('/bower_components/blueimp-canvas-to-blob/js/canvas-to-blob.js') }}"></script>
    <script src="{{ asset('/bower_components/blueimp-file-upload/js/jquery.iframe-transport.js') }}"></script>
    <script src="{{ asset('/bower_components/blueimp-file-upload/js/jquery.fileupload.js') }}"></script>
    <script src="{{ asset('/bower_components/blueimp-file-upload/js/jquery.fileupload-process.js') }}"></script>
    <script src="{{ asset('/bower_components/blueimp-file-upload/js/jquery.fileupload-image.js') }}"></script>
    <script src="{{ asset('/bower_components/blueimp-tmpl/js/tmpl.min.js') }}"></script>

    {!! $surpass->html('js') !!}

@endsection