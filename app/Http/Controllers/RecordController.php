<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \Curl\Curl;
use DB;

class RecordController extends Controller
{
    public function index(Request $request){
        if(!session('userid')){
            return view('welcome');
        }else if(session('complete')){
            return view('index');
        }else{
            return redirect('/complete');
        }
    }
}