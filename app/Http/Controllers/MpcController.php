<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MpcController extends Controller
{
    public function index(){
        return view('mpc');
    }
}
