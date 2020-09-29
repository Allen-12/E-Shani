<?php

namespace App\Http\Controllers;

use App\Video;
use App\VideoCategory;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function create(VideoCategory $videoCategory)
    {
//        dd($videoCategory);
        return view('video.create', compact("videoCategory"));
    }

    public function store(VideoCategory $videoCategory)
    {
        $data = \request()->validate([
            'title' => 'required',
            'description' => 'required',
            'url' => 'mimetypes:video/x-ms-asf,video/x-flv,video/mp4,application/x-mpegURL,video/MP2T,video/3gpp,video/quicktime,video/x-msvideo,video/x-ms-wmv,video/avi'
        ]);

        $path = \request()->url->store('','google');
//        dd($path);
        $video = $videoCategory->videos()->create($data);
//        dd($data);
        $video->update([
            'url' => $path
        ]);

        return "Video Uploaded Successfully!!";
    }
}
