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

    public function edit(Request $request)
    {
        $area = Area::find($request->id);
        return view('area.edit', [
            'form' => $area,
        ]);
    }

    public function update(Request $request)
    {
        $this->validate($request, Area::$rules);
        $area = Area::find($request->id);
        $form = $request->all();
        unset($form['_token']);
        $area->fill($form)->save();
        return redirect('/area');
    }

    public function delete(Request $request)
    {
        $area = Area::find($request->id);
        return view('area.delete', ['form' => $area]);
    }

    public function remove(Request $request)
    {
        Area::find($request->id)->delete();
        return redirect('/area');
    }
}
