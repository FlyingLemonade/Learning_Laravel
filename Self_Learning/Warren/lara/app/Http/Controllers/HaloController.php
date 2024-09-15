<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HaloController extends Controller
{
    public function index(Request $request) {
        // return $request->param1;
        $a = $request->param1;
        $b = $request->param2 ? $request->param2 : 0;

        // if ($b == 2) 
        $hasil = $a + $b;
        //output
        // return $hasil;      
        // return 'Hello Controllers!';

        return view('halo')->with('hasil', $hasil);
    }
}
