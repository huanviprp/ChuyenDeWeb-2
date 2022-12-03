<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic;
use App\Models\Comment;
use App\Models\UserComment;
use App\Models\User;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
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
