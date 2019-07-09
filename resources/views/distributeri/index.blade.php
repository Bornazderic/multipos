
@extends('layouts.app')
@extends('layouts.navbar')

@section('content')


       
<div class="container">
    <h1>Distributeri</h1>
        
        
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#distributeri"id="distributeradd">
            Dodaj novog distributera
          </button>
          <br>
          @if(empty($distributeri))
          <p>Nije pronadjen Niti jedan Distributer</p>
          @else
    @foreach($distributeri as $distributer)
    <div class="card" style="width: 48rem;">
        <div class="card-body">
          <h5 class="card-title">{{$distributer->naziv}}</h5>
          <h6 class="card-subtitle mb-2 text-muted">{{$distributer->adresa}} , {{$distributer->adresa_kb}}</h6>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="{{route('prikaz', $distributer->id_dp)}}" class="btn btn-primary">Pogledaj vise</a>
         
          <button type="button"id="distributerdel" class="btn btn-danger"data-toggle="modal" data-target="#dell">Brisanje</button>
          <a href="{{route('distributer.edit',$distributer->id_dp)}}" type="button" class="btn btn-info">Izmjena</a>
        </div>
      </div>
      @endforeach
      @endif
    
</div>



@include('distributeri.modal')

@endsection
  




<script>
  var modalAdd = document.getElementById('distributeri');

  var btnAdd = document.getElementById('distributeradd');

  btnAdd.onclick = function(){
      modalAdd.style.display = "block";
  }
</script>

<script>
  var modalAdd = document.getElementById('dell');

  var btnAdd = document.getElementById('distributerdel');

  btnAdd.onclick = function(){
      modalAdd.style.display = "block";
  }
</script>


