<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\NivelRequest;
use App\Http\Requests\NivelUpdateRequest;
use App\Nivel;
use Illuminate\Http\Request;

class NivelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $niveles = Nivel::all();

        return view('admin.niveles.index', compact('niveles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.niveles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param NivelRequest|Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(NivelRequest $request)
    {
        Nivel::create($request->all());

        return redirect()->route('nivel.index')->with('message', 'nivel creado');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Nivel  $nivel
     * @return \Illuminate\Http\Response
     */
    public function show(Nivel $nivel)
    {
        return view('nivel.view', compact('nivel'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Nivel  $nivel
     * @return \Illuminate\Http\Response
     */
    public function edit(Nivel $nivel)
    {
        return view('admin.niveles.edit', compact('nivel'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param NivelUpdateRequest|Request $request
     * @param  \App\Nivel $nivel
     * @return \Illuminate\Http\Response
     */
    public function update(NivelUpdateRequest $request, Nivel $nivel)
    {
        $nivel->update($request->all());

        return redirect()->route('nivel.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Nivel  $nivel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Nivel $nivel)
    {
        $nivel->delete();

        return redirect()->to('nivel.index')->with('message', 'nivel eliminado');
    }
}
