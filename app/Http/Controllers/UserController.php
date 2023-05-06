<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //3.2 Crear controlador User
    //4.6 hacer funciones
    public function index()
    {
        $users = User::all(); 

        return view('usuarios.index', compact('users')); 
    }
    public function show($id) 
    { 
      $user = User::findOrFail($id); 
    
      return view('usuarios.show', compact('user')); 
    } 

    public function destroy($id) 
  { 
    $user = User::findOrFail($id); 
    $user->delete(); 

    //Devolver alerta tipo danger
    return redirect('/usuarios')->with('danger', 'Usuario eliminado'); 
  } 

  public function create() 
  { 
    return view('usuarios.create'); 
  }   
  public function store(Request $request) 
  { 
    $validatedData = $request->validate([ 
      'name' => 'required|max:100', 
      'email' => 'required|max:100', 
      'password' => 'required|max:100', 
      'rol' => 'required|max:100', 
      'status' => 'required|max:100', 
    ]); 
    $validatedData['password'] = Hash::make($validatedData['password']);
    $user = User::create($validatedData);

    //Devolver alerta tipo success
    return redirect('/usuarios')->with('success', 'Usuario registrado'); 
    }   

    public function edit($id) 
    { 
      $user = User::findOrFail($id); 
    
      return view('usuarios.edit', compact('user')); 
    }     
    public function update(Request $request, $id) 
    { 
      $validatedData = $request->validate([ 
      'name' => 'required|max:100', 
      'email' => 'required|max:100',  
      'rol' => 'required|max:100', 
      'status' => 'required|max:100',
      ]); 
      User::whereId($id)->update($validatedData); 
      //Devolver alerta tipo info
      return redirect('/usuarios')->with('info', 'Se han actualizado los datos del usuario'); 
    }     
}
