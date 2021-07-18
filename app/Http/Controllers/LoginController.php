<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Login;

class LoginController extends Controller
{
	public function index(){
		return view("login");
	}

	public function loginCheck(Request $request){

		$login_user = new Login;
		$accept = $login_user->auth_check($request->login_id, $request->login_pass);

		if($accept == true){
			//セッションを開始する
			session(["login" => "admin"]);
			return redirect("record");
		}else{
			return redirect("login")->with("login_failed", "ID・パスワードが間違っています");;
		}
	}

}
