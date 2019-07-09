@extends('layouts.app')
@extends('layouts.navbar')
@section('content')

    <div class="container">
        {!! Form::open(['route'=>['distributer.izmjeni', $distributer->id_dp]]) !!}
       
        @csrf
        @method('PATCH')
          <div class="modal-body">
         
        
        <label for="naziv">Naziv Distributera</label>
        <input type="text"id="naziv"name="naziv"class="form-control"value={{old('naziv')}}>

        <input type="hidden" name="user_id" id="user_id"value="1">

        <label for="adresa">Adresa Distributera</label>
        <input type="text"id="naziv"name="adresa"class="form-control">

        <label for="adresa_kb">Kucni Broj</label>
        <input type="number" name="adresa_kb" id="adresa_kb"class="form-control">

        <label for="ptt">Postanski Broj</label>
        <input type="text" name="ptt" id="ptt"class="form-control">

        <label for="oib">OIB</label>
        <input type="text" name="oib" id="oib"class="form-control">

        <label for="mobitel">Mobitel</label>
        <input type="text" name="mobitel" id="mobitel"class="form-control">

        <label for="tel">Telefon</label>
        <input type="text" name="tel" id="tel"class="form-control">
        
        <label for="fax">Fax</label>
        <input type="text" name="fax" id="fax"class="form-control">

        
        <label for="email">E-mail Adresa</label>
        <input type="email" name="email" id="email"class="form-control">

        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save changes</button>
         
        </div>
      {!! Form::close() !!}
        </div>
        </div>
      </div>
    </div>
    </div>
 
@endsection