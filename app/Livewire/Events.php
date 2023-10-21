<?php

namespace App\Livewire;

use App\Models\Event;
use Livewire\Component;

class Events extends Component
{
    public $image = "Edit content";
    public $title = "Edit content";
    public $info = "Edit content";
    public $price = 0;
    public $url = "Edit content";
    public $deleteId = "Edit content";

    public function render()
    {
        return view('livewire.events')->extends("layouts.app");
    }

    public function getEvent()
    {
        return Event::latest()->paginate("10");
    }
    public function addEvent()
    {
        dd($this->image);
        $this->validate([
            "image" => "required",
            "title" => "required",
            "info" => "required",
            "price" => "required",
            "url" => "required",

        ]);


        Event::create(
            [
                "user_id" =>   auth()->user()->id,
                "image" => $this->image,
                "title" => $this->title,
                "info" => $this->info,
                "price" => $this->price,
                "url" => $this->url
            ]

        );

        return redirect("/events");
    }

    public function changeDeleteId($id)
    {
        $this->deleteId = $id;
    }

    public function deleteEvent()
    {
        $event = Event::find($this->deleteId);

        if ($event) {
            $event->delete();
            return redirect("/events");
        }
    }
}
