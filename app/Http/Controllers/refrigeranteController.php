<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\refrigerante;
Use Alert;

class refrigeranteController extends Controller
{

    public function index()
    {
        $refrigerante = refrigerante::all();
        if(session('success_mesage')){
            Alert::success('Refrigerante ', session('success_mesage'));
        }
        if(session('info_mesage')){
            Alert::info('Ação', session('info_mesage'));
        }
        
        return view('refrigerante.index', compact('refrigerante'));
    }

    public function create()
    {
        //refrigerante::create([
        //    'marca'=>'Antartica',
        //    'tipo'=>'Lata',
        //    'sabor'=>'Guarana',
        //    'litragem'=>'1L',
        //    'valor'=>6.00,
        //    'quantidade'=>10
        //]);
//
        //return 'Dados Salvos';
        return view('refrigerante.create');

    }

    public function store(Request $request)
    {
        refrigerante::create([
            'marca'=> $request->marca,
            'tipo'=>$request->tipo,
            'sabor'=>$request->sabor,
            'litragem'=>$request->litragem,
            'valor'=>$request->valor,
            'quantidade'=>$request->quantidade
        ]);
        return redirect()->route('refrigerantes.index')->withSuccessMesage('Cadastrado com sucesso!');
    }

    public function show($id)
    {
        //$refrigerante = refrigerante::find($id);
        //$refrigerante->delete();
        //return 'Item apagado com sucesso';
        return view('refrigerante.show', compact('id'));
    }

    public function edit($id)
    {
        $refrigerante = refrigerante::findOrFail($id);
        return view('refrigerante.edit', compact('editar'));
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        
    }

    public function confirm($id)
    {
        $refrigerante = refrigerante::findOrFail($id);
        return view('refrigerante.confirm', compact('refrigerante'));
    }
}
