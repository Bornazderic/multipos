@extends('layouts.app')
@extends('layouts.navbar')

@section('content')
<div class="row align-items-start">
<div class="content">
    <table class="table">
    <thead>
        <tr>
            <th>Slika</th>
            <th>Naziv</th>
            <th>JMJ</th>
            <th>JMJ2</th>
            <th>Cijena</th>
            <th>Cijena2</th>
            <th>Distributer</th>
            
        </tr>
    </thead>
            @foreach ($artikl as $art)
            <tbody>
                <tr>
                    <td><img style ="width:100px"src="/storage/cover_images/{{$art->slika}}"></td>
                    <td><a href="{{route('artikli.show', $art->sifra_art)}}">{{$art->naziv}}</a></td>
                    <td>{{$art->jmj}}</td>
                    <td>{{$art->jmj2}} kom</td>
                    <td>{{$art->cijena1}}</td>
                    <td>{{$art->cijena2}}</td>
                    <td>{{$art->distributer->naziv}}</td>
                    
                </tr>
            </tbody>  
            @endforeach
        </table>  
           
        
   
</div>
</div>
@endsection