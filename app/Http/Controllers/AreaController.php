<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Area;

class AreaController extends Controller
{
    public function index(Request $request)
    {
        $param = Area::all();
        return view('area.index', [
            'param' => $param,
        ]);
    }

    public function add(Request $request)
    {
        return view('area.add');
    }

    public function create(Request $request)
    {
        $this->validate($request, Area::$rules);
        $area = new Area;
        $form = $request->all();
        $id = Auth::id();
        $form['user_id'] = $id;
        unset($form['_token']);
        $area->fill($form)->save();
        return redirect('/area');
    }
}
