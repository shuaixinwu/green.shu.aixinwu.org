<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \Curl\Curl;
use DB;

class UserController extends Controller
{
    
        
    public function searchUser($userid){
        $record=DB::table('users')->where('userid',$userid)->get();
        if($record->isEmpty()){
            return false;
        }else{
            return true;
        }
    }
    
    public function login(Request $request){
        $clientId                = '7SbsDbBoL09NPAQ7UacHyZ4c';   
        $clientSecret            = 'KbeA5Hyy3cJmVTXuiKNt1UJmdIOjjLtg';  
        $redirectUri             = 'http://green.shu.aixinwu.org/login';
        $urlAuthorize            = 'https://oauth.shu.edu.cn/oauth/authorize';
        $urlAccessToken          = 'https://oauth.shu.edu.cn/oauth/token';
        $urlResourceOwnerDetails = 'https://oauth.shu.edu.cn/rest/user/getLoggedInUser';

        if (!isset($_GET['code'])) {
            $url=$urlAuthorize.'?response_type=code&client_id='.$clientId.'&redirect_uri='.$redirectUri.'&scope=1';
             return redirect($url);
        } else {
            $code=$_GET['code'];
            $curl = new Curl();
            $curl->post($urlAccessToken, array(
                'grant_type' => 'authorization_code',
                'code' => $code,
                'client_id' => $clientId,
                'client_secret' => $clientSecret,
                'redirect_uri' => $redirectUri,
            ));
            $access_token=$curl->response->access_token;
            
            $curl->post($urlResourceOwnerDetails, array(
                'access_token'=>$access_token,
            ));
            $userid=$curl->response->userid;
            $username=$curl->response->username;
            $request->session()->put('userid',$userid);
            $request->session()->put('username',$username);            
            if($this->searchUser($userid)){
                DB::table('users')->where('userid',$userid)->update(['lasttime'=>date('y-m-d H:i:s',time())]);
                $result=DB::table('users')->select('college')->where('userid',$userid)->get();
                if($result[0]->college==NULL){
                    $request->session()->put('complete','0');
                    return redirect('/complete');
                }else{
                    return redirect('/');
                }
            }else{
                DB::table('users')->insert(['userid'=>$userid,'username'=>$username,'lasttime'=>date('y-m-d H:i:s',time())]);
                $request->session()->put('complete','0');
                return redirect('/complete');
            }
            
        }
    }

    public function logout(Request $request){
        $request->session()->flush();
        return redirect('/');
    }
}