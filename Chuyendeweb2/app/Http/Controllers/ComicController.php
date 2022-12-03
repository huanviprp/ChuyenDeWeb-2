<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic;
use App\Models\Category;
use App\Models\Folowcomic;

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
}
