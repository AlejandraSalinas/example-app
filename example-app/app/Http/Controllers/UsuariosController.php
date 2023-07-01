<?php

namespace App\Http\Controllers;

use Illuminate\Http\Controller as BaseController;
use Illuminate\Support\Facades\DB;

class Controller extends Controller
{
    public function index(){
        $sql=DB::select(" select * from personas ");
        return view("welcome")->with("sql", $sql);
    }
}
namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    private $users = User::class;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['users']  = User::orderBy('id', 'asc')->Paginate(10);
        return view('Users.index', $data);
    }

    public function create()
    {
        return view('Users.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'primer_nombre'     => 'required|max:50',
            'segundo_nombre'    => 'required|max:50',
            'primer_apellido'   => 'required|max:50',
            'segundo_apellido'  => 'required|max:50',
            'email'             => 'required|unique:users|max:50',
            'password'          => 'required',
        ]);

        $users = new User;
        $users->primer_nombre       = $request->primer_nombre;
        $users->segundo_nombre      = $request->segundo_nombre;
        $users->primer_apellido     = $request->primer_apellido;
        $users->segundo_apellido    = $request->segundo_apellido;
        $users->email               = $request->email;
        $users->password            = Hash::make($request->password);
        $users->save();

        return redirect()->route('usuarios.index')->with('success', 'User has been created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       //
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
            'primer_nombre'     => 'required|max:50',
            'segundo_nombre'    => 'required|max:50',
            'primer_apellido'   => 'required|max:50',
            'segundo_apellido'  => 'required|max:50',
            
           
        ]);

        $users = User::find($id);
        $users->primer_nombre       = $request->primer_nombre;
        $users->segundo_nombre      = $request->segundo_nombre;
        $users->primer_apellido     = $request->primer_apellido;
        $users->segundo_apellido    = $request->segundo_apellido;
         
        $users->save();
        return redirect()->route('usuarios.index')->with('success', 'Company Has Been updated successfully');
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
        return redirect()->route('usuarios.index')->with('success', 'elimninado con exito');
    }
}