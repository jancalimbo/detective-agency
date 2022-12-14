<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;class SiteController extends Controller
{
    public function home(){
        return view('pages.site.home');
    }
    public function cases(){
        return view('pages.site.cases');
    }
    public function userProfile(){
        return view('pages.site.user-profile');
    }
    public function allUSers(){
        return view('pages.site.users');
    }
}
