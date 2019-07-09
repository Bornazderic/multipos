<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
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

    #showcase{
        min-height: 400px;
        background:url('../public/storage/cover_images/maček-katalog.png') no-repeat 0;
        text-align: center;
        color:#ffffff;
    }
    #showcase h1 {
        margin-top: 100px;
        font-size:55px;
        margin-bottom: 18px;
    }
    #showcase p {
        font-size: 20px;
    }
    #boxes {
        margin-top: 20px;
    }
    #boxes .box{
        float: left;
        width: 30%;
        padding: 10px;
        text-align: center;
    }
    footer{
        padding: 20px;
        margin-top: 20px;
        color: #ffffff;
        background-color:#35424a;
        text-align: center; 
        
    }
    footer p {
        font-size: 10px;
    }
    
    </style>
</head>
<body>
    <header>
        <div class="container">
            <div id ="branding">
                <h1><span class="highlight">Multi</span>pos</h1>
            </div>
            <nav>
                <ul>
                    <li><a class="current"href="/">Home</a></li>
                    <li><a href="">About</a></li>
                    <li><a href="{{route('admin')}}">Admin Dashboard</a></li>
                </ul>
            </nav>
           
        </div>
    </header>

    <section id="showcase">
        <div class="container">
            <h1>Katalog Artikala</h1>
            <p><a href="{{route('artikli.index')}}">Pogledajte sve artikle</a></p>
        </div>
    </section>

    <section id ="boxes">
        <div class="container">
            <div class="box">
                <h3><a href="{{route('distributer')}}">Distributeri</a></h3>
            </div>

            <div class="box">
                <h3>About</h3>
            </div>

            <div class="box">
                <h3>Akcije</h3>
            </div>
        </div>
    </section>

    <footer>
       
        <p>Multipos-group.eu Copyright &copy; 2019</p>
    </footer>
    
</body>
</html>