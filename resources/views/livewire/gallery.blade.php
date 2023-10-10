<div>

<button class="btn btn-primary" wire:click="$this->toggleUpload()">Upload Pictures</button>

    @section("page_cover")
    <img src="/frontend/html/img/gallery.jpeg" alt="">
    @endsection

    @section("cover_content")
    <h1 class="large text-white uppercase mb-0">{{env('APP_NAME')}} Gallery</h1>
    <h5 class="mb-0 text-white uppercase">Browse and View our galleries</h5>

    @if(Auth::check())
    <div class="container">
        <div class="row">
            <div class="col-12 p-4 bg-secondary">
                <button class="btn btn-primary" wire:click="toggleUpload()">Upload Pictures</button>
            </div>
            @if($isUploading)
            <div class="col-12">
                <input type="file" accept="image/png,image/jpeg,image/gif,image/jpg" multiple>
            </div>
            @endif
        </div>
    </div>
    @endif
    @endsection






</div>