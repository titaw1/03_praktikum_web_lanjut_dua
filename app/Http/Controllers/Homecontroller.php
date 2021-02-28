<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Homecontroller extends Controller
{
    public function index(){
        return view('index');
    }
    public function company(){
        return view('company');
    }
    public function service(){
        return view('services');
    }
    public function contact(){
        return view('contact');
    }
}
