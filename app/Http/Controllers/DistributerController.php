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
    
        $distributer = Distributer::create($request->all());
        // $user = Auth::user()->id->save();
         //return $distributer;
        

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
