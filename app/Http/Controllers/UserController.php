<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['users'] = User::orderBy('id', 'ASC')->paginate(5);

        return view('users.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.create');
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
            'nombres'      => 'required',
            'apellidos'    => 'required',
            'edad'         => 'required',
            'telefono'     => 'required',
        ]);

        $users = new User;
        $users->nombres        = $request->nombres;       
        $users->apellidos      = $request->apellidos;
        $users->edad           = $request->edad;
        $users->telefono       = $request->telefono;
        $users->save();

        return redirect()->route('usuarios.index')->with(
            'status',
            'El usuario se ha creado correctamente.'
        );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('usuarios.show', compact('usuarios'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        return view('users.edit', compact('user'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nombres'      => 'required',            
            'apellidos'    => 'required',
            'edad'         => 'required',
            'telefono'     => 'required',
        ]);
        $users = User::find($id);
        $users->nombres     = $request->nombres;
        $users->apellidos   = $request->apellidos;
        $users->edad        = $request->edad;
        $users->telefono    = $request->telefono;
        $users->address     = $request->address;
        $users->save();
        return redirect()->route('usuarios.index')->with('ÉXITO', 'Los datos del usuario se han actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $user = User::find($id);
        $user->delete($id);
        return redirect()->route('usuarios.index')->with('success', 'El usuario ha sido eliminado correctamente');
    }
}