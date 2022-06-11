<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WallProject extends Controller
{
    //View Navbar
    public function showNavbar(){
        return view('navbar');
    }
    public function showHomePage(){
        return view('home');
    }
}
