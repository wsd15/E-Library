@extends('layout.app')

@section('content')
    <html>

    <body style="min-height: 100vh">

        
        <div class="container">
{{-- 
            <form action="/hasil-cari" onsubmit="location.href='/hasil-cari'">
                Enter name: <input type="text" name="search">
                <input type="submit" value="Submit">
              </form> --}}
              <div class="text-center mt-5 mb-4">
                <img class="display_image" src="{{ asset('images/logo.png') }}" >
              </div>
              @if (Auth::guest())
                <form class="" action="/hasil-cari" >
                    <div class="row align-items-center">
                        <div class="col-11 ">
                            <input class="form-control mr-sm-2" name="search" type="search" placeholder="Search Judul Buku/Penerbit/Penulis/ISBN/Lokasi Perpustakaan (Format ISBN 1-1234-1234-2)" aria-label="Search">
                        </div>
                        <div class="col-1">
                            <button class="btn btn-outline-secondary mr-sm-2" type="submit">Search</button>
                        </div>
                    </div>
                </form>  
                
               @else 
                    @if (Auth::user()->hasRole('user'))
                    <form class="" action="/hasil-cari" >
                        <div class="row align-items-center">
                            <div class="col-11 ">
                                <input class="form-control mr-sm-2" name="search" type="search" placeholder="Search Judul Buku/Penerbit/Penulis/ISBN/Lokasi Perpustakaan (Format ISBN 1-1234-1234-2)" aria-label="Search">
                            </div>
                            <div class="col-1">
                                <button class="btn btn-outline-secondary mr-sm-2" type="submit">Search</button>
                            </div>
                        </div>
                    </form>  

                    
                    @elseif (Auth::user()->hasRole('pustakawan'))
                    <form class="" action="/hasil-cari" >
                        <div class="row align-items-center">
                            <div class="col-11 ">
                                <input class="form-control mr-sm-2" name="search" type="search" placeholder="Search Judul Buku/Penerbit/Penulis/ISBN/Lokasi Perpustakaan (Format ISBN 1-1234-1234-2)" aria-label="Search">
                            </div>
                            <div class="col-1">
                                <button class="btn btn-outline-secondary mr-sm-2" type="submit">Search</button>
                            </div>
                        </div>
                    </form>  

                    

                    @elseif (Auth::user()->hasRole('admin'))
                  
                    @endif

               @endif 

                  
    </body>

    </html>
@endsection
