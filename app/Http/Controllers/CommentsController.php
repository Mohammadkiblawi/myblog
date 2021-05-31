<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Models\Comment;
use App\Http\Requests\StoreComment;

class CommentsController extends Controller
{
    public function store(StoreComment $request, Post $posts)
    {
        Comment::create([
            'name' => request('name'),
            'body' => request('body'),
            'post_id' => $posts->id
        ]);
        return back();
    }
}
