<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Container extends Component
{
    public function render()
    {
        return view('livewire.container')->layout('pages.index');
    }
}
