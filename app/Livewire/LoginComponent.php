<?php

namespace App\Livewire;

use Livewire\Component;

class LoginComponent extends Component
{
    public $email, $password;
    public function render()
    {
        return view('livewire.login-component');
    }

    public function proses()
    {

    }
}
