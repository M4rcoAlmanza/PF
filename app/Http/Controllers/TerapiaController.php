<?php
namespace App\Http\Controllers;

use App\Models\Terapia;
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
        $registros = Terapia::all();
        return view('terapiaIndex', compact('registros'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('terapiaCreate');
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
            'nombre' => 'required|max:50|min:10',
            'correo'=> 'required|email',
            'terapeuta' => 'required|max:50|min:10',
            'fecha' => 'required|date',
            'costo' => 'required',
        ]);
        Terapia::create($request->all());
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
        return view('terapiaEdit', compact('terapium'));
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
            'nombre' => 'required|max:50|min:10',
            'correo'=> 'required|email',
            'terapeuta' => 'required|max:50|min:10',
            'fecha' => 'required|date',
            'costo' => 'required',
        ]);

        // $terapia->nombre= $request->nombre;
        // $terapia->save();
        // Terapia::where('id', $terapium->id)->update($request->all());
        Terapia::where('id', $terapium->id)->update($request->except('_token', '_method'));
        //Terapia::where('id', $terapium->id)->update($request);
        // Terapia::where('id', $terapium->id)->update(request('nombre', 'correo', 'terapeuta', 'fecha', 'costo'));

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
        $terapium->delete();
        return redirect('/terapia');
    }
}
