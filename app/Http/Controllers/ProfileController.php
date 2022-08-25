<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function __construct() 
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('profile.index');
    }

    public function store(Request $request)
    {
        if(!$request->update_password) {
            $request->request->add(['username' => Str::slug($request->username)]);
            $this->validate($request, [
                'name' => 'required|max:30',
                'username' => ['required', 'unique:users,username,'. auth()->user()->id, 'min:3', 'max:20', 'not_in:edit-profile'],
                'email' => ['required', 'unique:users,email,'.auth()->user()->id, 'email', 'max:60'],
            ]);
        }
        else {
            $this->validate($request, [
                'name' => 'required|max:30',
                'username' => ['required', 'unique:users,username,'. auth()->user()->id, 'min:3', 'max:20', 'not_in:edit-profile'],
                'email' => ['required', 'unique:users,email,'.auth()->user()->id, 'email', 'max:60'],
                'old_password' => 'required|min:6',
                'password' => 'required|confirmed|min:6'
            ]);
        }        

        if(!Hash::check($request->old_password, auth()->user()->password)){
            return back()->with("error", "El password anterior no coincide");
        }

        if(!$request->update_password) {
            $usuario = User::find(auth()->user()->id);        
            $usuario->name = $request->name;
            $usuario->username = $request->username;
            $usuario->email = $request->email;
            $usuario->save();
        }
        else {
            User::whereId(auth()->user()->id)->update([
                'name' => $request->name,
                'username' => $request->username,
                'email' => $request->email,
                'password' => Hash::make($request->password)
            ]);    
        }

        return back()->with("status", "Perfil actualizado");
    }
}
