<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\refrigerante;

class refrigeranteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $refrigerante = refrigerante::all();
        //dd($refrigerante);
        return view('index')->with('refrigerante', $refrigerante);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        refrigerante::create([
            'marca'=>'Antartica',
            'tipo'=>'Lata',
            'sabor'=>'Guarana',
            'litragem'=>'1L',
            'valor'=>6.00,
            'quantidade'=>10
        ]);

        return 'Dados Salvos';
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $refrigerante = refrigerante::find($id);
        $refrigerante->delete();
        return 'Item apagado com sucesso';
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $refrigerante = refrigerante::find($id);
        //$refrigerante = refrigerante::where('id', $id)->first();
        $refrigerante->marca = 'Antartica';
        $refrigerante->save();
        return 'Atualizado com sucesso';
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