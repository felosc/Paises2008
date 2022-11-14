<?php

namespace App\Http\Controllers;

use App\Models\User as ModelsUser;
use Illuminate\Http\Request;

class User extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mostrarusuarios = ModelsUser::paginate('10');
        return view('users.index', compact('mostrarusuarios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
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
    public function show(ModelsUser $usuario)
    {
        $verusuario = $usuario;
        return view('users.show', compact('verusuario'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(ModelsUser $usuario)
    {
        $editUsuario = $usuario;
        return view('users.edit', compact('editUsuario'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ModelsUser $usuario)
    {

        ModelsUser::where('id', $usuario->id)
            ->update([
                'name' => $request->name,
                'email' => $request->email,
            ]);

        return redirect()->route('verusuario', $usuario);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(ModelsUser $usuario)
    {
        $usuario->delete();

        return redirect()->route('verusuarios');
    }
}
