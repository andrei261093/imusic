@extends('partials.master')

@section('title')
    Iorga-Bercaru MAD 2017
@endsection

@section('content') 


<div class="col-md-12">

	<div class="col-md-3">
		<h3>Playlist</h3>
	</div>
	<center>
		<div  class="col-md-12">
	
               
          
   
				<ul class="list-group">
					@forelse ($videos as $video)
				  		<li class="list-group-item">
				  		<a href="{{route('songView', [$video->videoId])}}">{{$video->title}}</a>
				  		</li>
				  	@empty
               			<h1>No videos!</h1>
				  	@endforelse
				</ul>




			
		</div>	
	</center>
	
</div>

@endsection