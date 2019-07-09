<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Distributer;
use App\User;
use App\Artikli;

class ArtiklController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $artikl = Artikli::orderBy('naziv')->get();

        return view('artikli.index', [
            'artikl'=>$artikl
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $artikl = Artikli::orderBy('naziv')->get();
        $distributer = Distributer::orderBy('naziv')->get();
        return view ('artikli.create', [
            'artikl'=>$artikl,
            'distributer'=>$distributer
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request , [
            
            'dp'=>'required',
            'naziv'=>'required|max:191',
            'eancode_art'=>'required|digits:13',
            'jmj'=>'required',
            'jmj2'=>'required',
            'cijena1'=>'numeric|integer',
            'cijena2'=>'numeric|integer',
            'pdv'=>'nullable|numeric',
            'slika'=>'image|nullable|max:1999',


        ]);

        if ($request->hasFile('slika')){

            $fileNameWithOriginalExt = $request->file('slika')->getClientOriginalName();

            $fileName = pathinfo($fileNameWithOriginalExt , PATHINFO_FILENAME) ;

            $extension = $request->file('slika')->getClientOriginalExtension();

            $fileNameToStore = $fileName.'_'.time().'.'.$extension ;

            $path = $request->file('slika')->storeAs('public/cover_images' , $fileNameToStore);

        } else {
            $fileNameToStore ='noimage.jpg';
        }


        $artikl = new Artikli;


        $artikl->sifra_art = $request->input('naziv');
        
        $artikl->dp = $request->input('dp');
        $artikl->naziv = $request->input('naziv');
        $artikl->eancode_art = $request->input('eancode_art');
        $artikl->jmj = $request->input('jmj');
        $artikl->jmj2 = $request->input('jmj2');
        $artikl->cijena1 = $request->input('cijena1');
        $artikl->cijena2 = $request->input('cijena2');
        $artikl->pdv = $request->input('pdv');
        $artikl->slika = $fileNameToStore;
        $artikl->save();

        return view('admin.index')->with(['success'=>'Artikl dodan uspjesno']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       
        $artikl = Artikli::findOrFail($id);

        

        $distributer = Distributer::orderBy('naziv')->get();
        
        return view('artikli.show', [
            'artikl'=>$artikl,
            'distributer'=>$distributer,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dartikl = Artikli::findOrFail($id);
        
        return view ('artikli.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
   
}
