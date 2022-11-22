<?php

namespace App\Http\Controllers;

use App\Models\Orangtua;
use Illuminate\Http\Request;

class OrangtuaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orangtua = Orangtua::all();
        return view('soal2dan8.orangtua.index', compact('orangtua'));
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
        ]);

        $ortu = new Orangtua();

        $ortu->name = $request->input('name');
        $ortu->jk = $request->input('jk');
        $ortu->save();
        return redirect()->route('orangtua.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Orangtua  $orangtua
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Orangtua  $orangtua
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ortu = Orangtua::find($id);
        return view('soal2dan8.orangtua.edit', compact('ortu'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Orangtua  $orangtua
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'jk' => 'required',
        ]);

        $ortu = Orangtua::find($id);

        $ortu->name = $request->input('name');
        $ortu->jk = $request->input('jk');
        $ortu->save();
        return redirect()->route('orangtua.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Orangtua  $orangtua
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Orangtua::find($id)->delete();
        return redirect()->route('orangtua.index');
    }
}
