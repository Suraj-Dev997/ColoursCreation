<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function index()
    {
        $videos = Video::all();
        $data = compact('videos');
        return view('frontend.videogallery')->with($data);
    }
}
