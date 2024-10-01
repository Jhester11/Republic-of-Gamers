<?php

namespace App\Http\Controllers\LabExamination;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Lab1Controller extends Controller
{
    public function index(){
        return view('Lab.homepage');
    }

    public function product(){
        return view('Lab.product');
    }

    public function blog(){
        return view('Lab.blog');
    }

    public function contact(){
        return view('Lab.contact');
    }

    public function about(){
        return view('Lab.about');
    }
}
