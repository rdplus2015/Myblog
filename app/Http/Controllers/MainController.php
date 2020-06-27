<?php

namespace App\Http\Controllers;

use App\Authors;
use Illuminate\Http\Request;

class MainController extends Controller
{
   public function about()
   {
    $authors = Authors::all(); 
    return view('main.about', [
           'authors' => $authors
       ]);
   }

   public function contact()
   {
       return view('main.contact');
   }

   public function dashboard()
   {
       return view('main.dashboard');
   }
}
