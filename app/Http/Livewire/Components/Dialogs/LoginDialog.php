<?php

namespace App\Http\Livewire\Components\Dialogs;

use Livewire\Component;

class LoginDialog extends Component
{
    public function render()
    {
        return view('livewire.components.dialogs.login-dialog')->layout('livewire.components.modal');
    }
}
