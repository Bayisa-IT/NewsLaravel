<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
@yield('title')
<link href="{{url('css/bootstrap.min.css')}}" rel="stylesheet" />
<link href="{{url('css/font-awesome.min.css')}}" rel="stylesheet" />
<link href="{{url('css/bootstrap-theme.min.css')}}" rel="stylesheet" />
<link href="{{url('css/bootstrap.css')}}" rel="stylesheet"  />
<link href="{{url('css/style.css')}}" rel="stylesheet"  />
</head>
<body>
<div class="col-md-12 top" id="top">
	<div class="col-md-9 top-left">
    	<div class="col-md-3">
    		<span class="day">{{date('l, m d,Y')}}</span> 
        </div>
        <div class="col-md-9">
        	<span class="latest">Latest: </span> <a href="{{url('article')}}/{{$latestnews->slug}}">{{$latestnews->title}}</a>
        </div>
     </div>
    <div class="col-md-3 top-social">
        @foreach ($setting->social as $key=> $social)
        <a href="{{$social}}"  class="social-icon"><i class="fa fa-{{$icons[$key]}}"></i></a>
        @endforeach
    </div>
</div>

<div class="col-md-12 brand">
	<div class="col-md-4 name">
        @if ($setting->image)
        <img src="{{url('settings')}}/{{$setting->image}}">
        @endif
    	
    </div>
    <div class="col-md-8">
        @if($leaderboard)
      <a href="{{$leaderboard->url}}"><img src="{{url('advertisements')}}/{{$leaderboard->image}}" width="100%" alt="{{$leaderboard->title}}"></a> 
        @endif
    	
    </div>
</div>

<div class="col-md-12 main-menu">
	<div class="col-md-10 menu">
		<nav class="navbar">
			<div class="navbar-header">
    			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mynavbar"> 
					<span class="icon-bar"></span>
            		<span class="icon-bar"></span>
            		<span class="icon-bar"></span>
            		<span class="icon-bar"></span>
        		</button>
        		
    		</div>
    		<div class="collapse navbar-collapse" id="mynavbar">
    			<ul class="nav nav-justified">
    				<li><a href="{{url('/')}}" class="active"><span class="glyphicon glyphicon-home"></span></a></li>
    				
					@foreach($categories as $cat)
					<li><a href="{{url('/category')}}/{{$cat->slug}}" class="text-uppercase">{{$cat->title}}</a></li>
					@endforeach
					
    				
        		</ul> 
			</div>
		</nav>
	</div>
	<div class="col-md-2 search">
    	<input type="search" id="search_content" class="form-control"  />
        <span class="glyphicon glyphicon-search btn"></span>
        <div id="search-output"></div>
    </div>
   
</div> 

<!--HEADER-->

@yield('content')

<!--FOOTER-->
<div class="col-md-12 bottom">
    <div class="col-md-4">
        <h3 style="border-bottom:2px solid #ccc;"><span style="border-bottom:2px solid #f00;">About Us</span></h3>
        @if ($setting->image)
        <img src="{{url('settings')}}/{{$setting->image}}">
        @endif <p align="justify">{{$setting->about}}</p>
    </div>
    <div class="col-md-4">
        <div class="col-md-12">
            <h3 style="border-bottom:2px solid #ccc;"><span style="border-bottom:2px solid #f00;">Quick Links</span></h3>
            <ul class="nav">
                @foreach ($pages as $page)
                 <li><a href="{{url('page')}}/{{$page->slug}}" class="text-uppercase">{{$page->title}}</a></li>
                 @endforeach
            </ul> 
        </div>    
       </div>
     <div class="col-md-4">
        <h3 style="border-bottom:2px solid #ccc;"><span style="border-bottom:2px solid #f00;">Contact Us</span></h3>
        @if ($setting->image)
        <img src="{{url('settings')}}/{{$setting->image}}">
        @endif
        <br /><br /><br />
        <p>Follow us at:</p>
        @foreach ($setting->social as $key=> $social)
        <a href="{{$social}}" class="social-icon"><i class="fa fa-{{$icons[$key]}}"></i></a>
        @endforeach</a><br />
        <a href="#top" class="goto"><span class="glyphicon glyphicon-chevron-up"></span></a>
    </div>
</div>
<div class="col-md-12 text-center copyright">
Copyright &copy; {{date('Y')}} <a href="#">NEWS PORTAL</a> Powered by: <a href="#">Bayisa</a>
</div>
<script src="{{url('js/jquery.min.js')}}"></script>
<script src="{{url('js/bootstrap.min.js')}}"></script>
<script src="{{url('js/bootstrap.js')}}"></script>

<script>            
	$(document).ready(function() {
		var duration = 500;
		$(window).scroll(function() {
			if ($(this).scrollTop() > 200) {
				$('.goto').fadeIn(duration);
			} else {
				$('.goto').fadeOut(duration);
			}
		});

		$('.goto').click(function(event) {
			event.preventDefault();
			$('html').animate({scrollTop: 0}, duration);
			return false;
		})
         $('#search_content').keyup(function(){
            var text =  $('#search_content').val();
            if(text.length < 1 ){
                $('#search-output').hide();
                return false;
            }
            else{
                $.ajax({
                    type : "get",
                    url : "{{url('search-content')}}",
                    data : {text:text},
                    success : function(res){
                        $('#search-output').show();
                        $('#search-output').html(res);
                    }

                });
            }
        });
	});
</script>	
</body>
</html>
