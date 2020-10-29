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
        return view('admin.video.create', compact("videoCategory"));
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

        return redirect("/admin/videocategories/". $videoCategory->id . "/videos");
    }

    public function index(VideoCategory $videoCategory)
    {
        $videos = Video::where("category_id","=",$videoCategory->id)->get();
        return view("admin.video.index", compact("videoCategory","videos"));
    }

    public function edit(VideoCategory $videoCategory, Video $video)
    {
        return view("admin.video.edit", compact("video", "videoCategory"));
    }

    public function update(VideoCategory $videoCategory, Video $video)
    {
        if (\request()->hasFile('url'))
        {
            $data = \request()->validate([
                'title' => 'required',
                'description' => 'required',
                'url' => 'mimetypes:video/x-ms-asf,video/x-flv,video/mp4,application/x-mpegURL,video/MP2T,video/3gpp,video/quicktime,video/x-msvideo,video/x-ms-wmv,video/avi'
            ]);
        }
        else
        {
            $data = \request()->validate([
                'title' => 'required',
                'description' => 'required',
            ]);
        }

        $video->update($data);
        return redirect("/admin/videocategories/". $videoCategory->id . "/videos");
    }

    public function destroy(VideoCategory $videoCategory, Video $video)
    {
        $video->delete();
        return redirect("/admin/videocategories/". $videoCategory->id . "/videos");
    }
}
