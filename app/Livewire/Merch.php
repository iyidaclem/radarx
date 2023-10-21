<?php

namespace App\Livewire;

use Livewire\Component;

class Merch extends Component
{
    public function render()
    {
        return view('livewire.merch')->extends("layouts.app");
    }
}
