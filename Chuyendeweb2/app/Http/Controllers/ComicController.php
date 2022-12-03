<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic;
use App\Models\Category;
use App\Models\Folowcomic;
use App\Models\Chapter;

class ComicController extends Controller
{
    //Comic
    public function index()
    {
        return Comic::all();
    }
    public function ComicHot()
    {
        return Comic::where('feature', '1')->get();
    }
    public function Category()
    {
        return Category::all();
    }
    function getComicByCategoryID($id)
    {
        return Comic::where('Category_id', $id)->get();
    }
    function getComicbyID($id)
    {
        return Comic::where('Comic_id', $id)->get();
    }
    public function search(Request $request)
    {
        $search = $request->name;
        $dataName = Comic::where('Name', 'LIKE', "%$search%")->get();
        return $dataName;
    }

    public function Upview($id)
    {



        $currentviewarr = Comic::select('View')->where('Comic_id', $id)->first();
        // $currentview = json_decode($currentviewarr);
        $comic = Comic::where('Comic_id', $id)->first();
        $comic->View =  $currentviewarr['View'] + 1;
        $comic->save();
    }
    public function TopNam()
    {

        return  Comic::orderBy('View', 'desc')->limit(5)->get(); // gets the whole row

    }
    public function TopHot()
    {

        return  Comic::where('feature', 1)->orderBy('View', 'desc')->limit(5)->get(); // gets the whole row

    }
    public function getfollow(Request $request)
    {
        $comicfollow = Folowcomic::select('Comic_id')->where('User_id', $request->input('userid'))->get();



        $folow =  Comic::whereIn('Comic_id', $comicfollow)->get();

        return $folow;
    }
    public function addfollow(Request $request)
    {
        return Folowcomic::create([
            'User_id' => $request->input('userid'),
            'Comic_id' => $request->input('comicid')

        ]);
    }
    public function delfollow(Request $request)
    {

        return Folowcomic::where('User_id', $request->input('userid'))->Where('Comic_id', $request->input('comicid'))->delete();
    }
    public function checkfollow(Request $request)
    {
        // $comicfollow = $this->getfollow($request->input('userid'));
        $comicfollow = Folowcomic::select('Comic_id')->where('User_id', $request->input('userid'))->get();
        $check = false;
        foreach ($comicfollow as $key => $value) {
            if ($request->input('comicid') ==  $comicfollow[$key]['Comic_id']) {
                $check = true;
            }
        }
        if ($check) {
            return "yes";
        } else {
            return "no";
        }
    }

    public function getchapter($id)
    {
        return Chapter::where('Comic_id', $id)->get();
    }

    public function getchapterlimit3()
    {
        // return Chapter::orderBy('Chapter_name', 'desc')->limit(3)->get();
        return Chapter::all();
    }
    // public function index(){
    //     $comics = Comic::all()->sortByDesc('Comic_id')->toArray();
    //     return array_reverse($comics);
    // }
    public function add(Request $request)
    {
        $comic = new Comic([
            'Comic_id' => $request->input('Comic_id'),
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
