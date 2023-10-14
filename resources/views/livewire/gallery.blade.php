<div>


    @section("page_cover")
    <li>
        <div class="background-img zoom">

            <img src="/frontend/html/img/gallery.jpeg" alt="">
        </div>
        <!--Container-->
        <div class="container hero-content">
            <!--Row-->
            <div class="row">
                <div class="col-sm-12 text-center">
                    <!--Inner hero-->
                    <div class="inner-hero">
                        <!-- <div class="back-rect"></div> -->
                        <h1 class="large text-white uppercase mb-0">{{env("APP_NAME")}} Gallery</h1>
                        <!-- <div class="front-rect"></div> -->

                    </div>
                </div>
                <!--End row-->
            </div>
            <!--End container-->
        </div>
        <!--End inner hero-->
    </li>
    @endsection
    <div class="row p-5">
        <div class="col-12" style="width: 100%; padding: 50px 60px; display: flex;
    flex-direction:column; align-items:center; justify-content:center; border: 1px dotted gray; background:gray;">
            <input wire:model="images" type="file" accept="image/png,image/jpeg,image/jpg,image/gif" multiple>
        </div>
    </div>
    @error("images")
    <div class="alert alert-danger">{{$message}}error</div>
    @enderror
    @if($images != null)
    <div class="container">
        <div class="row">
            <div class="col-12 p-5">
                <div class="row">
                    @foreach($images as $image)
                    <div class="col-3 mb-5">
                        <img src="{{$image->temporaryUrl()}}" width="100%" alt="">
                    </div>
                    @endforeach
                </div>

                <div class="text-center">
                    <input wire:model="image_title" type="text" placeholder="Enter image title" class="w-100 border p-3">
                    <br><br>
                    @error("image_title")
                    <div class="alert alert-danger">{{$message}}error</div>
                    @enderror

                    <br> <button wire:click="resetImages" class="btn btn-danger">Reset</button>
                    <button wire:click="uploadImages" class="btn btn-primary">Upload</button>
                </div>
            </div>
        </div>
    </div>
    @else

    @if(count($gallery) > 0)
    <div class="container">
        <div class="row">
            @foreach($gallery as $ga)
            <div class="col-sm-6">
                <img src="{{URL('storage/'.$ga->url)}}" alt="">
            </div>
            @endforeach
        </div>
    </div>
    @else
    <h1>No Photos</h1>
    @endif

    @endif
</div>