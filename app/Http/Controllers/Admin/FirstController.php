<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class FirstController extends Controller
{
    /*public function _construct(){
        $this -> middleware('auth');
    }*/
   public function showString(){
       return 'static string';
   }
}
