<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    
    public function index()
    {
        return view('index');
    }
    
    public function registracija(Request $request){

        $user = User::create($request->all());
            return view('admin.index');
        
    }
}
