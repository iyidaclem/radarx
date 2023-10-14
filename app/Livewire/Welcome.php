<?php

namespace App\Livewire;

use App\Models\Image;
use Livewire\Component;

class Welcome extends Component
{
    public $currentVideo = '/videos/Website.mov';
    public $gallery;

    public function mount(){
        $this->fetchGallery();
    }
    public function changeVideo($url)
    {
        $this->currentVideo = $url;
    }

    public function fetchGallery()
    {
        $gallery = Image::all();
        $this->gallery = $gallery;
    }

    public function render()
    {
        return view('livewire.welcome')->extends('layouts.app');
    }
}
