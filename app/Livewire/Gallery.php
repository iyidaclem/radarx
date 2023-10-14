<?php

namespace App\Livewire;

use App\Models\Image;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Str;

class Gallery extends Component
{
    use WithFileUploads;

    public $images;
    public $image_title = "";
    public $gallery;

    public function mount()
    {
        $this->fetchGallery();
    }

    public function fetchGallery()
    {
        $gallery = Image::all();
        $this->gallery = $gallery;
    }


    public  function uploadImages()
    {
        $this->validate([
            'images.*' => 'required|image|mimes:png,jpg,jpeg,gif',
            "image_title" => "required"
        ]);

        $array = [];

        $id = Str::uuid()->toString();

        foreach ($this->images as $image) {
            $path = $image->store("public/images");
            $path = explode("public/", $path)[1];
            array_push($array, [
                "user_id" => auth()->user()->id,
                "title" => $this->image_title,
                "group_id" => $id,
                "url" => $path
            ]);
        }

        Image::insert($array);
        $this->images = null;
    }

    public function resetImages()
    {
        $this->images = null;
    }
    public function toggleUpload()
    {
        dd("ooo");
        // $this->isUploading = !$this->isUploading;
        $this->images = [];
    }
    public function render()
    {
        return view('livewire.gallery')->extends("layouts.app");
    }
}
