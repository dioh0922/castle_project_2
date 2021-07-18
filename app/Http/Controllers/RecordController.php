<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RecordController extends Controller
{
    public function index(){
			if(session("login") != "admin"){
        return redirect("login");
      }
		}
}
