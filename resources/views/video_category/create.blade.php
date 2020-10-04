@extends('layouts.app')
@section('title' ,'Create-category')
@section('content')

<div class="flex">
    <div class="mx-auto py-6">

        <div class="jumbotron">
            <p style="text-align:left"> <a href=""> <button type="button"  class="btn btn-outline-info">Back to home page </button></a></p>
            <h1 class="display-5" style="text-align:center">Create Video Category</h1>

            <p class="lead">Post your content here <strong> Please make sure that your video is compressed as was demonstrated to you.</strong></p>
            <hr class="my-4">
            <p>Fill in where <i style="color:red">This field is required</i></p>

        </div>

        <div class="container">

            <form method="post" action="/videocategories" enctype="multipart/form-data" class=" shadow-md rounded px-8 pt-6 pb-8 mb-4">
                @csrf
                <label for="categoryName" class="block text-gray-700 text-sm font-bold mb-2">
                    <h4>Category Name</h4>
                </label>
                <br/>
                <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="name" id="categoryName" required placeholder="E.g Nature"></input>
                <br/>
                <br/>
                @error('categoryName')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                <p style="text-align:center">
                    <button class="btn btn-outline-info" id="submitButton" type="submit">Create Category</button></p>
                <br>


            </form>
        </div>
    </div>
</div>

<table class="uk-table uk-table-striped">
    <thead>
    <tr>
        <th>#</th>
        <th>Category Name</th>
    </tr>
    </thead>
    <tbody>
    @foreach($videoCategories as $category)
        <tr>
            <td>{{ $category->id }}</td>
            <td>{{ $category->name }}</td>
            <td><a class="uk-button uk-button-primary" href="/videocategories/{{ $category->id }}/videos/create">Create Video in this Category</a></td>
            <td><a class="uk-button uk-button-primary" href="/videocategories/{{ $category->id }}/videos">View Videos in this Category</a></td>
        </tr>
    @endforeach
    </tbody>
</table>
@endsection
