<?php

namespace App\Livewire;

use Livewire\Component;

class Merch extends Component
{
    public function render()
    {
        return view('livewire.merch')->layout("layouts.app");
    }
}
