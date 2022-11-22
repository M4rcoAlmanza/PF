<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use App\Models\Archivo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage; 

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $registros = Usuario::all();
        return view('usuarioIndex', compact('registros'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('usuarioCreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'nacimiento' => 'required|date',
            'correo' => 'required',
            'telefono' => 'required',
        ]);

        $usuario = Usuario::create($request->all());

        if($request->file('archivo')->isValid()){
            $ubicacion = $request->archivo->store('public');
            $archivo = new Archivo();
            $archivo->ubicacion = $ubicacion;
            $archivo->nombre_original = $request->archivo->getClientOriginalName();
            $usuario->archivos()->save($archivo); 
        }

        
        return redirect('/terapia');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function show(Usuario $usuario)
    {
        return view('usuarioShow', compact('usuario'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function edit(Usuario $usuario)
    {
        return view('usuarioEdit', compact('usuario'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Usuario $usuario)
    {
        $request->validate([
            'nombre' => 'required',
            'nacimiento' => 'required|date',
            'correo' => 'required',
            'telefono' => 'required',
        ]);

        Usuario::where('id', $usuario->id)->update($request->except('_token', '_method'));
        return redirect('/usuario');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function destroy(Usuario $usuario)
    {
        $usuario->delete();
        return redirect('/usuario');
    }

    public function downloadPhoto(Archivo $archivo)
    {
        return Storage::download($archivo->ubicacion);
    }
}
