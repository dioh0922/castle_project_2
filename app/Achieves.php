<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Achieves extends Model
{
	public $timestamps = false;   //タイムスタンプなし → update_atとかつかないようにする
	protected $table = "stamp_data"; //接続するテーブルの指定
	protected $fillable = ["stamp_name", "castle_name"];
}
