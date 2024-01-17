<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class LoginController extends Controller
{
    public function create(){
        return view('login.create');
    }

    public function store(){
       $cleanData=request()->validate([
        'email'=>['required','email',Rule::exists('users','email')],
        'password'=>['required']
       ],[
        'email.exists'=>"Your email doesn't exist"
       ]);
       
    //$user=User::where('email',$cleanData['email'])->first();
    //Hash::check($cleanData['password'],$user->password)
       
        if(auth()->attempt($cleanData)){
            return redirect('/')->with('message','Welcome Back '.auth()->user()->name);
        }else{
            return back()->withErrors([
                    'password' => 'Your password something went wrong'
            ]);
        }
       
    }
}