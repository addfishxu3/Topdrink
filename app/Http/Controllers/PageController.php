<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function search(Request $request){
       // $page=$_GET['page'];
        $page=$request->input('page');
        $type=50;
        return view('layouts/app', 
            [
            'page'=>$page
            ,'type'=>$type
            ]);
    }
}
