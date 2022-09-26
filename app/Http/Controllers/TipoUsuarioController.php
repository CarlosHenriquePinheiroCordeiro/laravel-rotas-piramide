<?php

namespace App\Http\Controllers;

use App\Models\TipoUsuario;
use Illuminate\Http\Request;

class TipoUsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dados = array();
        if (request('find') != null)
        {
            $busca = request('find');
            $dados = TipoUsuario::where('tusnome', 'like', "$busca%")->get();
        }
        else
            $dados = TipoUsuario::all();
        return view('tipoUsuario.index', compact('dados'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dados = ['insert' => true];
        return view('tipoUsuario.create', compact('dados'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $TipoUsuario = new TipoUsuario();
        $TipoUsuario->tuscodigo  = $request->tuscodigo;
        $TipoUsuario->tusnome    = $request->tusnome;
        $TipoUsuario->save();
        return redirect()->route('tipoUsuario.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TipoUsuario  $tipoUsuario
     * @return \Illuminate\Http\Response
     */
    public function show(TipoUsuario $tipoUsuario)
    {
        $dados = ['tipoUsuario' => $tipoUsuario, 'visualizar' => true];
        return view('tipoUsuario.show', compact('dados'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TipoUsuario  $tipoUsuario
     * @return \Illuminate\Http\Response
     */
    public function edit(TipoUsuario $tipoUsuario)
    {
        $dados = ['tipoUsuario' => $tipoUsuario];
        return view('tipoUsuario.edit', compact('dados'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TipoUsuario  $tipoUsuario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TipoUsuario $tipoUsuario)
    {
        $tipoUsuario->tuscodigo    = $request->tuscodigo;
        $tipoUsuario->tusnome      = $request->tusnome;
        $tipoUsuario->update();
        return redirect()->route('tipoUsuario.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TipoUsuario  $tipoUsuario
     * @return \Illuminate\Http\Response
     */
    public function destroy(TipoUsuario $tipoUsuario)
    {
        TipoUsuario::destroy($tipoUsuario->tuscodigo);
        return redirect()->route('tipoUsuario.index');
    }
}
