@extends('frontend.master')
@section('content')
@section('title')
	<title>{{$data->title}}</title>
@endsection
	<div class="wrapper">

		<div class="row" style="margin-top:30px;">
			<div class="col-md-8">
				<div class="col-md-12" style="padding:15px 15px 30px 0px;">				
					<div class="col-md-12">
						
						 <h1 class="text-uppercase">{{$data->title}}</h1>
					     {!!$data->description!!}
					</div>	
				
				</div>        
			</div>

<!-- right section -->
			<div class="col-md-4">
				<div class="col-md-12" style="padding:15px;">
					<h3 style="border-bottom:3px solid #2b99ca; padding-bottom:5px;"><span style="padding:6px 12px; background:#2b99ca;">Latest News</span></h3>
					@foreach ($latest->take(10) as $lat)
					<div class="col-md-12" style="border-bottom:1px solid #ccc; padding-bottom:10px; margin-bottom:10px;">
						<div class="col-md-4">
							<div class="row">
								<a href="{{('article')}}/{{$lat->slug}}"><img src="{{url('posts')}}/{{$lat->image}}" width="100%" style="margin-left:-15px;" /></a>
							</div>
						</div>
						<div class="col-md-8">
							<div class="row" style="padding-left:10px;">
								<a href="{{url('article')}}/{{$lat->slug}}"><h4>{{$lat->title}}</h4></a>
							</div>
						</div>
					</div>
					@endforeach
					
				   
				</div>

			 
			@if($sidebarTop)
			<div class="col-sm-12 sidebar-adv">
			<a href="{{$sidebarTop->url}}">
			<img src="{{url('advertisements')}}/{{$sidebarTop->image}}" width="100%" alt="{{$sidebarTop->title}}">
			</a>
		</div>
		 @endif 

		@if($sidebarBottom)
			<div class="col-sm-12 sidebar-adv">
			<a href="{{$sidebarBottom->url}}">
			<img src="{{url('advertisements')}}/{{$sidebarBottom->image}}" width="100%" alt="{{$sidebarBottom->title}}">
	   </a>
		@endif
			</div>
		</div> 
	</div>
@stop