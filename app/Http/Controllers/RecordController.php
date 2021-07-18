<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProfileRequest;
use App\Castles;
use App\Achieves;

class RecordController extends Controller
{
    public function index(){
			if(session("login") != "admin"){
        return redirect("login");
      }else{
	      $yet = Castles::select()
	              ->leftJoin("stamp_data", "name", "=", "castle_name")
	              ->whereNull("stamp_name")
	              ->get();
				return view("record", ["list_data" => $yet]);
			}
		}

		//画像アップロード用　リクエストから画像ファイルをとって保存する
		public function imgUpload(ProfileRequest $request){
			//独自のスタンプがないときにない画像を表示するようにする
			$f_name = "not_org.png";
			if($request->photo != null){
				$f_name = $request->name . ".png";
				$request->photo->move("castle_stamp", $f_name);
			}

			/*
			$f_famus_name = $request->name."_100.png";
			//ファイル名を指定してパスに保存
			$request->famus->move("100_famus", $f_famus_name);
			*/
			//データベースに名前と画像と日時を記録する
			/*
			$castle = new Achieves;
			$castle->stamp_name = $f_name;
			$castle->castle_name = $request->name;
			//$castle->date = $request->date;
			$castle->save();
			*/
			$castle = new Achieves;
			$fillable = $castle->create(["stamp_name" => $f_name, "castle_name" => $request->name]);

			session()->forget("login");

			return redirect("record")->with("success","登録完了");
		}
}
