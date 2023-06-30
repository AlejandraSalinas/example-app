<?php

namespace App\Http\Controllers;

use Illuminate\Http\Controller as BaseController;
use Illuminate\Support\Facades\DB;

class Controller extends Controller
{
    public function index(){
        $sql=DB::select(" select * from personas ");
        return view("welcome")->with("sql", $sql);
    }
}