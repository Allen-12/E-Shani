@extends('layouts.app')
@section('title','Edit-video')
@section('content')

<div class="flex">
    <div class="mx-auto py-6">

        <div class="jumbotron">
            <p style="text-align:left"> <a href=""> <button type="button"  class="btn btn-outline-info">Back to home page </button></a></p>
            <h1 class="display-5" style="text-align:center">Edit Video</h1>

            <p class="lead">Post your content here <strong> Please make sure that your video is compressed as was demonstrated to you.</strong></p>
            <hr class="my-4">
            <p>Fill in where <i style="color:red">This field is required</i></p>

        </div>
        <div class="container">

            <form method="post" action="/videocategories/{{ $videoCategory->id }}/videos/{{ $video->id }}" enctype="multipart/form-data" class=" shadow-md rounded px-8 pt-6 pb-8 mb-4">
                @csrf
                @method('PATCH')

                <label for="title" class="block text-gray-700 text-sm font-bold mb-2">
                    <h4>Video Title</h4>
                </label>

                <br/>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="title" id="title" required placeholder="E.g Sharing is caring"/>
                @error('title')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
                <br/>
                <br/>
                <br/>

                <label class="block text-gray-700 text-sm font-bold mb-2">
                    <h4>Video Description</h4>
                </label>

                <br/>
                <textarea class="headerImage shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="description" name="description" placeholder="Enter a short description of the video"></textarea>
                @error('description')
                <small class="text-danger">{{ $message }}</small>
                @enderror
                <br/>
                <br/>
                <br/>
                <label class="block text-gray-700 text-sm font-bold mb-2">
                    <h4>Video</h4>
                </label>

                <br/>
                <input  name="url" type="file" id="video" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="">
                @error('url')
                <small class="text-danger">{{ $message }}</small>
                @enderror
                <br/>

                <br>
                <br>
                <p style="text-align:center">

                    <button class="btn btn-outline-info" id="submitButton" type="submit">Edit Video</button></p>
                <br>


            </form>
        </div>
    </div>
</div>
@endsection
