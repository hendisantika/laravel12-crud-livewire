<?php

namespace App\Livewire;

use Livewire\Component;

class Post extends Component
{
    /**
     * define public variable
     */
    public $title, $content, $postId, $slug, $status, $updatePost = false, $addPost = false;

    /**
     * List of add/edit form rules
     */
    protected $rules = [
        'title' => 'required',
        'content' => 'required',
        'status' => 'required'
    ];

    public function render()
    {
        return view('livewire.post');
    }
}
