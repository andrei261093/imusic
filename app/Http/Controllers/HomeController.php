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

    public function getMyVideos($videoID) {
        $user = Auth::user();
        $videos = Videos::where('userID', $user->id)->get();
        
        return view('mySongs', ['videoID' => $videoID, 'videos' => $videos]);
    }
}
