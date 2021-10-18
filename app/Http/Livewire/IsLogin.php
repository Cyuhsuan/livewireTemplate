<?php

namespace App\Http\Livewire;

use Livewire\Component;

class IsLogin extends Component
{
    public function render()
    {
        return view('livewire.is-login')->layout('layouts.base');
    }
}
