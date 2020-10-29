@extends('layouts.app')
@section('title','Add Child')
@section('content')

<div class="flex">
    <div class="mx-auto py-6">

        <div class="jumbotron">
            <h1 class="display-5" style="text-align:center">Add a new child</h1>
        </div>
        <div class="container">
            <form method="post" action="/profiles" enctype="multipart/form-data" class=" shadow-md rounded px-8 pt-6 pb-8 mb-4">
                @csrf

                <label for="title" class="block text-gray-700 text-sm font-bold mb-2">
                    <h4>Name</h4>
                </label>

                <br/>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="name" id="name" required placeholder="E.g Full Name"/>
                @error('name')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
                <br/>
                <br/>
                <br/>

                <label class="block text-gray-700 text-sm font-bold mb-2">
                    <h4>Age Group</h4>
                </label>

                <br/>
                <div class="uk-form-select" data-uk-form-select>
                    <span></span>
                    <select name="age">
                        <option>Select an age group</option>
                        <option value="1">4-5 years old</option>
                        <option value="2">5-6 years old</option>
                        <option value="3">7-8 years old</option>
                    </select>
                </div>
                @error('age')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
                <br/>
                <br/>
                <br/>
                <label class="block text-gray-700 text-sm font-bold mb-2">
                    <h4>Image</h4>
                </label>

                <br/>
                <input  name="image" type="file" id="video" required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="">
                @error('image')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
                <br/>

                <br>
                <br>
                <p style="text-align:center">
                    <button class="btn btn-outline-info" id="submitButton" type="submit">Add Child</button></p>
                <br>
            </form>
        </div>
    </div>
</div>
@endsection
