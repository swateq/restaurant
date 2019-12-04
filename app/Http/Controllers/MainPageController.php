<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;

class MainPageController extends Controller
{
    public function index()
    {
        $news = News::last();
        return view('welcome', compact('news'));
    }
}
