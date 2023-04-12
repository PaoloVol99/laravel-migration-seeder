<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Train;
use Carbon\Carbon;

class PageController extends Controller
{
    public function welcome() {

        $current_time = Carbon::now();

        $trains = Train::where('departure_time', '>=', $current_time)->get();

        $data = [
            'trains' => $trains
        ];


        return view('welcome', $data);
    }
}
