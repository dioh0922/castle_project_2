<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Castles;

class MapController extends Controller
{
	//実績一覧用ページ、名前と画像を一覧表示する
	public function index(){
		//地図上にプロットしていく等の表示をさせる
		return view("map");
	}
	public function show(){
		$already = Castles::select()
						->join("stamp_data", "name", "=", "castle_name")
						->get();

		//行ってない残りのリストを取得
		$yet     = Castles::select()
						->leftJoin("stamp_data", "name", "=", "castle_name")
						->whereNull("stamp_name")
						->get();

		return response()->json([
			"already" => $already,
			"yet" => $yet
		]);
	}
}
