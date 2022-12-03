<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic;
use App\Models\Category;
use App\Models\Folowcomic;
use App\Models\Chapter;
use App\Models\Pageimg;

class PageImgController extends Controller
{
    public function getPageByChapterID($id)
    {
        return Pageimg::where('Chapter-id', $id)->get();
    }
}
