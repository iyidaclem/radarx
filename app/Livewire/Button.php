<?php

namespace App\Livewire;

use Livewire\Component;

class Button extends Component
{

    function action()
    {
        dd("What a hell");
    }
    public function render()
    {
        return view('livewire.button');
    }
}
