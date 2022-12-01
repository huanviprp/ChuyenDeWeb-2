<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic;
use App\Models\Category;

class ComicController extends Controller
{
    //Comic
    public function index(){
        return Comic::all();
    }
    public function ComicHot(){
        return Comic::where('feature','1')->get();
    }
    public function Category(){
        return Category::all();
    }
    function getComicByCategoryID($id)
    {
        return Comic::where('Category_id', $id)->get(); 
    }
    public function search(Request $request)
    {
        $search = $request->name;
    	$dataName = Comic::where('Name', 'LIKE', "%$search%")->get();
    	return $dataName;
    }

}
