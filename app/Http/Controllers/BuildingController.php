<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BuildingController extends Controller
{
    public function index($room)
    {
        return "部屋番号は" . $room . "です";
    }

    public function build()
    {
        return "建物です";
    }

}
