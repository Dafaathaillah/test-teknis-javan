<?php

namespace App\Http\Controllers;

use App\Models\Anak;
use App\Models\Orangtua;
use Illuminate\Http\Request;

class AnakController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ortu = Orangtua::all();
        $anak = Anak::all();
        return view('soal2dan8.anak.index', compact('anak', 'ortu'));
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
            'orangtua1_id' => 'required',
        ]);

        $anak = new Anak();

        $anak->name = $request->input('name');
        $anak->jk = $request->input('jk');
        $anak->orangtua1_id = $request->input('orangtua1_id');
        $anak->save();
        return redirect()->route('anak.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Anak  $anak
     * @return \Illuminate\Http\Response
     */
    public function show(Anak $anak)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Anak  $anak
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $anak = Anak::find($id);
        return view('soal2dan8.anak.edit', compact('anak'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Anak  $anak
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'jk' => 'required',
        ]);

        $anak = Anak::find($id);

        $anak->name = $request->input('name');
        $anak->jk = $request->input('jk');
        $anak->save();
        return redirect()->route('anak.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Anak  $anak
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Anak::find($id)->delete();
        return redirect()->route('anak.index');
    }
}
