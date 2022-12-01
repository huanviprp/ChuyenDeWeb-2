<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic;

class ComicController extends Controller
{
    //Comic
    public function index()
    {
        return comic::all();
    }
}
