<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function Index(){
        return view('pages.index');
    }
    public function About(){
        return view('pages.about');
    }
    public function Services(){
        return view('pages.services');
    }
}
