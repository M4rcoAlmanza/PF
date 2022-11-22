<?php
namespace App\Http\Controllers;

use App\Models\Terapia;
use App\Models\Usuario;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;

class TerapiaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $registros = Auth::user()->terapias;
        $registros = Terapia::with('user', 'usuarios')->get();
        return view('terapiaIndex', compact('registros'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $usuarios = Usuario::all();
        return view('terapiaCreate', compact('usuarios'));
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
            'fecha' => 'required|date',
            'costo' => 'required',
        ]);
        $request->merge(['user_id' => Auth::id()]);

        $terapia = Terapia::create($request->all());
        $terapia->usuarios()->attach($request->usuario_id);
        return redirect('/terapia');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Terapia  $terapia
     * @return \Illuminate\Http\Response
     */
    public function show(Terapia $terapium)
    {
        // $terapias = Terapia::find($terapia->id);
        // $terapias = Terapia::find($terapia);
        // return view('terapiaShow', ['terapia'=>$terapias]);
        return view('terapiaShow', compact('terapium'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Terapia  $terapia
     * @return \Illuminate\Http\Response
     */
    public function edit(Terapia $terapium)
    {
        Gate::authorize('editar-terapia', $terapium);
        $usuarios = Usuario::all();
        return view('terapiaEdit', compact('terapium', 'usuarios'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Terapia  $terapia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Terapia $terapium)
    {
        $request->validate([
            'fecha' => 'required|date',
            'costo' => 'required',
        ]);


        Terapia::where('id', $terapium->id)->update($request->except('_token', '_method', 'usuario_id'));
        $terapium->usuarios()->sync($request->usuario_id);

        return redirect('/terapia');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Terapia  $terapia
     * @return \Illuminate\Http\Response
     */
    public function destroy(Terapia $terapium)
    {
        $this->authorize('delete', $terapium);
        // $terapium->delete()->onDelete('cascade');
        $terapium->usuarios()->detach();
        $terapium->delete();
        return redirect('/terapia');
    }

    public function salir(){
        return Auth::logout();
    }
}
