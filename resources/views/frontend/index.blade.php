@extends('frontend.master')
@section('content')

<div class="wrapper">
	@if (count($featured) >0)
	 <div class="row">
		@foreach ($featured as $key => $f)
			@if($key ==0)
			<div class="col-md-6">
				<div class="relative">
        	    	<a href="{{url('article')}}/{{$f->slug}}"><img src="{{url('posts')}}/{{$f->image}}" width="100%" />
                    <span class="caption">{{$f->title}}</span></a>
				    </div>
    	 </div>
		 @endif
		 @endforeach
    	 <div class="col-md-6">
    		<div class="row">
				@foreach ($featured as $key => $f)
			    @if($key >0 && $key < 3)
        		<div class="col-md-6">
					<div class="relative">
        	    	<a href="{{url('article')}}/{{$f->slug}}"><img src="{{url('posts')}}/{{$f->image}}" width="100%" />
                    <span class="caption">{{$f->title}}</span></a>
				    </div>
        	    </div>
				@endif
		      @endforeach
        
        	 </div>
        	 <div class="row" style="margin-top:30px;">
				@foreach ($featured as $key => $f)
			    @if($key >3 && $key <6)
        		<div class="col-md-6">
        	    	<div class="relative">
						<a href="{{url('article')}}/{{$f->slug}}"><img src="{{url('posts')}}/{{$f->image}}" width="100%" />
						<span class="caption">{{$f->title}}</span></a>
						</div>
        	    </div>
				@endif
				@endforeach
        	 </div>        
    	 </div>
		 </div>
		 @endif

         <div class="row" style="margin-top:30px;">
    	  <div class="col-md-8">
          <div class="col-md-12" style="border:1px solid #ccc; padding:15px 15px 30px 0px;">
        	<div class="col-md-12">
        		<h3 style="border-bottom:3px solid #81d742; padding-bottom:5px;"><span style="padding:6px 12px; background:#81d742;">News</span></h3>
        	</div>
        	<div class="col-md-6">
				@foreach ($general as $key=>$g)
					@if ($key==0)
					
					<a href="{{url('article')}}/{{$g->slug}}"><img src="{{('posts')}}/{{$g->image}}" width="100%" style="margin-bottom:15px;" /></a>
					
					<h3><a href="{{url('article')}}/{{$g->slug}}">{{$g->title}}</a></h3>
                    <p align="justify">{!! substr(strip_tags($g->description),0,300) !!}</p> 
					<a href="{{url('article')}}/{{$g->slug}}">Read more<span class="glyphicon glyphicon-chevron-right"></span><span class="glyphicon glyphicon-chevron-right"></span></a>
					@endif
					@endforeach
			</div>


            <div class="col-md-6">
				@foreach ($general as $key=>$g)
					@if ($key >0 && $key <6)
					
            	<div class="row" style="border-bottom:1px solid #ccc; padding-bottom:10px; margin-bottom:10px;">
	            	<div class="col-md-4">
                    	<div class="row">
    	            		<a href="{{url('article')}}/{{$g->slug}}"><img src="{{('posts')}}/{{$g->image}}" width="100%" /></a>
        	        	</div>
                    </div>
            	    <div class="col-md-8">
                    	<div class="row">
                			<a href="{{url('article')}}/{{$g->slug}}"><h4>{{$g->title}}</h4></a>
                		</div>
                    </div>
                </div>
				@endif
				@endforeach
   
            </div>
         </div>
        
	        <div class="col-md-12 image-gallery" style="border:1px solid #ccc; padding:15px 15px 30px 15px; margin-top:30px; margin-bottom:30px;">
    	    	<h3 style="border-bottom:3px solid #81d742; padding-bottom:5px;">
					<span style="padding:6px 12px; background:#81d742;">Business</span></h3>
					<div class="flex">
					@foreach ($business->take(5) as $b)
					<div>
						<a href="{{url('article')}}/{{$g->slug}}"><img src="{{url('posts')}}/{{$b->image}}" /></a>
					</div>
				    @endforeach
				</div>
	        </div>
        
         <div class="row">
        	<div class="col-md-6">
            <div class="col-md-12" style="border:1px solid #ccc; padding-bottom:30px;">
            	<div class="col-md-12" style="border-bottom:1px solid #ccc; padding:20px 10px; margin-bottom:10px;">
					<h3 style="border-bottom:3px solid #b952c8; padding-bottom:5px;"><span style="padding:6px 12px; background:#b952c8;">Sports</span></h3>
            		
					@foreach ($sports as $key=>$sp)
					@if ($key==0)
					
					<a href="{{url('article')}}/{{$sp->slug}}"><img src="{{('posts')}}/{{$sp->image}}" width="100%" style="margin-bottom:15px;" /></a>
					
					<h3><a href="{{url('article')}}/{{$sp->slug}}">{{$sp->title}}</a></h3>
					<p align="justify">{!!substr(strip_tags($sp->description),0,300)!!}</p> 
					<a href="{{url('article')}}/{{$sp->slug}}">Read more<span class="glyphicon glyphicon-chevron-right"></span><span class="glyphicon glyphicon-chevron-right"></span></a>
					@endif
					@endforeach
				</div>
				@foreach ($sports as $key=>$sp)
				@if ($key >0 && $key <5)
                 <div class="col-md-12" style="border-bottom:1px solid #ccc; padding-bottom:10px; margin-bottom:10px;">
	            	<div class="col-md-4">
                    	<div class="row fashion">
    	            		
							<a href="{{url('article')}}/{{$sp->slug}}"><img src="{{('posts')}}/{{$sp->image}}" width="100%"  /></a>
					
        	        	</div>
                    </div>
            	    <div class="col-md-8">
                    	<div class="row">
                			<h4><a href="{{url('article')}}/{{$sp->slug}}">{{$sp->title}}</a></h4>
                		</div>
                    </div>
                 </div>
				 @endif
					@endforeach
              
            </div>
		 </div>


        	<div class="col-md-6">
            <div class="col-md-12" style="border:1px solid #ccc; padding-bottom:30px;">
            	<div class="col-md-12" style="border-bottom:1px solid #ccc; padding:20px 10px; margin-bottom:10px;">
                <h3 style="border-bottom:3px solid #d95757; padding-bottom:5px;"><span style="padding:6px 12px; background:#d95757;">Technology</span></h3>
				@foreach ($technology as $key=>$tech)
				@if ($key==0)
				
				<a href="{{url('article')}}/{{$tech->slug}}"><img src="{{('posts')}}/{{$tech->image}}" width="100%" style="margin-bottom:15px;" /></a>
				
				<h3><a href="{{url('article')}}/{{$tech->slug}}">{{$tech->title}}</a></h3>
				<p align="justify">{!!substr(strip_tags($tech->description),0,300) !!}</p> 
				<a href="{{url('article')}}/{{$tech->slug}}">Read more<span class="glyphicon glyphicon-chevron-right"></span><span class="glyphicon glyphicon-chevron-right"></span></a>
				@endif
				@endforeach
				
				</div>
				@foreach ($technology as $key=>$tech)
				@if ($key >0 && $key <5)
                <div class="col-md-12" style="border-bottom:1px solid #ccc; padding-bottom:10px; margin-bottom:10px;">
	            	<div class="col-md-4">
                    	<div class="row fashion">
    	            		<a href="{{url('article')}}/{{$tech->slug}}"><img src="{{('posts')}}/{{$tech->image}}" width="100%"  /></a>
					
        	        	</div>
                    </div>
            	    <div class="col-md-8">
                    	<div class="row" style="padding-left:0px;">
                			<h4><a href="{{url('article')}}/{{$tech->slug}}">{{$tech->title}}</a></h4>
                		</div>
                    </div>
                </div>

				@endif
				@endforeach
              
             </div></div>
        
             <div class="col-md-12">
        	 <div class="col-md-12" style="border:1px solid #ccc; padding:15px 15px 30px 0px; margin-top:30px;">
			 <div class="col-md-12">
              <h3 style="border-bottom:3px solid #81d742; padding-bottom:5px;"><span style="padding:6px 12px; background:#81d742;">Entertainments</span></h3>
              </div>
        	  <div class="col-md-6">
				@foreach ($entertainments as $key=>$entert)
				@if ($key==0)
				
				<a href="{{url('article')}}/{{$entert->slug}}"><img src="{{('posts')}}/{{$entert->image}}" width="100%" style="margin-bottom:15px;" /></a>
				
				<h3><a href="{{url('article')}}/{{$entert->slug}}">{{$entert->title}}</a></h3>
				<p>{!! substr(strip_tags($entert->description),0,300) !!}</p> 
				<a href="{{url('article')}}/{{$entert->slug}}">Read more<span class="glyphicon glyphicon-chevron-right"></span><span class="glyphicon glyphicon-chevron-right"></span></a>
				@endif
				@endforeach
			   </div>
             <div class="col-md-6">
				@foreach ($entertainments as $key=>$entert)
				@if ($key >0 && $key <5)
            	 <div class="row" style="border-bottom:1px solid #ccc; padding-bottom:10px; margin-bottom:10px;">
	            	<div class="col-md-4">
                    	<div class="row">
    	            	
							<a href="{{url('article')}}/{{$entert->slug}}"><img src="{{('posts')}}/{{$entert->image}}" width="100%" /></a>
				
        	        	</div>
                    </div>
            	    <div class="col-md-8">
                    	<div class="row" style="padding-left:10px;">
                			<h4><a href="{{url('article')}}/{{$entert->slug}}">{{$entert->title}}</a></h4>
                		</div>
                    </div>
                  </div>
				  @endif
				@endforeach
                  
             </div>
             </div>
		     </div>
        
		 <div class="col-md-12 image-gallery" style="border:1px solid #ccc; padding:15px 15px 30px 15px; margin-top:30px; margin-bottom:30px;">
			<h3 style="border-bottom:3px solid #81d742; padding-bottom:5px;">
				<span style="padding:6px 12px; background:#81d742;">Travel</span></h3>
				<div class="flex">
				@foreach ($travel->take(5) as $trav)
				<div>
					<a href="{{url('article')}}/{{$trav->slug}}"><img src="{{url('posts')}}/{{$trav->image}}" /></a>
				</div>
				@endforeach
			</div>
		  </div>
         <!-- taken from entertainment-->  
          <div class="col-md-12">
			<div class="col-md-12" style="border:1px solid #ccc; padding:15px 15px 30px 0px; margin-top:30px;">
			<div class="col-md-12">
			 <h3 style="border-bottom:3px solid #4e42d7; padding-bottom:5px;"><span style="padding:6px 12px; background:#4e42d7;">Health</span></h3>
			 </div>
			 <div class="col-md-6">
			   @foreach ($health as $key=>$h)
			   @if ($key==0)
			   
			   <a href="{{url('article')}}/{{$h->slug}}"><img src="{{('posts')}}/{{$h->image}}" width="100%" style="margin-bottom:15px;" /></a>
			   
			   <h3><a href="{{url('article')}}/{{$h->slug}}">{{$h->title}}</a></h3>
			   <p align="justify">{!! substr(strip_tags($h->description),0,300) !!}</p> 
			   <a href="{{url('article')}}/{{$h->slug}}">Read more<span class="glyphicon glyphicon-chevron-right"></span><span class="glyphicon glyphicon-chevron-right"></span></a>
			   @endif
			   @endforeach
			  </div>
			<div class="col-md-6">
			   @foreach ($health as $key=>$h)
			   @if ($key >0 && $key <5)
				<div class="row" style="border-bottom:1px solid #ccc; padding-bottom:10px; margin-bottom:10px;">
				   <div class="col-md-4">
					   <div class="row">
					   
						   <a href="{{url('article')}}/{{$h->slug}}"><img src="{{('posts')}}/{{$h->image}}" width="100%" /></a>
			   
					   </div>
				   </div>
				   <div class="col-md-8">
					   <div class="row" style="padding-left:10px;">
						   <h4><a href="{{url('article')}}/{{$h->slug}}">{{$h->title}}</a></h4>
					   </div>
				   </div>
				 </div>
				 @endif
			   @endforeach
				 
			</div>
			</div>
			</div>
			</div>
			</div>


         <div class="col-md-4">
         <div class="col-md-12" style="border:1px solid #ccc; padding:15px;">
			<h3 style="border-bottom:3px solid #2b99ca; padding-bottom:5px;"><span style="padding:6px 12px; background:#2b99ca;">Politics</span></h3>
        	@foreach ($politics->take(10) as $pol)
			<div class="col-md-12" style="border-bottom:1px solid #ccc; padding-bottom:10px; margin-bottom:10px;">
				<div class="col-md-4">
					<div class="row">
					<a href="{{url('article')}}/{{$pol->slug}}"><img src="{{url('posts')}}/{{$pol->image}}" width="100%" style="margin-left:-15px;" /></a>
					</div>
			 </div>
			 <div class="col-md-8">
					<div class="row" style="padding-left:10px;">
						<a href="{{url('article')}}/{{$pol->slug}}"><h4>{{$pol->title}}</h4></a>
				 </div>
			 </div>
		 </div>
			@endforeach
			


			@if($sidebarTop)
               <div class="col-md-12 sidebar-adv">
				<a href="{{$sidebarTop->url}}"><img src="{{url('advertisements')}}/{{$sidebarBottom->image}}" width="100%" alt="{{$sidebarBottom->title}}"> </a>
		
            </div>  
			 @endif 
          </div>
          
          <div class="col-md-12" style="border:1px solid #ccc; padding:15px 15px 60px 15px; margin-top:30px;">
          	<div class="col-md-12" style="border-bottom:1px solid #ccc; padding:0px 10px 20px 10px; margin-bottom:10px;">
           		<h3 style="border-bottom:3px solid #2b99ca; padding-bottom:5px;"><span style="padding:6px 12px; background:#2b99ca;">Style</span></h3>
                    @foreach ($style as $key=> $s)
						@if ($key ==0)
					
				  <a href="{{('article')}}/{{$s->slug}}"></a><img src="{{url('posts')}}/{{$s->image}}" width="100%" style="margin-bottom:15px;" /></a>
				  <a href="{{url('article')}}/{{$s->slug}}"><h4>{{$s->title}}</h4></a>
				  <p align="justify">{!! substr(strip_tags($s->description),0,300) !!}</p><a href="{{('article')}}/{{$s->slug}}">Read more &raquo;</a>
            				
						@endif
				
					  @endforeach
				</div>
				@foreach ($style as $key=> $s)
				@if ($key >0 && $key <6)
			
                 <div class="col-md-12" style="border-bottom:1px solid #ccc; padding-bottom:10px; margin-bottom:10px;">
	            	<div class="col-md-4">
                    	<div class="row">
    	            		<a href="{{('article')}}/{{$s->slug}}"></a><img src="{{url('posts')}}/{{$s->image}}" width="100%" style="margin-left:-15px;" /></a>
        	        	</div>
                    </div>
            	    <div class="col-md-8">
                    	<div class="row" style="padding-left:0px;">
							<a href="{{url('article')}}/{{$s->slug}}"><h4>{{$s->title}}</h4></a>
                		</div>
                    </div>
                 </div>
            @endif
			@endforeach

			@if($sidebarBottom)
			<div class="col-md-12 sidebar-adv">
				<a href="{{$sidebarBottom->url}}"><img src="{{url('advertisements')}}/{{$sidebarBottom->image}}" width="100%" alt="{{$sidebarBottom->title}}"> </a>
		
            </div>  
			 @endif 
               
          </div>
          
            <!-- feature section 
          
         <div class="col-md-12" style="border:1px solid #ccc; padding:15px 15px 7px 15px; margin-top:30px;">
          	<div class="col-md-12" style="border-bottom:1px solid #ccc; padding:0px 10px 20px 10px; margin-bottom:10px;">
            <h3 style="border-bottom:3px solid #2b99ca; padding-bottom:5px;"><span style="padding:6px 12px; background:#2b99ca;">MORE NEWS</span></h3>
            		<img src="images/bride-301814_1280-392x272.jpg" width="100%" style="margin-bottom:15px;" />
        			<p align="justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>Read more <a href="#"><span class="glyphicon glyphicon-chevron-right"></span><span class="glyphicon glyphicon-chevron-right"></span></a>
            	</div>
                <div class="col-md-12" style="border-bottom:1px solid #ccc; padding-bottom:10px; margin-bottom:10px;">
	            	<div class="col-md-4">
                    	<div class="row">
    	            		<img src="images/relaxed-498245_1280-392x272.jpg" width="100%" style="margin-left:-15px;" />
        	        	</div>
                    </div>
            	    <div class="col-md-8">
                    	<div class="row" style="padding-left:0px;">
                			<h4>Lorem ipsum dolor sit amet</h4>
                		</div>
                    </div>
                </div>
                <div class="col-md-12" style="border-bottom:1px solid #ccc; padding-bottom:10px; margin-bottom:10px;">
	            	<div class="col-md-4">
                    	<div class="row">
    	            		<img src="images/relaxed-498245_1280-392x272.jpg" width="100%" style="margin-left:-15px;" />
        	        	</div>
                    </div>
            	    <div class="col-md-8">
                    	<div class="row" style="padding-left:0px;">
                			<h4>Lorem ipsum dolor sit amet</h4>
                		</div>
                    </div>
                </div>
                <div class="col-md-12" style="border-bottom:1px solid #ccc; padding-bottom:10px; margin-bottom:10px;">
	            	<div class="col-md-4">
                    	<div class="row">
    	            		<img src="images/relaxed-498245_1280-392x272.jpg" width="100%" style="margin-left:-15px;" />
        	        	</div>
                    </div>
            	    <div class="col-md-8">
                    	<div class="row" style="padding-left:0px;">
                			<h4>Lorem ipsum dolor sit amet</h4>
                		</div>
                    </div>
                </div>
                <div class="col-md-12" style="border-bottom:1px solid #ccc; padding-bottom:10px; margin-bottom:10px;">
	            	<div class="col-md-4">
                    	<div class="row">
    	            		<img src="images/relaxed-498245_1280-392x272.jpg" width="100%" style="margin-left:-15px;" />
        	        	</div>
                    </div>
            	    <div class="col-md-8">
                    	<div class="row" style="padding-left:0px;">
                			<h4>Lorem ipsum dolor sit amet</h4>
                		</div>
                    </div>
                </div>
                <div class="col-md-12" style="padding-bottom:10px;">
	            	<div class="col-md-4">
                    	<div class="row">
    	            		<img src="images/relaxed-498245_1280-392x272.jpg" width="100%" style="margin-left:-15px;" />
        	        	</div>
                    </div>
            	    <div class="col-md-8">
                    	<div class="row" style="padding-left:0px;">
                			<h4>Lorem ipsum dolor sit amet</h4>
                		</div>
                    </div>
                </div>
          </div> 
         -->
        </div>
    </div> 
</div>

@endsection