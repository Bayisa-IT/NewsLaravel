@extends('backend.master')
@section('content')

<div class="container-fluid">
	<div class="row">
	  <div class="col-sm-12 title">
		<h1><i class="fa fa-bars"></i> All Advertisments <a href="{{url('add-adv')}}"><button class="btn  btn-primary">Add New</button></h1></a>
	  </div>
	  <div class="col-sm-12">
		@if (Session ::has('message'))
			<div class="alert alert-success alert-dismissable fade in">
				<a href="#" class="close" data-dismiss="alert">&times;</a>
				{{Session('message')}} 
			</div>
			@endif
	  </div>
	  
  
	 
	  <form method="post" action="{{url('multipledelete')}}">
			<div class="filter-div">
				{{ csrf_field() }}
				<input type="hidden" name="tbl" value="{{encrypt('advertisements')}}">
				<input type="hidden" name="tblid" value="{{encrypt('aid')}}">
				<div class="col-sm-2">
					<select name="bulk-action" class="form-control">
					<option value="0">Bulk Action</option>
					<option value="1">Move to Trash</option>
					</select>
				</div>
		
				<div class="col-sm-7">
					<div class="row">
					<button class="btn btn-default">Apply</button>
					</div>  
				</div>
				
			</div>  
			
			<div class="col-sm-12">
				<div class="content">
				<table class="table table-striped" id="myTable">
					<thead>
					<tr>
						<th width="50%"><input type="checkbox" id="select-all"> Title</th>
						
						<th>Links</th>
						<th>Location</th>
						<th>Image</th>
						<th>Status</th>
					</tr>
					</thead>
					<tbody>
						@if(count($data) > 0)
						@foreach ($data as $d)
						<tr>
							<td>
							<input type="checkbox" name="select-data[]" value="{{$d->aid}}"> 
							<a href="{{url('edit-adv')}}/{{$d->aid}}">{{$d->title}}</a>
							</td>
							<td>{{$d->url}}</td>
							<td>{{$d->location}}</td>
							<td><img src="{{url('advertisements')}}/{{$d->image}}" width="200"></td>  
							<td>{{$d->status}}</td>            
						</tr>
						
						@endforeach
						
						@else
							<tr>
								<td colspan="4">
								No post Found!
							</td>
						</tr>
						@endif
					
					</tbody>
				</table>
				</div>

			</div>
  </form>
	<div class="clearfix"></div>
  
	  
	</div>
  </div>
  
@stop  