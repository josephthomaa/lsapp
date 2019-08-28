<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $data=array(
            'title' => 'Traversy Media',
            'descriptions' => ['This is a test','Routes','blade']
        );
        $title = 'Traversy Media';
       
        //return view('pages.index', compact('title'));
        //return view('pages.index')->with('title',$title);
        return view('pages.index',$data);
    }
    public function About(){
            $data=array(
            'title' => 'Traversy Media',
            'description' => 'This is a test'
        );
        return view('pages.about',$data);
    }
    public function Services(){
        return view('pages.services');
    }
}
