@extends('layouts.app')

@section('content')
<div class="container" style="margin-top: 100px;">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card" style="width: 18rem;">
                <img src="/frontend/html/img/gallery.jpeg" class="card-img-top" alt="gallery">
                <div class="card-body">
                    <h5 class="card-title">Merchs</h5>
                    <p class="card-text">Upload, view and delete merchs</p>
                    <a href="/merch" class="btn btn-danger">View merchs</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card" style="width: 18rem;">
                <img src="/frontend/html/img/merch.jpeg" class="card-img-top" alt="merches">
                <div class="card-body">
                    <h5 class="card-title">Events</h5>
                    <p class="card-text">Manage events</p>
                    <a href="merch" class="btn btn-danger">Manage</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection