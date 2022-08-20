<?php

namespace App\Http\Controllers;

use App\Models\Pais;
use Illuminate\Http\Request;

class PaisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mostrarpaises = Pais::all();
        return view('Paises.index', compact('mostrarpaises'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Paises.create');
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
     * @param  \App\Models\Pais  $pais
     * @return \Illuminate\Http\Response
     */
    public function show(Pais $pais)
    {
        if ($pais->PaisCapital != null) {

            $Verpais = Pais::join("Ciudad", "Pais.PaisCapital", "=", "Ciudad.id")
                ->where('Pais.id', '=', $pais->id)
                ->get();
            //dd($Verpais[0]);
            return view('Paises.show', compact('Verpais'));
        } else {
            $consultaPais = Pais::find($pais->id);
            $Verpais = [$consultaPais];
            //dd($Verpais);
            return view('Paises.show', compact('Verpais'));
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pais  $pais
     * @return \Illuminate\Http\Response
     */
    public function edit(Pais $pais)
    {
        $editPais = $pais;
        return view('Paises.edit', compact('editPais'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pais  $pais
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pais $pais)


    {


        $pais->PaisNombre                  = $request->nombdrepais;
        $pais->PaisCodigo                  = $request->codigopais;
        $pais->PaisCapital                 = $request->capitalpais;
        $pais->PaisCodigo2                 = $request->codigo2pais;
        $pais->PaisContinente              = $request->continentepais;
        $pais->PaisRegion                  = $request->regionpais;
        $pais->PaisArea                    = $request->areapais;
        $pais->PaisIndependencia           = $request->independenciapais;
        $pais->PaisPoblacion               = $request->poblacionpais;
        $pais->PaisExpectativaDeVida       = $request->expectativadevidapais;
        $pais->PaisProductoInternoBruto    = $request->productointernobrutopais;
        $pais->PaisNombreLocal             = $request->nombrelocalpais;
        $pais->PaisGobierno                = $request->gobiernopais;
        $pais->PaisJefeDeEstado            = $request->jefedeestadopais;

        $pais->isDirty();

        $pais->save();

        return redirect()->route('verpais', $pais);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pais  $pais
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pais $pais)
    {
    }
}
