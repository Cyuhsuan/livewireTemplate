<?php

namespace App\Http\Livewire\Components\Dialogs;

use Livewire\Component;

class TestDialog extends Component
{
    public $data;

    protected $rules = [
        'data.name' => 'required|min:6',
        'data.email' => 'required|email',
    ];
    protected $messages = [
        'data.name.required' => '姓名為必填',
        'data.name.min' => '姓名為最少六個字',
        'data.email.required' => 'email 為必填',
        'data.email.email' => '必須為email格式',
    ];

    public function render()
    {
        return view('livewire.components.dialogs.test-dialog')->layout('livewire.components.modal');
    }

    public function submit()
    {
        $this->validate();
    }
}
