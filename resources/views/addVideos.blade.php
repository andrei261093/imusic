@extends('partials.master')

@section('title')
    Iorga-Bercaru MAD 2017
@endsection

@section('content') 

 <div class="row">
    <div class="col-md-6 col-md-offset-3">
        <form action="{{route('addSongs')}}">
            <p><input type="text" id="input" placeholder="Type something..." name="input" autocomplete="off" class="form-control" /></p>
                <p><input type="submit" value="Search" class="form-control btn btn-info w100"></p>
         </form>
         <div class="col-md-12">
			@foreach(array_chunk($videoList, 1) as $videoChunk)
				 <div class="row">
		 			 @foreach ($videoChunk as $video)
		 		  	 	<div class="col-md-6">
		 		 	  		<iframe width="290" height="155" allowfullscreen src="https://www.youtube.com/embed/{{ $video['url'] }}"></iframe>
		 	 			</div>
		 	 			<div>
		 	 				<h5><strong>{{ $video['title'] }}</strong></h5>
		 	 				<textarea rows="3" cols="35" maxlength="300" class="do_input" name="job_description">{{ $video['description'] }}</textarea>
		 	 				<form method="get" action="{{ route('addVideo')}}">
		 	 					
		 	 					<input class="form-control" type="hidden" name="title" value="{{ $video['title'] }}" />
		 	 					<input class="form-control" type="hidden" name="url" value="{{ $video['url'] }}" />
    							<button type="submit">Continue</button>
							</form>

		 	 				
		 	 			</div>
		 	 			<br>
		 			 @endforeach
				</div>
			@endforeach
		</div>
     </div>
  </div>
@endsection