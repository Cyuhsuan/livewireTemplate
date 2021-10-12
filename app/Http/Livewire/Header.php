<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Header extends Component
{
    public $isLogin = false;

    public function mount()
    {
        if (Auth::check()) {
            $this->isLogin = true;
        } else {
            $this->isLogin = false;
        }
    }

    public function render()
    {
        return view('livewire.header');
    }
}
