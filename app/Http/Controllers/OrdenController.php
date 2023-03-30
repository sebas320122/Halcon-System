<?php

namespace App\Http\Controllers;

use App\Models\Orden;
use Illuminate\Http\Request;

class OrdenController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     //5.5 Configurar funciones
    public function index()
    {
        //6.4 no mostrar ordenes archivadas
        $ordens = Orden::where('estado', '!=', 'archivado')->get(); 

    return view('ordenes.index', compact('ordens'));  
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('ordenes.create'); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([ 
            'num_cliente' => 'required|max:10', 
            'num_factura' => 'required|max:10', 
            'empresa' => 'required|max:200',
            'datos_fiscales' => 'required|max:300',
            'direccion' => 'required|max:200',
            'estado' => 'required',
            'material_id' => 'required',
          ]); 
          Orden::create($validatedData); 
        
          return redirect('/ordenes')->with('success', 'Orden registrada'); 
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $orden = Orden::findOrFail($id); 

        return view('ordenes.show', compact('orden')); 
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id) 
    { 
  $orden = Orden::findOrFail($id); 

  return view('ordenes.edit', compact('orden')); 
    } 

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id) 
    { 
      $validatedData = $request->validate([ 
        'num_cliente' => 'required|max:10', 
            'num_factura' => 'required|max:10', 
            'empresa' => 'required|max:200',
            'datos_fiscales' => 'required|max:300',
            'direccion' => 'required|max:200',
            'estado' => 'required',
            'material_id' => 'required',
        //7.42 modificar controlador de orden para fotos
            'foto_carga' => 'nullable', 
            'foto_entrega' => 'nullable' 
      ]); 

      if ($request->hasFile('foto_carga')) {
        $validatedData['foto_carga'] = $request->foto_carga->store('uploads', 'public');
    }
    
    if ($request->hasFile('foto_entrega')) {
        $validatedData['foto_entrega'] = $request->foto_entrega->store('uploads', 'public');
    }
      
      Orden::whereId($id)->update($validatedData); 
    
      return redirect('/ordenes')->with('success', 'Orden actualizada'); 
    } 

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $orden = Orden::findOrFail($id); 
        $orden->delete(); 

    return redirect('/ordenes')->with('success', 'Orden eliminada'); 
    }

    //6.2 Agregar funcion para mostrar ordenes archivdas
    public function index_archivadas()
    {
        $ordens = Orden::where('estado', '=', 'archivado')->get();
        return view('ordenes.archivadas', compact('ordens'));
    }

    //7.1 agregar funcion buscar orden para cliente
    public function buscar_orden(Request $request)
    {
        
        $num_factura = $request->input('num_factura');
    
        $orden = Orden::where('num_factura', $num_factura)->first();
    
        if (!$orden) {
            return view('clientes.inicio');
        }
        
       
        //7.51 agregar campos de imagen

        return view('clientes.ver', compact('orden'));
    }
}
