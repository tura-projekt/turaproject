<?php

namespace App\Http\Controllers;

use App\Models\Turavezeto;
use Illuminate\Http\Request;

class TuravezetoController extends Controller
{
    public function index()
    {
        $turavezetok = response()->json(Turavezeto::all());
        return $turavezetok;
    }

    public function show($id)
    {
        $turavezeto = response()->json(Turavezeto::find($id));
        return $turavezeto;
    }

    public function store(Request $request)
    {
        $turavezeto = new Turavezeto();
        $turavezeto->id = $request->id;
        $turavezeto->name = $request->name;
        $turavezeto->email = $request->email;
        $turavezeto->cim = $request->cim;
        $turavezeto->telefonszam = $request->telefonszam;
        $turavezeto->belepesdatuma = $request->belepesdatuma;
        $turavezeto->save();
    }

    public function update(Request $request, $id)
    {
        $turavezeto = Turavezeto::find($id);
        $turavezeto->id = $request->id;
        $turavezeto->name = $request->name;
        $turavezeto->email = $request->email;
        $turavezeto->cim = $request->cim;
        $turavezeto->telefonszam = $request->telefonszam;
        $turavezeto->belepesdatuma = $request->belepesdatuma;
        $turavezeto->save();
    }
    public function destroy($id)
    {
        //find helyett a paraméter
        Turavezeto::find($id)->delete();
    }
}
