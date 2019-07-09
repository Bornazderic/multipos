@extends('layouts.app')
@extends('layouts.navbar')

@section('content')
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                <th>Slika</th>
                <th>Naziv</th>
                <th>Cijena</th>
                <th>Pakiranje</th>
                <th>Distributer</th>
                <th>Akcije</th>
                </tr>
            </thead>
            <tbody>
               
                    <tr>
                        <td><img style="width:150px"src={{"/storage/cover_images/$artikl->slika"}} alt=""></td>
                        <td>{{$artikl->naziv}}</td>
                        <td>{{$artikl->cijena1}}</td>
                        <td>{{$artikl->jmj2}} , {{$artikl->jmj}}</td>
                        
                        <td><a href="{{route('prikaz',$artikl->dp)}}">{{$artikl->distributer->naziv}}</a></td>
                        <td><a href="{{route('artikli.edit',$artikl->sifra_art)}}"class="btn btn-info">Izmjeni</a>
                            
                            <form action="{{route('artikli.destroy',$artikl->sifra_art)}}">
                                @csrf
                                @method('PATCH')
                            <button type="submit"class="btn btn-danger">Izbrisi</button>
                            </form>
                        
                        </td>
                    </tr>
                   
            </tbody>
        </table>
    </div>
    @endsection