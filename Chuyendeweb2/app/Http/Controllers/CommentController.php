<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\UserComment;
use App\Models\User;

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

    public function getComment(Request $request)
    {

        $usercomment = UserComment::select('Comment_id')->where('User_id', $request->input('userid'))->get();
        $comment   = Comment::where('Comic_id', $request->input('comicid'))->get();
        $poster =  User::whereIn('id', $usercomment)->get();
        return [$poster, $comment];
    }
    public function getCommentUser(Request $request)
    {

        $usercomment = UserComment::select('Comment_id')->where('User_id', $request->input('userid'))->get();




        return User::whereIn('id', $usercomment)->get();
    }
    public function getNewestCommentId()
    {
        $newidarr =    Comment::orderBy('Comment_id', 'desc')->first();



        return   $newidarr["Comment_id"];
    }

    public function postComment(Request $request)
    {
        Comment::create([
            'Comic_id' => $request->input('comicid'),
            'Content' => $request->input('content'),

        ]);

        return UserComment::created([
            'User_id' => $request->input('comicid'),
            'Comment_id' => $this->getNewestCommentId()
        ]);
    }
    // public function totalComment($id)
    // {
    //     $total_projects = Comment::table('projects')->count();
    //     return view('summarys.summary')->with(['total' => $total_projects]);
    // }
}
