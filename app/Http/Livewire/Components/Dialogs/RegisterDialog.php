<?php

namespace App\Http\Livewire\Components\Dialogs;

use Livewire\Component;

class RegisterDialog extends Component
{
    public function render()
    {
        return view('livewire.components.dialogs.register-dialog')->layout('livewire.components.modal');
    }
}
