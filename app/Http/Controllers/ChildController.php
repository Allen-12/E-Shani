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
           'name' => 'string|required',
           'age' => 'string|required',
            'image' => 'string|required',
        ]);
//        $path = \request()->image->store("profile_images/".\request('image'),"public");
//        dd($data);
        $user->children()->create($data);
        return redirect("/profiles");
    }

    public function show(Child $child)
    {
        return "Welcome ". $child->name .". This is your personal educational page";
    }

    public function update(Child $child)
    {
        $data = \request()->validate([
            'name' => 'string',
            'image' => 'string',
        ]);

        $child->update($data);
        return redirect("/profiles");
    }
}
