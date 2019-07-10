@extends('layouts.app')
@extends('layouts.navbar')
@section('content') 
@if(session()->has('success'))
<div class="alert alert-success">
  {{session()->get('success')}}
</div>
@endif
<div class="header">
    <div class="container">
<h1>Dobrodošli na admin webpage</h1>
  
 
<div class="list-group">
    <a href="{{route('distributer')}}" class="list-group-item list-group-item-action">Distributeri</a>
    <a href="{{route('artikli.create')}}" class="list-group-item list-group-item-action">Dodaj artikl</a>
    <a href="#" class="list-group-item list-group-item-action">Korisnici</a>
    <a href="#" class="list-group-item list-group-item-action disabled" tabindex="-1" aria-disabled="true">Vestibulum at eros</a>
  </div>
</div>
</div>
  @endsection