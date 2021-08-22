<?php

namespace App\Http\Controllers;
use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $paginate = 25;
        return view('usuarios.index')
        ->with('usuarios', Usuario::paginate($paginate));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('usuarios.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newUsuario = new Usuario();
        $newUsuario->Nombre = $request->input('nombre');
        $newUsuario->Apellido = $request->input('apellido');
        $newUsuario->FechaNacimiento = $request->input('fechaNacimiento');
        $newUsuario->Genero = $request->input('genero');
        $newUsuario->TipoDocumento = $request->input('tipoD');
        $newUsuario->NumeroIdentificacion = $request->input('numeroD');
        $newUsuario->NumeroCelular = $request->input('celular');
        $newUsuario->NumeroFijo = $request->input('telefono');
        $newUsuario->EmailPersonal = $request->input('emailP');
        $newUsuario->EmailSena = $request->input('emailS');
        $newUsuario->Direccion = $request->input('direccion');
        $newUsuario->Estado = $request->input('estado');
        $newUsuario->save();
        return redirect('usuarios');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Usuario $usuario)
    {
        return view('usuarios.show')
        ->with('usuario', $usuario);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Usuario $usuario)
    {
        return view('usuarios.edit')
        ->with('usuario', $usuario);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Usuario $usuario)
    {
        $usuario->Nombre = $request->input('nombre');
        $usuario->Apellido = $request->input('apellido');
        $usuario->FechaNacimiento = $request->input('fechaNacimiento');
        $usuario->Genero = $request->input('genero');
        $usuario->TipoDocumento = $request->input('tipoD');
        $usuario->NumeroIdentificacion = $request->input('numeroD');
        $usuario->NumeroCelular = $request->input('celular');
        $usuario->NumeroFijo = $request->input('telefono');
        $usuario->EmailPersonal = $request->input('emailP');
        $usuario->EmailSena = $request->input('emailS');
        $usuario->Direccion = $request->input('direccion');
        $usuario->Estado = $request->input('estado');
        $usuario->save();

        return redirect('usuarios');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
