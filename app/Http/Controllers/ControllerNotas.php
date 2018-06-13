<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Nota;

class ControllerNotas extends Controller
{
    public function index()
    {
    	$notas=Nota::all();
    	return view('notas', ['notas' => $notas]);
    }

    public function show(Nota $nota)
    {
    	//$nota=Nota::find($id);
    
    	return view('nota', ['nota' => $nota]);
    }
    public function create()
    {
        return view('formulario');
    }
    public function store()
    {

        //dd(Request()->all());


       $resul=Nota::create(Request()->all());
       //return $resul;
       return back();
      // return redirect('/notas');
        //$nota=new Nota;
        //$nota->title=Request()->title;
        //$nota->body=Request()->body;
        //$nota->importante=Request()->importante;
    }
    public function edit(Nota $nota)
    {
        
        return view('edit', ['nota' => $nota]);
    }
    public function update(Nota $nota)
    {
        
        $nota->update(request()->all());
        return redirect('/notas');
        
    }
    public function destroy(Nota $nota)
    {
        $nota->delete();
        return redirect('/notas');
    }
}
