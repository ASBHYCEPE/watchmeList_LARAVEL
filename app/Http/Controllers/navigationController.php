<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class navigationController extends Controller
{
    public function index(){
        return view('index');
    }
}
