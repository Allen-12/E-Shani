@extends('layouts.app')
@section('title','E-shani')

@section('content')
    <div class="card-header text-center">
        <h2 >All videos for the {{ $videoCategory->name }} category</h2>
    </div>
    <div class="row m-0 p-0" style="height: 30rem;">
        @foreach($videos as $video)
            <div class="col-md-6 col-lg-4" style="height: 30rem;">
                <div class="card mb-2"  >
                    <img class="card-img-top" src="" alt="Card image cap" style="height: 200px">
                    <div class="card-body" >
                        <h5 class="card-title">{{ $video->title }}</h5>
                        <p class="card-text">{{ $video->description }}</p>
                        <div class="card-footer align-content-center">
                            <a href="/videocategories/{{ $videoCategory->id }}/videos/{{ $video->id }}/edit"  style="background-color:orange; border-color:orange; " class=" btn btn-raised btn-rounded z-depth-1 btn-warning">Edit Video Details</a>
                            <form class="mt-2" action="/videocategories/{{ $videoCategory->id }}/videos/{{ $video->id }}/delete" method="post">
                                @csrf
                                @method('DELETE')

                                <button type="submit" style="background-color:orange; border-color:orange; " class=" btn btn-raised btn-rounded z-depth-1 btn-danger">Delete Video</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach

        @empty($videos)
            <h1>No videos have been uploaded in this category</h1>
        @endempty
    </div>
@endsection
