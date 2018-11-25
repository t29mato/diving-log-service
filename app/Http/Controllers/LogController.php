<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Area;


class LogController extends Controller
{
    public function index(Request $request)
    {
        $param = Area::all();
        return view('log.index', [
            'param' => $param,
        ]);
    }
}
