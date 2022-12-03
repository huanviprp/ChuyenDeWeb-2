<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Comment;

class CommentController extends Controller
{
    public function index()
    {
        $comments = Comment::all()->sortByDesc('Comment_id')->toArray();
        return array_reverse($comments);
    }
    public function add(Request $request)
    {
        
    }
    // edit post
    public function edit($id)
    {
        
    }
    // update post
    public function update($id, Request $request)
    {
        
    }
    // delete post
    public function delete($id)
    {
        $comment = Comment::find($id);
        $comment->delete();
        return response()->json('The comment successfully deleted');
    }
}
