<?php

namespace App\Http\Controllers;

use App\Models\Ciudad;
use Illuminate\Http\Request;

class CiudadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mostrarciudades = Ciudad::paginate('30');
        return view('Ciudades.index', compact('mostrarciudades'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('Ciudades.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ciudad = Ciudad::create([
            'CiudadNombre' => $request->nombreciudad,
            'PaisCodigo' => $request->codigopais,
            'CiudadDistrito' => $request->distritociudad,
            'CiudadPoblacion' => $request->poblacionciudad,
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ciudad  $ciudad
     * @return \Illuminate\Http\Response
     */
    public function show(Ciudad $ciudad)
    {
        $verciudad = $ciudad;

        return view('Ciudades.show', compact('verciudad'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ciudad  $ciudad
     * @return \Illuminate\Http\Response
     */
    public function edit(Ciudad $ciudad)
    {
        $editCiuda = $ciudad;
        return view('Ciudades.edit', compact('editCiudad'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ciudad  $ciudad
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ciudad $ciudad)
    {

        Ciudad::where('id', $ciudad->id)
            ->update([
                'CiudadNombre' => $request->nombreciudad,
                'PaisCodigo' => $request->codigopais,
                'CiudadDistrito' => $request->distritociudad,
                'CiudadPoblacion' => $request->poblacionciudad,
            ]);

        redirect()->route('verciudad', $ciudad);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ciudad  $ciudad
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ciudad $ciudad)
    {
        $ciudad->delete();

        return redirect()->route('verciudades');
    }
}
