<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class UserController extends Controller
{
    function hienThiNguoiDung()
    {
        $users=DB::table('users')->get();
        return view('users',['users'=>$users]);
    }
}
