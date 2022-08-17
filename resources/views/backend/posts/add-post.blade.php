@extends('backend.master')
@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-sm-10 title">
			<h1><i class="fa fa-bars"></i> Add New Post</h1>
		</div>
         <div class="col-sm-12">
			@if (Session ::has('message'))
			<div class="alert alert-success alert-dismissable fade in">
				<a href="#" class="close" data-dismiss="alert">&times;</a>
				{{Session('message')}} 
			</div>
			@endif
		 </div>
		<div class="col-sm-12">
			<div class="row">
		<form method="post" action="{{action('crudController@insertData')}}" enctype="multipart/form-data">
			{{ csrf_field() }}
			<input type="hidden" name="tbl" value="{{encrypt('posts')}}">
				<div class="col-sm-9">
				<div class="form-group">	
				<input type="text" name="title"  id="post-title" class="form-control" placeholder="Enter title here">				
					</div>	
				<div class="form-group">	
						<input type="text" name="slug"  id="slug" class="form-control" placeholder="Enter slug here">				
					</div>
		
					<div class="form-group">		
						<textarea class="form-control" name="description" rows="15"></textarea>
						<div class="col-sm-12 word-count">Word count: 0</div>
					</div>	
				</div>
				<div class="col-sm-3">
					<div class="content publish-box">
						<h4>Publish  <span class="pull-right"><i class="fa fa-chevron-down"></i></span></h4><hr>	
						<div class="form-group">
							<button class="btn btn-default" name="status" value="draft">Save Draft</button>
						</div>
						<p>Status: Draft <a href="#">Edit</a></p>
						<p>Visibility: Public <a href="#">Edit</a></p>
						<p>Publish: Immediately <a href="#">Edit</a></p>
						<div class="row">
							<div class="col-sm-12 main-button">
								<button class="btn btn-primary pull-right" name="status" value="publish">Publish</button>
							</div>
						</div>	
					</div>
					
					<div class="content cat-content">
					<h4>Category  <span class="pull-right"><i class="fa fa-chevron-down"></i></span></h4><hr>
							@foreach ($categories as $cat)
							<p><label for="{{$cat->id}}"><input type="checkbox" name="category_id[]" value="{{$cat->id}}">{{$cat->title}}</label></p>
									
							@endforeach
								</div>
								<div class="content featured-image">
								<h4>Featured Image <span class="pull-right"><i class="fa fa-chevron-down"></i></span></h4><hr>	
						<p><img id="output" style="max-width: 100%"/></p>
						<p><input type="file"  accept="image/*" name="image" id="file"  onchange="loadFile(event)" style="display: none;"></p>
						<p><label for="file" style="cursor: pointer;">Set Feature Image</label></p>
						
									</div>
								</div>
		</form>
			</div>
		</div>
	</div>
</div>


<script src="{{url('ckeditor/ckeditor.js')}}"></script>
<script>
	CKEDITOR.replace('description',
	 {
		 "filebrowserBrowseUrl": "ckfinder/ckfinder.html", 
		 "filebrowserImageBrowseUrl": "ckfinder/ckfinder.html?type=Images", 
		 "filebrowserFlashBrowseUrl": "ckfinder/ckfinder.html?type=Flash", 
		 "filebrowserUploadUrl": "ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files",
		  "filebrowserImageUploadUrl": "ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images",
		   "filebrowserFlashUploadUrl": "ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash" });	
</script>

<script>
	var loadFile = function(event) {
		var image = document.getElementById('output');
		image.src = URL.createObjectURL(event.target.files[0]);
	};
	</script>
@stop