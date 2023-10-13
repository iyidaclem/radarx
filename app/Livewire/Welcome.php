<?php

namespace App\Livewire;

use Livewire\Component;

class Welcome extends Component
{
    public $currentVideo = '/videos/Website.mov';

    public function render()
    {
        return view('livewire.welcome')->extends('layouts.app');
    }

    public function changeVideo($url)
    {
        dd("nice one");
        $this->currentVideo = $url;
    }
}
