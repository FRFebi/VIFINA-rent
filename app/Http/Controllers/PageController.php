<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    
    public function home(){
    	return view('welcome');
    }
    public function about(){
    	return view('about');
    }
    public function cars(){
    	return view('cars');
    }

}
