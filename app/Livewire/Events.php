<?php

namespace App\Livewire;

use App\Models\Event;
use Livewire\Component;
use Livewire\WithFileUploads;

class Events extends Component
{
    use WithFileUploads;
    public $image;
    public $title;
    public $info;
    public $price = 0;
    public $url;
    public $deleteId;

    public function render()
    {
        return view('livewire.events')->extends("layouts.app");
    }

    public function createEvent()
    {
        $this->validate([
            "image" => "required|mimes:jpeg,jpg,png,gif|max:20000",
            "title" => "required",
            "url" => "required"
        ]);

        $path = "storage/" . $this->image->store("/public/images");
        $path = explode("/public", $path);
        $path = $path[0] . $path[1];
        $path = URL($path);
        $event = new Event();
        $event->user_id = auth()->user()->id;
        $event->title = $this->title;
        $event->url = $this->url;
        $event->image = $path;
        $event->save();
        return redirect(URL("event"));
    }

    public function getEvent()
    {
        return Event::latest()->paginate("10");
    }

    public function changeDeleteId($id)
    {
        $this->deleteId = $id;
    }

    public function deleteEvent($id)
    {
        $event = Event::find($id);

        if ($event) {
            $event->delete();
            return redirect("/events");
        }
    }
}
