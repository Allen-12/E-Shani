@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h3 class="card-title">Upload a Video</h3>
            <form method="post" action="/videos" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="title">Video Title</label>
                    <input type="text" class="form-control" name="title" id="title" aria-describedby="titleHelp" placeholder="Enter the title">
                    <small id="titleHelp" class="form-text text-muted">This is the title of the video that you want to upload</small>
                </div>
                <div class="form-group">
                    <label for="description">Video Description</label>
                    <input type="text" class="form-control" name="description" id="description" aria-describedby="descriptionHelp" placeholder="Enter the description">
                    <small id="descriptionHelp" class="form-text text-muted">This is the description of the video that you want to upload</small>
                </div>
                <div class="form-group">
                    <label for="video">Video</label>
                    <input type="file" class="form-control-file" name="video_url" id="video" aria-describedby="videoHelp" placeholder="Pick a video">
                    <small id="videoHelp" class="form-text text-muted">This is the video that you want to upload</small>
                </div>
                <button type="submit" class="btn btn-dark">Upload Video</button>
            </form>
    </div>
</div>
@endsection
