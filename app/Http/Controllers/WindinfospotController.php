<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WindinfospotController extends Controller
{
    public function index($name){
        
        //spot表示用
        $spot = DB::table('spot')->where('name_en',$name)->first();
        
        //herekiteステータス用
        $users = DB::table('users')->where('spot_name',$name)->get();
        
        
        return  view('windinfo/windinfospot/spotIndex',compact('spot','users'));
    }
    
    public function spot_name(Request $request){
        //spot_name受け取り用 
        
        $userId =  \Auth::user()->id;
        $spotname = $request['spot_name'];
        
        
        if(!isset($request['status'])){
        DB::table('users')->where('id',$userId)->update(['spot_name' => $spotname]);
        }
        
        if(isset($request['status'])){
        $status = $request['status'];
        DB::table('users')->where('id',$userId)->update(['status' => $status]);
        }
        
        if(isset($request['delete'])){
        DB::table('users')->where('id',$userId)->update(['spot_name' => NULL ]); 
        DB::table('users')->where('id',$userId)->update(['status' => NULL ]);
        }
        
        
        return  back();
    }
    
    
    



}
