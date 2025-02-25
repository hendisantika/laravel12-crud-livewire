<?php

namespace App\Livewire;

use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
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

    /**
     * Reseting all inputted fields
     * @return void
     */
    public function resetFields()
    {
        $this->title = '';
        $this->content = '';
        $this->status = 1;
    }

    /**
     * render the post data
     * @return Factory|View
     */
    public function render()
    {
        $posts = \App\Models\Post::latest()->get();
        return view('livewire.post', compact('posts'));
    }

    /**
     * Open Add Post form
     * @return void
     */
    public function create()
    {
        $this->resetFields();
        $this->addPost = true;
        $this->updatePost = false;
    }

}
