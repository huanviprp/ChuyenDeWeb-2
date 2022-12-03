<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use Validator;

class CategoryController extends Controller
{

    public function index()
    {
        $categorys = Category::all()->sortByDesc('Category_id')->toArray();
        return array_reverse($categorys);
    }
    public function add(Request $request)
    {
        $category = new Category([
            'Category_id' => $request->input('Category_id'),
            'Category' => $request->input('Category'),
        ]);
        $category->save();
        return response()->json('The category successfully added');
    }
    // edit post
    public function edit($id)
    {
        $category = Category::find($id);

        return response()->json($category);
    }
    // update post
    public function update($id, Request $request)
    {
        $category = Category::find($id);
        $category->update($request->all());
        return response()->json('The category successfully updated');
    }
    // delete post
    public function delete($id)
    {
        $category = Category::find($id);
        $category->delete();
        return response()->json('The category successfully deleted');
    }
    function getCategorybyID($id)
    {
        return Category::where('Category_id', $id)->get();
    }
}
