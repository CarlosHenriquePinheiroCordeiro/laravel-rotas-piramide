<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AgendaController extends Controller
{
    /**
     * Display a listing of the resource.
     * Chamado no GET - Lista os itens
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        session_start();
        if (!isset($_SESSION['agenda'])) {
            $_SESSION['agenda'] = [];
        }
        $dados = $_SESSION['agenda'];
        return view('agenda.index', compact('dados'));
    }

    /**
     * Show the form for creating a new resource.
     * Chamado no GET - Apresenta o formulário em branco
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('agenda.create');
    }

    /**
     * Store a newly created resource in storage.
     * Chamado no POST - Armazena no banco de dados após ser clicado no OK do formulário
     * (geralmente não tem interface)
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $id = date('YmdHis');
        $new = array(
            'id'        => $id,
            'nome'      => $request->nome,
            'telefone'  => $request->telefone,
            'email'     => $request->email,
        );
        session_start();
        $_SESSION['agenda'][$id] = $new;
        $dados = $_SESSION['agenda'];
        return redirect()->route('agenda.index', compact('dados'));
    }

    /**
     * Display the specified resource.
     * Chamado no GET, visualizar registro (readonly)
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        session_start();
        $show  = 'ID: '.$id.'<br>';
        $show .= 'Nome: '.$_SESSION['agenda'][$id]['nome'].'<br>';
        $show .= 'Telefone: '.$_SESSION['agenda'][$id]['telefone'].'<br>';
        $show .= 'E-mail: '.$_SESSION['agenda'][$id]['email'].'<br>';
        return $show;
    }

    /**
     * Show the form for editing the specified resource.
     * Chamado no GET - Passando o ID de determinado item, formulário para edição de um registro (form preenchido)
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        session_start();
        $dados = $_SESSION['agenda'][$id];
        return view('agenda.edit', compact('dados'));
    }

    /**
     * Update the specified resource in storage.
     * Chamado no PUT/PATCH, atualiza um registro no banco, após ser clicado no OK do edit
     * 
     * PATCH - Passo apenas parte do objeto que quero alterar, por exemplo alterar apenas o nome
     * PUT - Passo o objeto completo para a alteração
     * 
     * (geralmente não tem interface específica)
     * 
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $update = array(
            'id'        => $id,
            'nome'      => $request->nome,
            'telefone'  => $request->telefone,
            'email'     => $request->email,
        );
        session_start();
        $_SESSION['agenda'][$id] = $update;
        $dados = $_SESSION['agenda'];
        return redirect()->route('agenda.index', compact('dados'));
    }

    /**
     * Remove the specified resource from storage.
     * Chamado no DELETE, deleta o item do banco de dados (geralmente não tem interface específica)
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        session_start();
        unset($_SESSION['agenda'][$id]);
        $dados = $_SESSION['agenda'];
        return redirect()->route('agenda.index', compact('dados'));
    }
}
