<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use Illuminate\Http\Request;

class PasienController extends Controller
{
    public function index(){
        $pasien = Pasien::all();
        return view('pasien.index',compact(['pasien']));
    }

    public function create()
    {
        return view('pasien.create');
    }

    public function store(Request $request)
    {
       // dd($request->except(['_token','submit']));
       Pasien::create($request->except(['_token','submit']));
       return redirect('/pasien');
    }

    public function edit($id)
    {
        $pasien = Pasien::find($id);
        return view('pasien.edit',compact(['pasien']));
    }

    public function update($id, Request $request)
    {
        $pasien = Pasien::find($id);
        $pasien->update($request->except(['_token','submit']));
        return redirect('/pasien');
    }

    public function destroy($id)
    {
        $pasien = Pasien::find($id);
        $pasien->delete();
        return redirect('/pasien');
    }
}

