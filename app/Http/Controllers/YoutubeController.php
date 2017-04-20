<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Youtube;

class YoutubeController extends Controller
{
     public function getAddSongs(Request $request)
    {
    	
    	$returnList = [];

    	if($request->input('input') != null){
    		$videoList = Youtube::searchVideos($request->input('input'));
    		

    		foreach ($videoList as $video) {

    			$url = "https://www.youtube.com/watch?v=" . $video->id->videoId;
    			$details = $this->getSongTitle($url);
    			$array = array(
    				"title" => $details['title'],
    				"description" =>$details['description'],
    				"url" => "https://www.youtube.com/embed/" . $video->id->videoId

    			);

    			array_push($returnList, $array);
    		
    		}

    	}
		
		
        return view('addVIdeos', ['videoList' => $returnList]);    
    }

    public function getSongTitle($url){
    	$doc = new \DOMDocument();
    	
    	$html = file_get_contents($url);

    	@$doc->loadHTML($html);

    	$title = $doc->getElementById("eow-title");

    	$description = $doc->getElementById("eow-description");
    	
    	$array = array(
    		"title" => $string = trim(preg_replace('/\s\s+/', ' ', $title->textContent)),
    		"description" => $description->textContent,
    	);
    	
    	return $array;
    }
}
