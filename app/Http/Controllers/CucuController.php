<?php

namespace App\Http\Controllers;

use App\Models\Anak;
use App\Models\Cucu;
use Illuminate\Http\Request;

class CucuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ortu2 = Anak::all();
        $cucu = Cucu::all();
        return view('soal2dan8.cucu.index', compact('ortu2', 'cucu'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'jk' => 'required',
            'orangtua2_id' => 'required',
        ]);

        $cucu = new Cucu();

        $cucu->name = $request->input('name');
        $cucu->jk = $request->input('jk');
        $cucu->orangtua2_id = $request->input('orangtua2_id');
        $cucu->save();
        return redirect()->route('cucu.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cucu  $cucu
     * @return \Illuminate\Http\Response
     */
    public function show(Cucu $cucu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cucu  $cucu
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cucu = Cucu::find($id);
        return view('soal2dan8.cucu.edit', compact('cucu'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cucu  $cucu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'jk' => 'required',
        ]);

        $cucu = Cucu::find($id);

        $cucu->name = $request->input('name');
        $cucu->jk = $request->input('jk');
        $cucu->save();
        return redirect()->route('cucu.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cucu  $cucu
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Cucu::find($id)->delete();
        return redirect()->route('cucu.index');
    }
}
