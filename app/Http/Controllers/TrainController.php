<?php

namespace App\Http\Controllers;

use App\Train;

use Illuminate\Http\Request;

class TrainController extends Controller
{
    public function index()
    {

        // $trains = Train::where('departure_date', '2022-02-18')->get();
        // dd($trains);

        $trains = Train::paginate(15);
        $data = ["trains" => $trains];

        return view ("home", $data);
    }

    public function show(Train $train)
    {
        return view('show', compact('train'));
    }
}
