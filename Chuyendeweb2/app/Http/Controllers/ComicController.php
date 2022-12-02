<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic;
use App\Models\Category;

class ComicController extends Controller
{
    //Comic
    public function index()
    {
        return Comic::orderBy('Date','DESC')->get();
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

        return  Comic::orderBy('View', 'desc')->get(); // gets the whole row

    }
}
