<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
         return view('welcome');
     }

     public function datadiri(){
    return ('Nama : Dilla Azhara Hayati <br> NIM : D212011057');
    }
}

