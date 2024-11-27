<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clientes = Cliente::all();
        //return view('cliente.index',['clientes' => $clientes]);
        return view('cliente.index',compact('clientes'));
         return view('cliente.index');
    
    
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('cliente.cadastrar');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       
        $cliente = Cliente::create($request->all());

				return redirect()->route('cliente.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
	    {
	        $cliente = Cliente::find($id);
	        $cliente->delete();
	
	        return redirect()->route('cliente.index');
	    }
}
