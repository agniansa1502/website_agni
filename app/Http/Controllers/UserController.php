<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class UserController extends Controller
{
    //
    public function index()
    {
        $users =User::all();

        return view('user.index', compact('users'));
    }

    public function create()
    {
        return view('user.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'Username' => 'required|unique:users',
            'Password' => 'required|min:6',
            'role' => 'required',
        ]);

        User::created([
            'name' => $request->name,
            'Username' => $request->Username,
            'password' => Hash::make($request->password),
            'role' => $request->role,
        ]);

        return redirect()->route('user.index')->with('success','Data User berhasil');

    }

    public function update(Request $request, user $User)
    {
        $request->validate([
            'name' => 'required',
            'username' =>'required',
            'role' => 'required',
        ]);

        $User->name=$request->name;
        $User->username=$request->username;
        $User->role=$request->role;

        if($request->password){
            $User->password=Hash::make($request->password);
        }

        $User->save();

        return redirect()->route('user.index')->with('success','Data user Berhasil diubah');
    }

    public function destroy(User $User){
        $User->delete();

        return Redirect()->route('user.index')->with('success','Data user berhasil dihapus');
    }
}
