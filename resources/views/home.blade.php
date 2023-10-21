@extends('layouts.app')

@section('content')
<div class="container" style="margin-top: 100px;">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card" style="width: 18rem;">
                <img src="/frontend/html/img/gallery.jpeg" class="card-img-top" alt="gallery">
                <div class="card-body">
                    <h5 class="card-title">Gallery</h5>
                    <p class="card-text">Upload, view and delete images</p>
                    <a href="gallery" class="btn btn-danger">View Images</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card" style="width: 18rem;">
                <img src="/frontend/html/img/video.jpeg" class="card-img-top" alt="Video">
                <div class="card-body">
                    <h5 class="card-title">Video</h5>
                    <p class="card-text">Add new videos into the website. Edit and also delete</p>
                    <a href="videos" class="btn btn-danger">View Videos</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card" style="width: 18rem;">
                <img src="/frontend/html/img/merch.jpeg" class="card-img-top" alt="merches">
                <div class="card-body">
                    <h5 class="card-title">Merch</h5>
                    <p class="card-text">Manage merches</p>
                    <a href="merch" class="btn btn-danger">Manage</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection