<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Post extends Component

{
    public $posts;
    public $comments;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($posts, $comments)
    {
        $this->posts = $posts;
        $this->comments = $comments;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.post');
    }
}
