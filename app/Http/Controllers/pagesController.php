<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagesController extends Controller
{
    function index(){
        $data = array(
            'title' => 'Home'
        );

        return view('pages.index')->with($data);
    } 
   
}
