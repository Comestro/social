<?php

namespace App\Livewire\User\Post;

use Livewire\Attributes\Validate;
use Livewire\Component;
use App\Models\UserPost;

class CreateForm extends Component
{
    #[Validate("required|string|max:1000")]
    public $content;

    public function createPost()
    {
        $data = $this->validate();

        // add user_id
        $data['user_id'] = auth()->id();

        UserPost::create($data);
        $this->reset('content');
        $this->dispatch("postCreated");
        session()->flash('message', 'Post created successfully!');
    }

    public function render()
    {
        return view('livewire.user.post.create-form');
    }
}
