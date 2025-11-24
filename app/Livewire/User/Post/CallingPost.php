<?php

namespace App\Livewire\User\Post;

use App\Models\UserPost;
use Livewire\Component;
use Livewire\Attributes\On;

class CallingPost extends Component
{

    public $posts;


    #[On("postCreated")]
    public function mount($self=false)
    {
        if(!$self){
            $this->posts = UserPost::orderBy('created_at', 'desc')->get();
        }
        else{
            $this->posts = UserPost::where("user_id",auth()->user()->id)->orderBy('created_at', 'desc')->get();
        }
    }
    public function render()
    {
        return view('livewire.user.post.calling-post', ['posts' => $this->posts]);
    }
}
