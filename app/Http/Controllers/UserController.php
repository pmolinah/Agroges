<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Hash;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    use HasRoles;


    public function index()
    {
        $data = User::orderBy('id','DESC')->paginate(5);
        return view('User.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $roles=Role::all();
        return view('User.create',compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
     
        $user=User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
            'Tipo' => $request['Tipo'],
        ])->roles()->sync($request->rol);
        // return "ok";
        Session::flash('success', 'Usuario Guardado Correctamente');
        
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
       
       $user=User::where('id',$id)->get();
       $roles=Role::all();
       
        return view('User.edit',compact('user','roles'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        
        $act=User::where('id',$request->id)->update(['email'=>$request->email,'name'=>$request->name]);
        Session::flash('success', 'Usuario Actualizado Correctamente');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
