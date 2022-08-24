<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function home()
    {
        $content = 'Welcome ';
        if (Auth::check()) {
            $content .= auth()->user()->username;
        }
        $content .= ' to';
        $subContent = 'ADS-Internship website';
        return view('welcome', compact('content', 'subContent'));
    }
    public function about()
    {
        $content = 'This is the about us page';
        $subContent = 'ADS-Internship website';
        return view('about', compact('content', 'subContent'));
    }
}
