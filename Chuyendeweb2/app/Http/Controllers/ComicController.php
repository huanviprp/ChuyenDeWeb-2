<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Comic;
use Validator;

class ComicController extends Controller
{
    //Comic
    public function index(){
        $comics = Comic::all()->sortByDesc('Comic_id')->toArray();
        return array_reverse($comics);
    }
    public function add(Request $request)
    {
        $comic = new Comic([
            'Comic_id'=> $request->input('Comic_id'),
            'Name' => $request->input('Name'),
            'Descripsion' => $request->input('Descripsion'),
            'Img_feature' => $request->input('Img_feature'),
            'Date' => $request->input('date'),
            'View' => $request->input('View'),
            'Status' => $request->input('Status'),
            'author_id' => $request->input('author_id'),
            'feature' => $request->input('feature'),
            'Category_id' => $request->input('Category_id'),
        ]);
        $comic->save();
        return response()->json('The comic successfully added');
    }
    // edit post
    public function edit($id)
    {
        $comic = Comic::find($id);
         
        return response()->json($comic);
    }
    // update post
    public function update($id, Request $request)
    {
        $comic = Comic::find($id);
        $comic->update($request->all());
        return response()->json('The comic successfully updated');
    }
    // delete post
    public function delete($id)
    {
        $comic = Comic::find($id);
        $comic->delete();
        return response()->json('The post successfully deleted');
    }
}
