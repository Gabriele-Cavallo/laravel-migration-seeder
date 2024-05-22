<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Train;

class PageController extends Controller
{
    public function index() {
        $trains = Train::all();

        $data= [
            'trains' => $trains,
        ];

        return view('home', $data);
    }
    public function daily() {
        $trains = Train::where('travel_day', '=', today())->get();

        $data= [
            'trains' => $trains,
        ];

        return view('daily', $data);
    }
}
