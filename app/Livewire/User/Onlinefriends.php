<?php

namespace App\Livewire\User;

use Livewire\Component;
use App\Models\User;

class Onlinefriends extends Component
{
    public function render()
    {
        return view('livewire.user.onlinefriends',["friends"=>User::where("id","!=",auth()->user()->id)->get()]);
    }
}
