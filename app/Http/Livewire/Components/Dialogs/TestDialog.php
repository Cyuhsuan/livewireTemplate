<?php

namespace App\Http\Livewire\Components\Dialogs;

use Livewire\Component;

class TestDialog extends Component
{
    public function render()
    {
        return view('livewire.components.dialogs.test-dialog')->layout('livewire.components.modal');
    }
}
