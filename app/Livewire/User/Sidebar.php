<?php

namespace App\Livewire\User;

use Livewire\Component;

class Sidebar extends Component
{
    public function render()
    {
        $assignmentsCount = \App\Models\Assignment::where('user_id', auth()->id())
            ->where('status', 'pending')
            ->count();

        return view('livewire.user.sidebar', [
            'assignmentsCount' => $assignmentsCount
        ]);
    }
}
