<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class LogoutController extends Controller
{
    public function destroy(){
        auth()->logout();
        return redirect('/register')->with('message','GoodBye');
    }
}