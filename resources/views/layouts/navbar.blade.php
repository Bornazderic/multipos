<head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
    
    body{
    font-family: Arial, Helvetica, sans-serif;
    font-size: 15px;
    line-height: 1,5;
    padding: 0;
    margin: 0;
    background-color: #f4f4f4;
}

.container{
    width:80%;
    margin:auto;
    overflow: hidden;

}
header{
    background-color: #35424a;
    color:#ffffff;
    padding-top: 30px;
    min-height: 70px;
    border-bottom: #e8491d 3px solid;

}
header a{
    color: #ffffff;
    text-decoration: none;
    text-transform: uppercase;
    font-size: 16px;
}
header ul{
    margin: 0;
    padding: 0;
}
header li {
    float: left;
    display: inline;
    padding : 0 20px 0 20px;
}
header #branding {
    float: left;
}
header #branding h1{
    margin: 0;
}
header nav{
    float: right;
    margin-top: 10px;
}
header .highlight , header .current a {
    color: #e8491d;
    font-weight: bold;
}

</style>
</head>

<header>
        <div class="container">
            <div id ="branding">
                <h1><span class="highlight">Multi</span>pos</h1>
            </div>
            <nav>
                    <ul>
                        @if(Auth::check())
                        <li><a class="current"href="/">Home</a></li>
                        
                        <li><a href="{{route('admin')}}">Admin</a></li>
                        <li>Dobrodošli {{Auth::user()->prezime.','.Auth::user()->ime}}</li>
                        <li><form action="{{route('logouta')}}"method="POST"id="logout-form">
                        @csrf
                        <a href="#" onclick="document.getElementById('logout-form').submit()">Logout</a>
                        </form></li>
                        @else
                        <li><a href="{{route('prikaziLogina')}}">Prijavi se</a></li>
                        <li><a href="{{route('prikaziRegistraciju')}}">Registriraj se</a></li>
                        @endif
                    </ul>
                </nav>
           
        </div>
    </header>