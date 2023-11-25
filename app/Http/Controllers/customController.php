<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;

class customController extends Controller
{
    public function index(){
        $d = Carbon::now();
        $date = Carbon::parse($d);
        $mount = Carbon::parse($d);
        $year = Carbon::parse($d);
        $formatted_date = $date->format('d');
        $formatted_mount = $mount->format('M');
        $formatted_year = $year->format('Y');

        return view('custom.capres', compact(['formatted_date', 'formatted_mount', 'formatted_year']));
    }
}
