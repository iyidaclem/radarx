<div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="p-5 display-4 text-center"><small>Upcoming Events</small></h2>
            </div>
            @if(auth::check())
            <div class="col-sm-12 p-3" style="display:flex; flex-direction:row-reverse">
                <button data-bs-toggle="modal" data-bs-target="#addEvent" class="btn btn-primary">Add Event</button>
            </div>

            <!-- Modal -->
            <div wire:ignore.self class="modal fade text-dark" id="addEvent" tabindex="-1" aria-labelledby="addEventLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="addEventLabel">Add Event</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="img-div">
                                <img width="100%" src="{{$image?$image->temporaryUrl():'/images/noimage.jpg'}}" alt="No image">

                                <input type="file" wire:model="image" id="">
                                @error("image")
                                <div class="alert alert-danger w-100 p-2">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="w-100 p-2">
                                <input class="w-100 rounded" type="text" wire:model="title" placeholder="name" id="">
                                @error("title")
                                <div class="alert alert-danger w-100 p-2">{{$message}}</div>
                                @enderror
                            </div>

                            <div class="w-100 p-2">
                                <input class="w-100 rounded" type="text" wire:model="url" placeholder="url" id="">
                                @error("url")
                                <div class="alert alert-danger w-100 p-2">{{$message}}</div>
                                @enderror
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary" wire:click="createEvent">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
            @endif

            @if(count($this->getEvent()) < 1) <div class="col-md-12">
                <div class="text-center p-5 text-light">
                    <small>No event found</small>
                </div>
        </div>
        @endif

        @foreach($this->getEvent() as $event)

        <div class="col-sm-3">
            <div class="card" style="width: 100%;">
                <img src="{{$event->image}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{$event->title}}</h5>
                    <a href="{{$event->url}}" class="btn btn-success">Get it</a>
                    @if(auth::check())<a href="#" data-bs-toggle="modal" data-bs-target="#addEvent{{$loop->index}}" class="btn btn-danger">Delete</a>@endif
                </div>
            </div>
        </div>

        <!-- Modal -->
        <div wire:ignore.self class="modal fade text-dark" id="addEvent{{$loop->index}}" tabindex="-1" aria-labelledby="addEventLabel{{$loop->index}}" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="addEventLabel{{$loop->index}}">Delete Event</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Are you sure you want to delete this event ?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-danger" wire:click="deleteEvent({{$event->id}})">Delete</button>
                    </div>
                </div>
            </div>
        </div>
        @endforeach



    </div>
</div>
</div>