<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function index() 
    {  
        $title = 'Homepage'; 
        $products = Products::all();

        return view('web.homepage', ['title' => $title]); 
    } 

}
