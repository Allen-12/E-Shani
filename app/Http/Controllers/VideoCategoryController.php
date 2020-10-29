<?php

namespace App\Http\Controllers;

use App\VideoCategory;
use Illuminate\Http\Request;

class VideoCategoryController extends Controller
{
    public function create()
    {
        $videoCategories = VideoCategory::all();
        return view("admin.video_category.create", compact("videoCategories"));
    }

    public function store()
    {
        $data = \request()->validate([
            "name" => "required"
        ]);

        VideoCategory::create($data);
        return redirect("/admin/videocategories/create");
    }
}
