<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use App\Newsletter;

class AdminController extends Controller
{

    public function dashboard()
    {
        $news = News::count();
        $newsletter = Newsletter::count();
        return view('admin.dashboard',compact(['news','newsletter']));
    }
}
