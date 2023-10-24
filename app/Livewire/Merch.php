<?php

namespace App\Livewire;

use App\Models\Merch as ModelsMerch;
use Livewire\Component;

class Merch extends Component
{
    public $image = "Edit content";
    public $title = "Edit content";
    public $info = "Edit content";
    public $price = 0;
    public $url = "Edit content";
    public $deleteId = "Edit content";

    public function render()
    {
        return view('livewire.merch')->extends("layouts.app");
    }

    public function getMerch()
    {
        return ModelsMerch::latest()->paginate("10");
    }
    
    public function changeDeleteId($id)
    {
        $this->deleteId = $id;
    }

    public function deleteMerch()
    {
        $event = Merch::find($this->deleteId);

        if ($event) {
            $event->delete();
            return redirect("/events");
        }
    }

}
