<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\TipoRequest;
use App\Tipo;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class TipoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $tipos = Tipo::all();

        return view('admin.tipos.index', compact('tipos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.tipos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param TipoRequest|Request $request
     * @return Response
     */
    public function store(TipoRequest $request)
    {
        Tipo::create($request->all());

        return redirect()->route('admin.tipos.index')->with('message', 'tipo creado');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Tipo  $tipos
     * @return Response
     */
    public function show(Tipo $tipos)
    {
        return view('admin.tipos.view', compact('tipos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Tipo $tipo
     * @return Response
     * @internal param Tipo $tipos
     */
    public function edit(Tipo $tipo)
    {
        return view('admin.tipos.edit', compact('tipo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tipo  $tipos
     * @return Response
     */
    public function update(Request $request, Tipo $tipos)
    {
        $tipos->update($request->all());

        return redirect()->to('admin.tipos.index')->with('message', 'Tipo actualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tipo  $tipos
     * @return Response
     */
    public function destroy(Tipo $tipos)
    {
        $tipos->delete();

        return redirect()->to('admin.tipos.index')->with('message', 'Tipo eliminado');
    }
}
