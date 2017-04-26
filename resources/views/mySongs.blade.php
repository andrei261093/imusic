@extends('partials.master')

@section('title')
    Iorga-Bercaru MAD 2017
@endsection

@section('content') 
<div class="col-md-12">
	<div >
		<center><iframe width="900" height="600" allowfullscreen src="https://www.youtube.com/embed/{{ $videoID }}"></iframe></center>
	</div>
	<center>
		<div  class="col-md-12">
			
				<ul class="list-group">
					@foreach ($videos as $video)
				  		<li class="list-group-item">
				  		<a href="{{route('mySongs', [$video->videoId])}}">{{$video->title}}</a>
				  		</li>
				  	@endforeach
				</ul>
			
		</div>	
	</center>
	
	</div>

@endsection