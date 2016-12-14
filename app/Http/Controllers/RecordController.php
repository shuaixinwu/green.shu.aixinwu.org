<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \Curl\Curl;
use DB;

class RecordController extends Controller
{
    public $response = array(
        'status'=>'0',
        'content'=>''
    );
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
    
    public function indexAdd(Request $request){
        $result=DB::table('records')->select('endtime')->where('userid',session('userid'))->orderBy('endtime','desc')->get()->first();
        if(!empty($result)){
            $response['endtime']=$result->endtime;
        }else{
            $response['endtime']=date("Y-m-d",strtotime("-3 month"));;
        }
        return view('add',$response);
    }
    
    public function add(Request $request){
        $userid=session('userid');
        $starttime=$request->starttime;
        $endtime=$request->endtime;
        $content=$request->content;
        $total=$request->total;
        $totalday=$request->totalday;
        DB::table('records')->insert(['userid'=>$userid,'starttime'=>$starttime,'endtime'=>$endtime,'content'=>$content,'total'=>$total,'totalday'=>$totalday]);
        $this->response['status']='1';
        $this->response['content']='提交成功';
        echo json_encode($this->response);
    }
    
    public function listRecords(Request $request){
        $records=DB::table('records')->where('userid',session('userid'))->orderBy('updatetime','desc')->get();
        $i=0;
        if(!$records->isEmpty()){
            foreach($records as $record){
                $this->response['data'][$i]['starttime']=$record->starttime;
                $this->response['data'][$i]['endtime']=$record->endtime;
                $this->response['data'][$i]['total']=$record->total;
                $this->response['data'][$i]['totalday']=$record->totalday;
                $this->response['data'][$i]['updatetime']=$record->updatetime;
                $i++;
            }
            $this->response['status']='1';
            $this->response['content']='列表查询成功';
        }else{
            $this->response['status']='0';
            $this->response['content']='暂时无记录';
        }       
        //echo json_encode($this->response);
        return view('list',$this->response);
    }
}