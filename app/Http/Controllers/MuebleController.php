<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mueble;
use App\Departamento;
use App\Sede;

class MuebleController extends Controller
{

     public function __construct()
    {
       $this->middleware('auth');
    }
      public function index()
    {
        $muebles = Mueble::all();
        $muebles = Mueble::paginate(4);

        return view('muebles.index',compact('muebles'));
    }

    public function create()
    {


    		$departamentos = new Departamento();
    		$departamentos = Departamento::all();

    		$sedes = new Sede();
    		$sedes = Sede::all();

    		return view('muebles.create',compact('muebles','departamentos','sedes'));

    } 

     public function store(Request $request)
    {	
    	 $request->validate([
           'codigo'       	 =>         'required|string',
           'adquisicion'     =>         'required|date',
           'valor'       	   =>         'required|numeric',
           'tipo'       	   =>         'required|string',
           'modelo'          =>         'required|string',
           'estado'      	   =>         'required|string',
           'departamento' 	 =>         'required|string'
    ]);

    	$muebles = new Mueble();
    	$muebles->codigo       	  = 		 $request->input('codigo');
    	$muebles->adquisicion     = 		 $request->input('adquisicion');
    	$muebles->valor      	    =		 	 $request->input('valor');
    	$muebles->tipo      	    = 		 $request->input('tipo');
    	$muebles->modelo          = 		 $request->input('modelo');
    	$muebles->estado       	  = 		 $request->input('estado');
    	$muebles->departamento_id =     	 $request->input('departamento');
    	$muebles->save();

    	$muebles = Mueble::all();
    	 return redirect()->route('muebles.index');
    }

    public function edit($id)
    {
        $departamentos = new Departamento();
        $departamentos = Departamento::all();

        $sedes = new Sede();
        $sedes = Sede::all();

        $muebles = Mueble::find($id);
        return view('muebles.edit',compact('muebles','departamentos','sedes'));
    }

    public function update(Request $request, $id)
    {
      $request->validate([
           'codigo'          =>         'required|string',
           'adquisicion'     =>         'required|date',
           'tipo'            =>         'required|string',
           'modelo'          =>         'required|string',
           'estado'          =>         'required|string',
           'departamento'    =>         'required|string'
    ]);

      $muebles = Mueble::find($id);

      $muebles->codigo          = $request->codigo;
      $muebles->adquisicion     = $request->adquisicion;
      $muebles->tipo            = $request->tipo;
      $muebles->modelo          = $request->modelo;
      $muebles->estado          = $request->estado;
      $muebles->departamento_id = $request->departamento;
      $muebles->save();

      return redirect()->route('muebles.index');
    }

    public function destroy($id)
    {
      $muebles = Mueble::find($id);
      $muebles->delete();
      return redirect()->route('muebles.index');
    }
}
