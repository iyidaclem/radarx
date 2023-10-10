@extends('layouts.app')
@section("page_cover")
<img src="/frontend/html/img/home.png" alt="">
@endsection

@section("cover_content")
<div class="back-rect"></div>
<h1 class="large text-white uppercase mb-0">DASHBOARD</h1>
<h5 class="mb-0 text-white uppercase">Welcome back...</h5>
<div class="front-rect"></div>
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card" style="width: 18rem;">
                <img src="/frontend/html/img/gallery.jpeg" class="card-img-top" alt="gallery">
                <div class="card-body">
                    <h5 class="card-title">Gallery</h5>
                    <p class="card-text">Upload, view and delete images</p>
                    <a href="gallery" class="btn btn-primary">View Images</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card" style="width: 18rem;">
                <img src="/frontend/html/img/video.jpeg" class="card-img-top" alt="Video">
                <div class="card-body">
                    <h5 class="card-title">Video</h5>
                    <p class="card-text">Add new videos into the website. Edit and also delete</p>
                    <a href="videos" class="btn btn-primary">View Videos</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card" style="width: 18rem;">
                <img src="/frontend/html/img/merch.jpeg" class="card-img-top" alt="merches">
                <div class="card-body">
                    <h5 class="card-title">Merch</h5>
                    <p class="card-text">Manage merches</p>
                    <a href="merch" class="btn btn-primary">Manage</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection