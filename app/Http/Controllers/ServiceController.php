<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ServiceController extends Controller
{
    
    
    public function register(Request $request){
        $user = DB::table('user')->where('phonenumber',$request->input('phone'))->first();
        if($user !== null){
            return redirect("/serviceerror");
        }
        DB::table('user')->insert([
            'name'=> $request->input('name'),
            'sex'=> $request->input('sex'),
            'email'=>$request->input('email'),
            'phonenumber'=>$request->input('phone'),
            'password'=>$request->input('pw'),
        ]);
        return redirect("/servicerigestered");//回到route
    }
    public function change(Request $request){
        $user = DB::table('user')->where('id',$request->input('id'))->value('phonenumber');
        $user2 = DB::table('user')->where('phonenumber',$request->input('phone'))->value('phonenumber');
        if($user2 !== null){
            if($user !== $user2){
            return redirect("/serviceerror");
            }
        }
        DB::table('user')->where(['id'=>$request->input('id')])->update([
            'name'=>$request->input('name'),
            'sex'=> $request->input('sex'),
            'email'=>$request->input('email'),
            'phonenumber'=>$request->input('phone'),
            'password'=>$request->input('pw'),
        ]);
        return redirect("/serviceupdated");
    }
    public function remove(Request $request){
        $user = DB::table('user')->where('id',$request->input('id'))->value('phonenumber');
        $user2 = DB::table('user')->where('phonenumber',$request->input('phone'))->value('phonenumber');
        $user3 = DB::table('user')->where('phonenumber',$request->input('phone'))->first();
        if($user3 == null){
            return redirect("/servicedeleteerror");
        }else{
            if($user2 !== $user){
                return redirect("/servicedeleteerror");
            }        
        }
        DB::table('user')->delete(['id'=>$request->input('id')]);
        return redirect("/servicedeleted");
    }


}
