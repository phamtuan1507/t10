<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // public function show(){
    //     return view('');
    // }
    public function index(){
        return view('homepage');
    }
}
