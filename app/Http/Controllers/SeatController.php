<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeatController extends Controller
{
    public function generate(Request $request)
    {
        $stops = $request->stops - 1;
        $z = $request->stops - 2;
        $array = [];

        for($i = 0; $i < $stops; $i++){
            for($j = $z--; $j < $stops; $j++){
                $array[$i][] =  $request->seats;
            }
        }
        return view('generate', ['array' => $array , 'a' => 'A']);
    }

    public function show(Request $request)
    {
        //$array = array_fill(0, $request->stops, array_fill(0, $request->stops, $request->seats));

        $array = $request->stops;
        return view('show', ['array' => $array]);
    }
}
