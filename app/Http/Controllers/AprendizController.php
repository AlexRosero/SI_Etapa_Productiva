<?php

namespace App\Http\Controllers;

use App\Models\Rol;
use App\Models\Usuario;
use App\Models\Aprendiz;
use App\Models\Ficha;
use App\Models\UsuarioRol;
use Illuminate\Http\Request;

class AprendizController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('aprendices.index')
        ->with('aprendices',Aprendiz::paginate(5));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('aprendices.create')
        ->with('roles', Rol::all())
        ->with('fichas', Ficha::all());
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
        $newUsuarioN = $request->input('nombre');
        $newUsuario->Apellido = $request->input('apellido');
        $newUsuarioA = $request->input('apellido');
        $newUsuario->FechaNacimiento = $request->input('fechaNacimiento');
        $newUsuarioF = $request->input('fechaNacimiento');
        $newUsuario->Genero = $request->input('genero');
        $newUsuario->TipoDocumento = $request->input('tipoD');
        $newUsuario->NumeroIdentificacion = $request->input('numeroD');
        $newUsuario->NumeroCelular = $request->input('celular');
        $newUsuario->NumeroFijo = $request->input('telefono');
        $newUsuario->EmailPersonal = $request->input('emailP');
        $newUsuario->EmailSena = $request->input('emailS');
        $newUsuario->Direccion = $request->input('direccion');
        $newUsuario->Estado = $request->input('estado');
        $newUsuario->Contraseña = $request->input('numeroD');

        $newUsuario->save();

        $newUsuRol = new UsuarioRol();
        $newUsuRol->id_usuario = $newUsuario->IdUsuario;
        $newUsuRol->id_rol = $request->input('rol');

        $newUsuRol->save();

        $newA = new Aprendiz();
        $newA->id_usuario = $newUsuario->IdUsuario;
        $newA->id_ficha = $request->input('ficha');

        $newA->save();

        return redirect('aprendices')
        ->with('msg', "Se registro correctamente");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Aprendiz  $aprendiz
     * @return \Illuminate\Http\Response
     */
    public function show(/*Aprendiz*/ $aprendiz)
    {
        $aprendiz = Aprendiz::find($aprendiz);
        return view('aprendices.show')
        ->with('aprendiz',$aprendiz);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Aprendiz  $aprendiz
     * @return \Illuminate\Http\Response
     */
    public function edit(/*Aprendiz*/ $aprendiz)
    {
        $aprendiz = Aprendiz::find( $aprendiz);
        return view('aprendices.edit')
        ->with('fichas', Ficha::all());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Aprendiz  $aprendiz
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Aprendiz $aprendiz)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Aprendiz  $aprendiz
     * @return \Illuminate\Http\Response
     */
    public function destroy(Aprendiz $aprendiz)
    {
        //
    }
}
