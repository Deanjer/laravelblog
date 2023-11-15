<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\User;

class RegisterController extends Controller
{
    public function create()
    {
        return view('register.create');
    }

    public function userstore()
    {
        // var_dump(request()->all());
        $attributes = request()->validate([
            'name' => ['required', 'max:255'],
            'username' => ['required', 'max:255', 'unique:users,username'],
            'email' => ['required', 'max:255'],
            'password' => ['required','min:8','max:255'],
        ]);
   
        // $attributes['password'] = bcrypt($attributes['password']);
        $user = User::create($attributes);
        auth()->login($user);
        
        session()->flash('success','Acount created');
        return redirect('/');
    }   
}
