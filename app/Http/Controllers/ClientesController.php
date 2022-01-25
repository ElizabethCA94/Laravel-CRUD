<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Clientes;

class ClientesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientes = Clientes::all();
        //retorne una vista 
        return view('clientes.index')->with('clientes', $clientes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('clientes.almacenar');
    }

    // /**
    //  * Store a newly created resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @return \Illuminate\Http\Response
    //  */
    // public function store(Request $request)
    // {
    //     //instancia de la clase Productos, -> son campos de la bd y -> son name del formulario
    //     $cliente = new Clientes();
    //     $cliente->cliente_id = $request->cliente_id;
    //     $cliente->nombre = $request->nombres;
    //     $cliente->apellido= $request->apellidos;
    //     $cliente->telefono = $request->telefonos;
    //     $cliente->direccion = $request->direccion;
    //     $cliente->save();

    //     return redirect()-> route('productos.index');
        
        
    // }

    // /**
    //  * Display the specified resource.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function show($id)
    // {
    //     //
    // }

    // /**
    //  * Show the form for editing the specified resource.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function edit($id)
    // {
    //     $cliente = Clientes::find($id);
    //     return view('clientes.editar')->with('producto', $cliente);
    // }

    // /**
    //  * Update the specified resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function update(Request $request, $id)
    // {
    //     $validated = $request->validate([
    //         'cliente_id' => 'required',
    //         'nombres' => 'required',
    //         'apellidos' => 'required',
    //         'telefonos' => 'required',
    //         'direccion' => 'required',
    //     ]);

    //     $cliente = Clientes::find($id);
    //     $cliente->cliente_id = $request->cliente_id;
    //     $cliente->nombre = $request->nombres;
    //     $cliente->apellido= $request->apellidos;
    //     $cliente->telefono = $request->telefonos;
    //     $cliente->direccion = $request->direccion;
    //     $cliente->save();

    //     return redirect()-> route('productos.index');
    // }

    // /**
    //  * Remove the specified resource from storage.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function destroy($id)
    // {
    //     $cliente = Clientes::find($id);
    //     $cliente->delete();
    //     return redirect()-> route('clientes.index');

    // }
}
