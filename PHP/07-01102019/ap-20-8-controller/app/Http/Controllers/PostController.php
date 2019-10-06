<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
   function hienthiBaiViet($id){
       return view('bao',["baiBaoso"=>$id]);
   }
}
