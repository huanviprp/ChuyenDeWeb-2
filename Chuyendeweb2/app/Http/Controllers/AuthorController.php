<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Author;
use Validator;

class AuthorController extends Controller
{
    public function index()
    {
        $authors = Author::all()->sortByDesc('Author_id')->toArray();
        return array_reverse($authors);
    }
    public function add(Request $request)
    {
        $author = new Author([
            'Author_id' => $request->input('Author_id'),
            'Author_name' => $request->input('Author_name'),
            'Gender' => $request->input('Gender'),
        ]);
        $author->save();
        return response()->json('The author successfully added');
    }
    // edit post
    public function edit($id)
    {
        $author = Author::find($id);

        return response()->json($author);
    }
    // update post
    public function update($id, Request $request)
    {
        $author = Author::find($id);
        $author->update($request->all());
        return response()->json('The author successfully updated');
    }
    // delete post
    public function delete($id)
    {
        $author = Author::find($id);
        $author->delete();
        return response()->json('The author successfully deleted');
    }
    function getAuthorbyID($id)
    {
        return Author::where('Author-id', $id)->get();
    }
}
