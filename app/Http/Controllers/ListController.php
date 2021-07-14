<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Achieves;

class ListController extends Controller
{
    public function index(){
			$select_list = Achieves::all();
      //画像名からファイルのパスとしてビューに渡す
      foreach($select_list as $list){
        $path = "castle_stamp/".$list->stamp_name;
        $list->img_path = $path;

				$list->famus_exsist = true;
			}
			return view("list/index", ["list" => $select_list]);
		}
}
