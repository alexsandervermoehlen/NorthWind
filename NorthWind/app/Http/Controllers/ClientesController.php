<?php

namespace App\Http\Controllers;

use App\Clientes;
use Illuminate\Http\Request;

class ClientesController extends Controller
{
    private $clientes;

    public function __construct(Clientes $oCliente) {
        $this->clientes = $oCliente;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientes = Clientes::paginate(10);

        return view('clientes.index', compact('clientes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('clientes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, clientes $oCliente)
    {
        $data = $request->all();
        $data['IDClientes'] = \DB::select('select max(IDCliente) + 1 as codigo from clientes')[0]->codigo;

        $oCliente->create($data);

        flash('Cliente inserido(a) com sucesso.')->success();

        return redirect()->route('clientes.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cliente = $this->cliente->find($id);
        return view('clientes.edit', compact('cliente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();

        $cliente = $this->cliente->find($id);
        $cliente->update($data);

        flash('Cliente atualizado(a) com sucesso.');
        return redirect()->route('clientes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cliente = $this->cliente->find($id);
        $cliente->delete();

        flash('Cliente excluído(a) com sucesso.');
        return redirect()->route('clientes.index');
    }
}

