<?php

namespace App\Http\Controllers;

use App\Child;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ChildController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $children = Child::where("user_id","=",$user->id)->get();
        return view('user.profiles', compact("user","children"));
    }

    public function create()
    {
        $user = Auth::user();
        return view("user.create",compact("user"));
    }

    public function store()
    {
        $user = Auth::user();
        $data = \request()->validate([
           'name' => 'required',
           'age' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:4096',
        ]);
        $path = \request()->image->store("profile_images","public");
        $child = $user->children()->create($data);
        $child->update([
            'image' => $path
        ]);
//        dd($child);
        return redirect("/profiles");
    }

    public function show(Child $child)
    {
        return "Welcome ". $child->name .". This is your personal educational page";
    }
}
