<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class navigationController extends Controller
{
    public function index(){

        $planWatch = DB::select('SELECT * FROM watchlists WHERE show_category = 0');
        $watching = DB::select('SELECT * FROM watchlists WHERE show_category = 1');

        return view('index',['planWatch' => $planWatch, 
                             'watching' => $watching]);
    }

    public function history(){

        $droppedShows = DB::select('SELECT show_title FROM watchlists WHERE show_category = 3');
        $finishedShows = DB::select('SELECT show_title FROM watchlists WHERE show_category = 2');

        return view('history', ['droppedShows' => $droppedShows,
                                'finishedShows' => $finishedShows]);
    }
}
