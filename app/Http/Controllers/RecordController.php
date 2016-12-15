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
        $records=DB::table('records')->select('totalday')->where('userid',session('userid'))->get();
        $sum =0;
        $i=0;
        foreach($records as $record){
            $sum+=$record->totalday;
            $i++;
        }
        DB::table('users')->where('userid',$userid)->update(['greennum'=>(round($sum/$i,3))]);        
        echo json_encode($this->response);
    }
    
    public function listRecords(Request $request){
        $records=DB::table('records')->where('userid',session('userid'))->orderBy('updatetime','desc')->get();
        $i=0;
        if(!$records->isEmpty()){
            foreach($records as $record){
                $this->response['data'][$i]['id']=$record->id;
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
        return view('list',$this->response);
    }
    
    public function detailRecords(Request $request){
        if($request->has('id')){
            $record=DB::table('records')->where('userid',session('userid'))->where('id',$request->id)->get()->first();
            if(!empty($record)){
                $this->response['status']='1';
                $this->response['content']='查询成功';
                $this->response['starttime']=$record->starttime;
                $this->response['endtime']=$record->endtime;
                $this->response['total']=$record->total;
                $this->response['totalday']=$record->totalday;
                $this->response['data']=$record->content;
            }else{
                $this->response['status']='0';
                $this->response['content']='没有该id';
            }
        }else{
            $this->response['status']='0';
            $this->response['content']='参数缺失';
        }
        return view('detail',$this->response);
    }
    
    public function ranklist(){
        $records=DB::table('users')->select('userid','username','greennum')->orderBy('greennum','asc')->orderBy('userid','asc')->get();
        if(!$records->isEmpty()){
            $this->response['status']='1';
            $this->response['content']='排列完成！';
            $i=0;
            foreach($records as $record){
                $this->response['data'][$i]['userid']=$record->userid;
                $this->response['data'][$i]['username']=substr_replace($record->username,'**',3);    
                $this->response['data'][$i]['greennum']=$record->greennum;
                $i++;
            }        
        }else{
            $this->response['status']='0';
            $this->response['content']='暂无排行';
        }
        return view('ranklist',$this->response);
    }
}