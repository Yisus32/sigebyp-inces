<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PersonaRequest;
use App\Persona;
use App\Cargo;
Use App\Departamento;
Use App\Sede;
Use Auth;

class PersonaController extends Controller
{

    public function __construct()
    {
       $this->middleware('auth');
    }

    public function index()
    {
    	   $personas = Persona::all();
    	   $personas = Persona::paginate(4);
    	   return view('personas.index',compact('personas'));

    }

   public function create()
    {
    		$cargos = new Cargo();
    		$cargos = Cargo::all();

    		$departamentos = new Departamento();
    		$departamentos = Departamento::all();

    		$sedes = new Sede();
    		$sedes = Sede::all();
    		return view('personas.create',compact('personas','cargos','departamentos','sedes'));

    } 

    public function store(Request $request)
    {	
    	 $request->validate([
           'documento'       =>         'required|numeric',
           'nombres'         =>         'required|string',
           'apellidos'       =>         'required|string',
           'telefono'        =>         'required|numeric',
           'email'           =>         'required|e-mail',
           'direccion'       =>         'required|string',
           'cargo'        	 =>         'required|string',
           'departamento' 	 =>         'required|string'
    ]);

    	$personas = new Persona();
    	$personas->documento       = 		 $request->input('documento');
    	$personas->nombres         = 		 $request->input('nombres');
    	$personas->apellidos       =		 $request->input('apellidos');
    	$personas->telefono        = 		 $request->input('telefono');
    	$personas->email           = 		 $request->input('email');
    	$personas->direccion       = 		 $request->input('direccion');
    	$personas->cargo_id        = 		 $request->input('cargo');
    	$personas->departamento_id =     $request->input('departamento');
    	$personas->save();

    	$personas = Persona::all();
    	 return redirect()->route('personas.index');
    }

    public function edit($id)
    {
        
        $cargos = new Cargo();
        $cargos = Cargo::all();

        $departamentos = new Departamento();
        $departamentos = Departamento::all();

        $sedes = new Sede();
        $sedes = Sede::all();

        $personas = Persona::find($id);
        return view('personas.edit',compact('personas','cargos','departamentos','sedes'));
    }

    public function update(Request $request, $id)
    {
       $request->validate([
           'documento'       =>         'required|string',
           'nombres'         =>         'required|string',
           'apellidos'       =>         'required|string',
           'telefono'        =>         'required|numeric',
           'email'           =>         'required|e-mail',
           'direccion'       =>         'required|string',
           'cargo'           =>         'required|string',
           'departamento'    =>         'required|string'
    ]);

      $personas = Persona::find($id);

      $personas->documento       =     $request->documento;
      $personas->nombres         =     $request->nombres;
      $personas->apellidos       =     $request->apellidos;
      $personas->telefono        =     $request->telefono;
      $personas->email           =     $request->email;
      $personas->direccion       =     $request->direccion;
      $personas->cargo_id        =     $request->cargo;
      $personas->departamento_id =     $request->departamento;
      $personas->save();

      return redirect()->route('personas.index');

    }

    public function destroy($id)
    {
        $personas = Persona::find($id);
        $personas->delete();
        return redirect()->route('personas.index');
    }
}
