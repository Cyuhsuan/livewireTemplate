<?php

namespace App\Http\Livewire\Pages;

use Livewire\Component;

class Home extends Component
{
    public $products = 5;
    public function render()
    {
        return view('livewire.pages.home')->layout('layouts.base');
    }
}
