<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
public function register():View{
    return view('auth.register');
}

public function store(Request $request):RedirectResponse{
   $validatedFields=$request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed'
   ]);

   $validatedFields['password']=Hash::make($validatedFields['password']);

   $user=User::create($validatedFields);
    
   Auth::login($user);

   return redirect()->route('home')->with('success','Registration successfuly you can now login');

//    print_r($validatedFields)
//   die();


}

}
