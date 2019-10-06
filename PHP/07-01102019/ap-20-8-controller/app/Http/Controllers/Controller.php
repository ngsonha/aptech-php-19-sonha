<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    function traDulieu()
    {
        return "ahiihih bue de";
    }

    function hienthiso($id)
    {
        if($id ==1)
        {
            return view('bai-bao-1');
        } 
        return view('bao',["baiBaoso"=>$id]);
    }
}
