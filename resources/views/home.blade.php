@extends('layout.app')

@section('content')
    <html>

    <body style="">
        <div class="container">
{{-- 
            <form action="/hasil-cari" onsubmit="location.href='/hasil-cari'">
                Enter name: <input type="text" name="search">
                <input type="submit" value="Submit">
              </form> --}}

            <form class="form-inline" action="/hasil-cari" style="margin-top: 12vw">
                <input class="form-control mr-sm-2" name="search" type="search" placeholder="Search Judul Buku/Penerbit/Penulis/ISBN/Lokasi Perpustakaan (Format ISBN 1-1234-1234-2)" aria-label="Search">
                <button class="btn btn-outline-secondary my-2 my-sm-0" type="submit">Search</button>
            </form>
            
        </div>
        
    </body>

    </html>
@endsection
