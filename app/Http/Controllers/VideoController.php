<?php

namespace App\Http\Controllers;

use App\Video;
//use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function create()
    {
        return view('video.create');
    }

    public function store()
    {
        $data = \request()->validate([
           'title' => 'required',
            'description' => 'required',
            'video_url' => 'mimetypes:video/x-ms-asf,video/x-flv,video/mp4,application/x-mpegURL,video/MP2T,video/3gpp,video/quicktime,video/x-msvideo,video/x-ms-wmv,video/avi'
        ]);

        $video = Video::create($data);
        $video->update([
           'video_url' =>\request()->video_url->store('videos','public')
        ]);

        return "Video Uploaded Successfully!!";
    }
}
