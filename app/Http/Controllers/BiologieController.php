<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BiologieController extends Controller
{
    public function index(){
        return view('biologie');
    }
}
