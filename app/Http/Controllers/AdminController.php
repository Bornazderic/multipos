<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /*public function __construct()
    {
        $this->middleware('auth');
    }
*/
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('admin.index');
    }
    public function registracija(Request $request){

         $this->validate($request, [
             'ime'=>'required|max:191',
             'prezime'=>'required|max:191',
             'email'=>'required|unique:distributeri_users|email',
             'password'=>'required|min:8',
  
         ]);
         
          $user = User::create($request->all());
              return view('index')->with(['success'=>'Uspjesno ste se registrirali']);
          
      }
}
