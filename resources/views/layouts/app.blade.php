<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link rel="stylesheet"  type="text/js"  href="/script.js">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet"  type="text/css"  href="/style.css">
	<link href="https://cdn.lineicons.com/2.0/LineIcons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"/>

</head>
<body>
    <div id="app">
        
        <div id="navbar mt-5">
            <nav id="main-menu">
                <ul>
                  <li><a href="#">Home</a></li>
                  <li><a href="#">Store</a></li>
                  <li><a href="#">Blog</a></li>
                  <li><a href="#">About</a></li>
                  <li><a href="#">Contact</a></li>
                </ul>
              </nav>
        </div>

        <div class="sidebar">
            <input type="checkbox" id="hamburger-input" class="burger-shower" />
            <label id="hamburger-menu" for="hamburger-input">
              <nav id="sidebar-menu">
                <h3><a href="{{ url('home2') }}">E-Library</a></h3>
                <ul>
                  <li class="border-bottom border-dark"><a href="{{ url('home2') }}"><img src="images/user.svg" alt="" style="height: 60px; width: 60px; margin-right: 5%; margin-bottom: 5%">Profile </a></li>
                  <li class="border-bottom border-dark"><a href="#"><img src="images/book-open.svg" alt="" style="height: 60px; width: 60px; margin-right: 5%; margin-bottom: 5%; margin-top: 5%">Buku Pinjaman</a></li>
                  <li class="border-bottom border-dark"><a href="#"><img src="images/school.svg" alt="" style="height: 60px; width: 60px; margin-right: 5%; margin-bottom: 5%; margin-top: 5%">Profile Perpustakaan</a></li>
                  <li class="border-bottom border-dark"><a href="#"><img src="images/list-check.svg" alt="" style="height: 60px; width: 60px; margin-right: 5%; margin-bottom: 5%; margin-top: 5%">Buku Terpinjam</a></li>
                  <li><a href="#"><img src="images/add.svg" alt="" style="height: 60px; width: 60px; margin-right: 5%; margin-bottom: 5%; margin-top: 5%">Buku Perpustakaan</a></li>
                </ul>
              </nav>
            </label>
        </div>  
            
            <div class="overlay"></div>
       
    
        
       
       
            
            @yield('content')
       
    </div>


    <script type="text/javascript" src="mobile.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>