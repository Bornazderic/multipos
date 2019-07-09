@extends('layouts.app')

@section('content')

<div class="container">
<h1>{{$distributer->naziv}}</h1>

<h5>Adresa</h5>
<p>{{$distributer->adresa}} , {{$distributer->adresa_kb}}</p>


<h5>Postanski Broj</h5>
<p>{{$distributer->ptt}}</p>

<h5>OIB</h5>
<P>{{$distributer->oib}}</P>

<h5>Telefon</h5>
<p>{{$distributer->tel}}</p>

<h5>Mobitel</h5>
<p>{{$distributer->mobitel}}</p>

<h5>Fax</h5>
<p>{{$distributer->fax}}</p>

<h5>Email</h5>
<p>{{$distributer->email}}</p>
</div>
<div class="container">
       @if(!empty($artikl))
    @foreach($artikl as $art)
       
    <div class="card bg-light mb-3" style="max-width: 18rem;">
       
               
            
        <div class="card-header"><a href="{{route('artikli.show',$art->sifra_art)}}">{{$art->naziv}}</a>
        </div>
        <div class="card-body">
          <h5 class="card-title">{{$art->cijena1}}</h5>
          <p class="card-text">Opis proizvoda</p>
        </div>
        @endforeach
        @else
        <h5>Nije pronadjen niti jedan artikl</h5>
        
        
        @endif
       
       
    </div>
</div>

@endsection