@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.5.3/dist/css/uikit.min.css" />
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <link rel="icon" href="images/logo.png" type="svg">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script type="text/javascript" src="js/jquery-3.5.1.min.js"></script>
    <meta charset="utf-8">
    <title>{{ config("app.name") }}</title>
</head>

<body>

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

                <p style="text-align:center">
                    <button class="btn btn-outline-info" id="submitButton" type="submit">Create Category</button></p>
                <br>

{{--                <script>--}}
{{--                    function scrollToTop(){--}}
{{--                        window.scrollTo(20,0);--}}
{{--                    }--}}
{{--                    function confirmTing(a){--}}
{{--                    //     if(a==0){--}}
{{--                    //         document.getElementById('submitButton').setAttribute( "onClick", "confirmTing(1)" );--}}
{{--                    //         console.log(a);--}}
{{--                    //         //$('html, body').animate({ scrollTop: 80 }, 'slow');--}}
{{--                    //         window.alert('Confirm your input and submit again');--}}
{{--                    //     }else{--}}
{{--                    //         document.getElementById("coachForm").submit();--}}
{{--                    //         $.ajax({--}}
{{--                    //             type: 'POST',--}}
{{--                    //             url: '',--}}
{{--                    //             data: ''--}}
{{--                    //         });--}}
{{--                    //     }--}}
{{--                    }--}}
{{--                </script>--}}
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
        </tr>
    @endforeach
    </tbody>
</table>
@endsection
<script src="https://cdn.jsdelivr.net/npm/uikit@3.5.3/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.5.3/dist/js/uikit-icons.min.js"></script>
  </body>
</html>
