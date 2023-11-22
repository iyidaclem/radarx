<?php

namespace App\Livewire;

use App\Models\Merch as ModelsMerch;
use Illuminate\Support\Facades\URL;
use Livewire\Component;
use Livewire\WithFileUploads;

class Merch extends Component
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
        return view('livewire.merch')->extends("layouts.app");
    }

    public function createMerch()
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
        $merch = new ModelsMerch();
        $merch->user_id = auth()->user()->id;
        $merch->title = $this->title;
        $merch->url = $this->url;
        $merch->image = $path;
        $merch->save();
        return redirect(URL("merch"));
    }

    public function getMerch()
    {
        return ModelsMerch::latest()->paginate("10");
    }

    public function changeDeleteId($id)
    {
        $this->deleteId = $id;
    }

    public function deleteMerch($id)
    {
        $merch = ModelsMerch::find($id);

        if ($merch) {
            $merch->delete();
            return redirect("/merch");
        }
    }
}
