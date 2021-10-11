<?php

namespace App\Http\Livewire\Components;

use Livewire\Component;

class Modal extends Component
{
    public $dialog = '';
    public $isOpen = false;

    protected $listeners = [
        'openModal' => 'openModal',
        'closeModal' => 'closeModal'
    ];

    public function openModal($dialog)
    {
        $this->isOpen = true;
        $this->dialog = $dialog;
    }

    public function closeModal()
    {
        $this->isOpen = false;
    }

    public function render()
    {
        return view('livewire.components.modal');
    }
}
