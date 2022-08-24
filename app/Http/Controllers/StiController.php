<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StiController extends Controller
{
    public function index(){
        return view('sti');
    }
}
