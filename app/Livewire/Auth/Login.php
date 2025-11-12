<?php

namespace App\Livewire\Auth;

use Livewire\Component;

class Login extends Component
{

    #[Validate("required|email|max:255")]
    public $email;

    #[Validate("required|string|min:8|max:255")]
    public $password;

    public function login()
    {
        $data = $this->validate();

        if (Auth::attempt($data)) {
            return redirect()->route('dashboard');
        }

        $this->addError('email', 'Invalid email or password.');
    }

    public function render()
    {
        return view('livewire.auth.login');
    }
}
