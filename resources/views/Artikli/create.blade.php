@extends('layouts.app')
@extends('layouts.navbar')


@section('content')
<div class="container">
<form action="{{route('artikli.store')}}"method="post"enctype="multipart/form-data">
    @csrf
    
    
  

    <label for="naziv">Naziv</label>
    <input type="text"name="naziv"id="naziv"class="form-control"value="{{old('naziv')}}">

    <label for="eancode_art">EanCode Artikla</label>
    <input type="text"name="eancode_art"id="eancode_art"class="form-control"value="{{old('eancode_art')}}">
    
    <div class="form-group">
            <div class="input-group-prepend">
              <label class="jmj" for="jmj">Options</label>
            </div>
            <select class="jmj" id="jmj"class="form-control"name="jmj">
              <option value="kom">Komad</option>
              <option value="lit">Litar</option>
              <option value="kg">Kilogram</option>
            </select>
          </div>
            <div class="form-group">
                <div class="input-group-prepend">
                  <label class="jmj2" for="jmj2">Options</label>
                </div>
                <select class="jmj2" id="jmj2"class="form-control"name="jmj2">
                  <option selected="1">1</option>
                  <option value="2">2</option>
                  <option value="4">4</option>
                  <option value="8">8</option>
                  <option value="12">12</option>
                  <option value="24">24</option>
                </select>
              </div>
    <div class="form-group">
              <div class="input-group-prepend">
                    <label class="dp" for="dp">Distributer</label>
                  </div>
                  <select class="dp" id="dp"name="dp"class="form-control">
                    @foreach($distributer as $distribut)
                    <option value="{{$distribut->id_dp}}">{{$distribut->naziv}}</option>
                    @endforeach
                  </select>
                </div>
        

              <label for="cijena1">Cijena</label>
              <input type="text"name="cijena1"id="cijena1"class="form-control"value="{{old('cijena1')}}">
          
              <label for="cijena2">cijena2 </label>
              <input type="text"name="cijena2"id="cijena2"class="form-control"value="{{old('cijena2')}}">

              <label for="pdv">PDV</label>
              <input type="text"name="pdv"id="pdv"class="form-control"value="{{old('pdv')}}">
              <br>
              <div class="form-control">
                      
             {{Form::file('slika')}}
            </div>
            <br>
              <button type="submit"class="btn btn-primary">Dodaj</button>


</form>
</div>
@endsection