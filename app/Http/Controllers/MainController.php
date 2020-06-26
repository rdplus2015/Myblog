<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
   public function about()
   {
       return view('main.about');
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
