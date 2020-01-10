<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
   public function home()
   {
       return view('welcome');
   }
   public function kami()
   {
       return view('kami');
   }
   public function portot()
   {
       return view('portot');
   }
}
