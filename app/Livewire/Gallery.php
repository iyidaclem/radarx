<?php

namespace App\Livewire;

use Livewire\Component;

class Gallery extends Component
{
    public $isUploading = true;
    public $images = [];

    public function mount()
    {
        
    }

    public function render()
    {
        return view('livewire.gallery')->layout("layouts.app");
    }

    public function toggleUpload()
    {
        dd("ooo");
        $this->isUploading = !$this->isUploading;
        $this->images = [];
    }

}
