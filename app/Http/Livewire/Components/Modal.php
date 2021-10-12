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
        if (!$this->isOpen) {
            $this->isOpen = true;
        }
        $this->dialog = $dialog;
    }

    public function closeModal()
    {
        $this->reset([
            'dialog',
            'isOpen'
        ]);
    }

    public function render()
    {
        return view('livewire.components.modal');
    }
}
