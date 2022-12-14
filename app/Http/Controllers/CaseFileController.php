<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CaseFileController extends Controller
{
    public function create(){
        return view('pages.casefile.create');
    }
    public function take($id){
        return view('pages.casefile.take', compact('id'));
    }
    public function solve($id){
        return view('pages.casefile.solve', compact('id'));
    }
    public function view($id){
        return view('pages.casefile.file', compact('id'));
    }
}
