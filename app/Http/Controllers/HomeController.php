<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Videos;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function logout()
    {
        Auth::logout();
        return view('home');
    }

    public function bogdan()
    {
        return view('loginBogdan');
    }

    public function addVideo(Request $request){
        
        $user = Auth::user();
        $video = new Videos([
                'videoId' =>  $request->url,
                'title' => $request->title,
                'userID' => $user->id
        ]);
        $video->save();
        return redirect()->back();
    }

    public function songView($videoID) {
        $user = Auth::user();
        $videos = Videos::where('userID', $user->id)->get();
        
        return view('songView', ['videoID' => $videoID, 'videos' => $videos]);
    }

    public function getMySongs() {
        $user = Auth::user();
        $videos = Videos::where('userID', $user->id)->get();
        
        return view('mySongs', ['videos' => $videos]);
    }

    public function search(Request $request){
        $user = Auth::user();
        $input = $request->input('input');
        $videos = Videos::where('title','like', "%$input%")->where('userID', $user->id)->get();
 
        return view('mySongs', ['videos' => $videos]);;
    }
}
