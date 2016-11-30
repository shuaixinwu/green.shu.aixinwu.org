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
            $result=DB::table('users')->where('userid',session('userid'))->get()->first();
            $this->response['data']['college']=$result->college;
            $this->response['data']['building']=$result->building;
            $this->response['data']['room']=$result->room;
            $this->response['data']['greennum']=$result->greennum;
            //echo $result->greennum;
            return view('index',$this->response);
        }else{
            return redirect('/complete');
        }
    }
}