<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function __construnt()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $users = User::select()->get();

        return view('users.index', [
            "users" => $users
        ]);
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(Request $request) 
    {
        $request->request->add(['username' => Str::slug($request->username)]);

        $this->validate($request, [
            'name' => 'required|max:30',
            'username' => 'required|unique:users|min:3|max:20',
            'email' => 'required|unique:users|email|max:60',
            'password' => 'required|confirmed|min:6'
        ]);

        User::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        return redirect()->route('users.index');
    }

    public function show(User $user)
    {
        return view('users.show', [
            'user' => $user
        ]);
    }

    public function update(Request $request, $user_id)
    {
        $this->validate($request, [
            'name' => 'required|max:30',
            'username' => ['required', 'unique:users,username,'. $user_id, 'min:3', 'max:20'],
            'email' => ['required', 'unique:users,email,'.$user_id, 'email', 'max:60']
        ]);
        
        $user = User::find($user_id);
        
        $user->name = $request->name;
        $user->username = $request->username;
        $user->email = $request->email;
        $user->save();

        return redirect()->route('users.index');
    }
}
