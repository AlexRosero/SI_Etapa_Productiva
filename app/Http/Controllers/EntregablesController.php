<?php

namespace App\Http\Controllers;

use App\Models\Entregables;
use Illuminate\Http\Request;

class EntregablesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('entregables.index')
        ->with('entregables', Entregables::paginate(25));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('entregables.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Entregables  $entregables
     * @return \Illuminate\Http\Response
     */
    public function show(Entregables $entregables)
    {
        return view('entregables.show')
        ->with('entregable', $entregables);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Entregables  $entregables
     * @return \Illuminate\Http\Response
     */
    public function edit(Entregables $entregables)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Entregables  $entregables
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Entregables $entregables)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Entregables  $entregables
     * @return \Illuminate\Http\Response
     */
    public function destroy(Entregables $entregables)
    {
        //
    }
}
