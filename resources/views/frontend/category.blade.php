@extends('frontend.master')
@section('content')
@section('title')
	<title>{{$cat->title}}</title>
@endsection
		<div class="row" style="margin-top:30px;">
			<div class="col-md-8">
				<div class="col-md-12" style="padding:15px 15px 30px 0px;">
					<div class="col-md-12">
						<h3 style="border-bottom:3px solid #81d742; padding-bottom:5px;"><span style="padding:6px 12px; background:#81d742; text-transform: uppercase">{{$cat->title}}</span></h3>
					</div>
					
						@if (count($posts) >0)
						<div class="col-md-12">
						@foreach ($posts as $key => $post)
						@if ($key==0)
							
						<a href="{{url('article')}}/{{$post->slug}}">
						<img src="{{url('posts')}}/{{$post->image}}" width="100%" style="margin-bottom:15px;" /></a>
						<p align="justify">
							{!!substr(strip_tags($post->description),0,300)!!}
						</p>
						<p><a href="{{url('article')}}/{{$post->slug}}">Read more &raquo;</a></p>
						@endif
						@endforeach
					</div>
					    @foreach ($posts as $key => $post)
						@if ($key >0 && $key <6)
						<div class="col-md-6">
							<a href="{{url('article')}}/{{$post->slug}}">
								<img src="{{url('posts')}}/{{$post->image}}" width="100%" style="margin-bottom:15px;" /></a>
							
							<p align="justify">
								{!!substr(strip_tags($post->description),0,300)!!}
							</p>
							<p><a href="{{url('article')}}/{{$post->slug}}">Read more &raquo;</a></p>
						</div>
						@endif
						@endforeach
					@endif 
					        
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
				<a href="{{$sidebarTop->url}}"><img src="{{url('advertisements')}}/{{$sidebarTop->image}}" width="100%" alt="{{$sidebarTop->title}}"> </a>
		
            </div>
			 @endif 

				@if($sidebarBottom)
				<div class="col-sm-12 sidebar-adv">
				<a href="{{$sidebarBottom->url}}"><img src="{{url('advertisements')}}/{{$sidebarBottom->image}}" width="100%" alt="{{$sidebarBottom->title}}"> </a>
		       @endif
				</div>
			</div>

			 

			

		</div> 
	</div>

@stop