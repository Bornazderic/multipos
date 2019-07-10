<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;

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

         $request['password'] = bcrypt($request->password);
         
          $user = User::create($request->all());
              return view('index')->with(['success'=>'Uspjesno ste se registrirali']);
          
      }

      public function login(Request $request)
      {
          $this->validate($request,[
              'email'=>'required|max:191',
              'password'=>'required|max:191',

          ]);
          if(Auth::attempt(['email'=>$request->email,'password'=>$request->password]))
          {
          
            return view('index')->with(['success'=>'Uspjesno ste se logirali']);

          } else {

              return view('prikazlogina');
          }
      }
      public function prikaziLogin()
      {
          return view('auth.login');
      }
      public function prikaziRegistraciju()
      {
          return view('auth.register');
      }
      public function logouta()
      {
        Auth::logout();
        return view('index');
      }
}
