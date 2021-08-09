<?php

namespace App\Http\Controllers;
use App\Models\Ficha;
use Illuminate\Http\Request;

class FichaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('fichas.index')
        ->with('fichas', Ficha::paginate(25));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('fichas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newFicha = new Ficha();
        $newFicha->NumeroFicha = $request->input('numero');
        $newFicha->InicioLectiva = $request->input('inicioLectiva');
        $newFicha->FinLectiva = $request->input('finLectiva');
        $newFicha->InicioProductiva = $request->input('inicioProductiva');
        $newFicha->FinProductiva = $request->input('finProductiva');
        $newFicha->Jornada = $request->input('jornada');
        $newFicha->Estado = $request->input('estado');
        $newFicha->Id_Programa = $request->input('programa');
        $newFicha->save();
        echo "Registro";
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Ficha $ficha)
    {
        return view('fichas.show')
        ->with('ficha', $ficha);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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
