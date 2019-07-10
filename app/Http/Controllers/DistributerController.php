<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Distributer;
use App\User;
use App\Artikli;
use DB;
use Auth;

use Illuminate\Support\Facades\Input;

class DistributerController extends Controller
{
   public function index()
   {
    $distributeri = Distributer::orderBy('naziv')->get();
    if(!empty($distributeri)){
    return view('distributeri.index', [
        'distributeri'=>$distributeri
    ]);
    } else {
        return view('distributeri.index');
    }
   }

   public function kreiraj()
   {
       return view('distributeri.create');
   }
   public function prikaz($id)
   {
    $distributer = Distributer::findOrFail($id);
    $artikl = DB::table('distributeri')
    ->leftJoin('distributeri_artikli' , 'id_dp','=','dp')->get();
    

    
    return view ('distributeri.show' , [
        'distributer'=>$distributer,
        'artikl'=>$artikl
        
    ]);

    
    
    
   }

   public function store(Request $request)
   {
    
    $this->validate($request , [
        'naziv'=>'required|max:191',
        'adresa'=>'required|max:191',
        'adresa_kb'=>'required|numeric|digits:2',
        'ptt'=>'required|numeric|digits:5',
        'oib'=>'required|unique:distributeri|digits:11',
        'tel'=>'digits_between:5,15|nullable',
        'mobitel'=>'digits_between:5,15|nullable',
        'fax'=>'digits_between:5,15|nullable',
        'email'=>'required|unique:distributeri|email'
    ]);

      $distributer = new Distributer;

      $distributer->naziv = $request->input('naziv');
      $distributer->user_id =$request->input('user_id');
      $distributer->adresa = $request->input('adresa');
      $distributer->adresa_kb = $request->input('adresa_kb');
      $distributer->ptt = $request->input('ptt');
      $distributer->oib = $request->input('oib');
      $distributer->tel = $request->input('tel');
      $distributer->mobitel = $request->input('mobitel');
      $distributer->fax = $request->input('fax');
      $distributer->email = $request->input('email');
      $distributer->save();

        return redirect()->back()->with(['success'=>'Uspjesno dodan distributer'
        ]);
            
   }
   public function brisanje($id)
   {
    
    $distributer = Distributer::findOrFail($id);
    
    $distributer->destroy($id);


    
    return redirect()->back();
   }
   public function edit($id)
{
    $distributer = Distributer::findOrFail($id);
    
    return view('distributeri.edit', [
        'distributer'=>$distributer
    ]);
}
    public function izmjeni(Request $request , $id)
    {
       $distributer =Distributer::findOrFail($id);
       $distributer->update($request->all());

       return redirect()->back();
    }
    public function artikli($id)
    {
        $distributer = Artikli::findOrFail($id)->where('dp'.'='.'id_dp')->get();
    }
}
