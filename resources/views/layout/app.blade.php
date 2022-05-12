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
    <link rel="stylesheet" type="text/js" href="/script.js">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Ovo&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/style.css">
    <link href="https://cdn.lineicons.com/2.0/LineIcons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" />

</head>

<body>
    <div id="app">

        @if (Auth::guest())
            <div id="navbar" class="">
                <nav id="main-menu">
                    <ul>
                        <li><a href="#"></a></li>
                        <li><a href="#"></a></li>
                        <li><a href="#"></a></li>
                        <li><a href="/login">Login</a></li>
                        <li><a href="/register">Register</a></li>
                    </ul>
                </nav>
            </div>
        @else
            @if (Auth::user()->hasRole('user'))
                <div id="navbar" class="">
                    <nav id="main-menu">
                        <ul>
                            <li><a href="#"></a></li>
                            <li><a href="#"></a></li>
                            <li><a href="#"></a></li>
                            <li><a href="/profile">{{ Auth::user()->name }}</a></li>
                            <li><a href="/logout">Logout</a></li>
                        </ul>
                    </nav>
                </div>
            @elseif (Auth::user()->hasRole('pustakawan'))
                <div id="navbar" class="">
                    <nav id="main-menu">
                        <ul>
                            <li><a href="#"></a></li>
                            <li><a href="#"></a></li>
                            <li><a href="#"></a></li>
                            <li><a href="/profile">{{ Auth::user()->name }}</a></li>
                            <li><a href="/logout">Logout</a></li>
                        </ul>
                    </nav>
                </div>
            @endif

        @endif





        <div class="content">
            @yield('content')
        </div>

        <script>
            // When the user scrolls the page, execute myFunction
            window.onscroll = function() {
                myFunction()
            };

            // Get the navbar
            var navbar = document.getElementById("navbar");

            // Get the offset position of the navbar
            var sticky = navbar.offsetTop;

            // Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
            function myFunction() {
                if (window.pageYOffset >= sticky) {
                    navbar.classList.add("sticky")
                } else {
                    navbar.classList.remove("sticky");
                }
            }
        </script>

        <div class="sidebar">
            <input type="checkbox" id="hamburger-input" class="burger-shower" />
            <label id="hamburger-menu" for="hamburger-input">
                <nav id="sidebar-menu">
                    {{-- <h3><a href="{{ url('') }}">E-Library</a></h3> --}}
                    <a href="{{ url('') }}"> <img src="images/logo.png" alt=""
                            style="margin-right: 5%; margin-top: 10%"> </a>
                    {{-- <ul>
                        <li class="border-bottom border-dark"><a href="{{ url('profile') }}"><img class="display_image"
                                    src="images/user.svg" alt=""
                                    style="height: 40px; width: 40px; margin-right: 5%; margin-bottom: 10%; margin-top: 10%">Profile
                            </a></li>
                        <li class="border-bottom border-dark"><a href="#"><img class="display_image"
                                    src="images/book-open.svg" alt=""
                                    style="height: 40px; width: 40px; margin-right: 5%; margin-bottom: 10%; margin-top: 10%">Buku
                                Pinjaman</a></li>
                        <li class="border-bottom border-dark"><a href="#"><img class="display_image"
                                    src="images/school.svg" alt=""
                                    style="height: 40px; width: 40px; margin-right: 5%; margin-bottom: 10%; margin-top: 10%">Profile
                                Perpustakaan</a></li>
                        <li class="border-bottom border-dark"><a href="#"><img class="display_image"
                                    src="images/list-check.svg" alt=""
                                    style="height: 40px; width: 40px; margin-right: 5%; margin-bottom: 10%; margin-top: 10%">Buku
                                Terpinjam</a></li>
                        <li><a href="#"><img class="display_image" src="images/add.svg" alt=""
                                    style="height: 40px; width: 40px; margin-right: 5%; margin-bottom: 10%; margin-top: 10%">Buku
                                Perpustakaan</a></li>
                    </ul> --}}

                    @if (Auth::guest())
                    <ul>
                        <li class="border-bottom border-dark"><a href="{{ url('profile') }}"><img class="display_image"
                                    src="images/user.svg" alt=""
                                    style="height: 40px; width: 40px; margin-right: 5%; margin-bottom: 10%; margin-top: 10%">Profile
                            </a></li>
                        <li class="border-bottom border-dark"><a href="#"><img class="display_image"
                                    src="images/book-open.svg" alt=""
                                    style="height: 40px; width: 40px; margin-right: 5%; margin-bottom: 10%; margin-top: 10%">Buku
                                Pinjaman</a></li>
                        <li class="border-bottom border-dark"><a href="#"><img class="display_image"
                                    src="images/school.svg" alt=""
                                    style="height: 40px; width: 40px; margin-right: 5%; margin-bottom: 10%; margin-top: 10%">Profile
                                Perpustakaan</a></li>
                        <li class="border-bottom border-dark"><a href="#"><img class="display_image"
                                    src="images/list-check.svg" alt=""
                                    style="height: 40px; width: 40px; margin-right: 5%; margin-bottom: 10%; margin-top: 10%">Buku
                                Terpinjam</a></li>
                        <li><a href="#"><img class="display_image" src="images/add.svg" alt=""
                                    style="height: 40px; width: 40px; margin-right: 5%; margin-bottom: 10%; margin-top: 10%">Buku
                                Perpustakaan Guest</a></li>
                    </ul>
                    @else
                        @if (Auth::user()->hasRole('user'))
                        <ul>
                            <li class="border-bottom border-dark"><a href="{{ url('profile') }}"><img class="display_image"
                                        src="images/user.svg" alt=""
                                        style="height: 40px; width: 40px; margin-right: 5%; margin-bottom: 10%; margin-top: 10%">Profile
                                </a></li>
                            <li class="border-bottom border-dark"><a href="#"><img class="display_image"
                                        src="images/book-open.svg" alt=""
                                        style="height: 40px; width: 40px; margin-right: 5%; margin-bottom: 10%; margin-top: 10%">Buku
                                    Pinjaman</a></li>
                            <li class="border-bottom border-dark"><a href="#"><img class="display_image"
                                        src="images/school.svg" alt=""
                                        style="height: 40px; width: 40px; margin-right: 5%; margin-bottom: 10%; margin-top: 10%">Profile
                                    Perpustakaan</a></li>
                            <li class="border-bottom border-dark"><a href="#"><img class="display_image"
                                        src="images/list-check.svg" alt=""
                                        style="height: 40px; width: 40px; margin-right: 5%; margin-bottom: 10%; margin-top: 10%">Buku
                                    Terpinjam</a></li>
                            <li><a href="#"><img class="display_image" src="images/add.svg" alt=""
                                        style="height: 40px; width: 40px; margin-right: 5%; margin-bottom: 10%; margin-top: 10%">Buku
                                    Perpustakaan User</a></li>
                        </ul>

                        @elseif (Auth::user()->hasRole('pustakawan'))
                        <ul>
                            <li class="border-bottom border-dark"><a href="{{ url('profile') }}"><img class="display_image"
                                        src="images/user.svg" alt=""
                                        style="height: 40px; width: 40px; margin-right: 5%; margin-bottom: 10%; margin-top: 10%">Profile
                                </a></li>
                            <li class="border-bottom border-dark"><a href="#"><img class="display_image"
                                        src="images/book-open.svg" alt=""
                                        style="height: 40px; width: 40px; margin-right: 5%; margin-bottom: 10%; margin-top: 10%">Buku
                                    Pinjaman</a></li>
                            <li class="border-bottom border-dark"><a href="#"><img class="display_image"
                                        src="images/school.svg" alt=""
                                        style="height: 40px; width: 40px; margin-right: 5%; margin-bottom: 10%; margin-top: 10%">Profile
                                    Perpustakaan</a></li>
                            <li class="border-bottom border-dark"><a href="#"><img class="display_image"
                                        src="images/list-check.svg" alt=""
                                        style="height: 40px; width: 40px; margin-right: 5%; margin-bottom: 10%; margin-top: 10%">Buku
                                    Terpinjam</a></li>
                            <li><a href="#"><img class="display_image" src="images/add.svg" alt=""
                                        style="height: 40px; width: 40px; margin-right: 5%; margin-bottom: 10%; margin-top: 10%">Buku
                                    Perpustakaan Pustakawan</a></li>
                        </ul>

                        @endif
                    @endif


                </nav>
            </label>
        </div>


    </div>


    <script type="text/javascript" src="mobile.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>
