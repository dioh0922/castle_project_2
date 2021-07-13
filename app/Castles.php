<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Castles extends Model
{
	public $timestamps = false;   //タイムスタンプなし → update_atとかつかないようにする
	protected $table = "castle_database"; //接続するテーブルの指定
}
