<?php

namespace App\Http\Controllers;

use App\Newsletter;
use Request;
use Illuminate\Support\Facades\Auth;

class NewsletterController extends Controller
{

    public function index()
    {
        if(Auth::check())
        {
            $newsletter = Newsletter::paginate(15);
            return view('admin.newsletter.index', compact('newsletter'));
        }

        return redirect('/login');
    }

    public function store(Request $request)
    {
        $attributes = request()->validate([
            'email' => 'required'
        ]);

        if(Newsletter::where('email',$attributes['email'])->first() != null)
        {
            return redirect('/')->with('toast_error', 'Twój email jest już dodany do newslettera!');
        }else{
            Newsletter::create($attributes);
        }

        return redirect('/')->with('toast_success', 'Email został zapisany do newslettera!');
    }

    public function search()
    {
        if(Auth::check())
        {
            $newsletter = Newsletter::search(Request::input('query'));
            return view('admin.newsletter.search',compact('newsletter'));
        }

        return redirect('/login');
    }
}
