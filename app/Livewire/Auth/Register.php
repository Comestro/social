<?php

namespace App\Livewire\Auth;

use Livewire\Attributes\Validate;
use App\Models\User;
use Livewire\Component;

use Illuminate\Support\Facades\Auth;

class Register extends Component
{
    #[Validate("required|string|max:255")]
    public $fname;

    #[Validate("required|string|max:255")]
    public $lname;

    #[Validate("required|date")]
    public $dob;

    #[Validate("required|string|in:male,female,other")]
    public $gender;

    #[Validate("required|email|max:255")]
    public $email;

    #[Validate("required|string|max:255")]
    public $phone;

    #[Validate("required|string|min:8|max:255")]
    public $password;


    public function register()
    {
        $data = $this->validate();

        $newuser = User::create($data);
        $this->reset();

        // now login
        Auth::attempt(["email" => $data["email"], "password" => $data["password"]]);

        redirect()->route("dashboard");
        // Registration logic goes here
    }

    public function render()
    {
        return view('livewire.auth.register');
    }
}
