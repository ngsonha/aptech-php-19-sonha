<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categorie;
class CategorieController extends Controller
{
    function metmoi(){
        $categories =Categorie::get();
        return view('categories',['categories' => $categories]);
    }
}
