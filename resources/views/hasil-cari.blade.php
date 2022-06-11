@extends('layout.app')

@section('content')
    <html>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <body style="">
        
            
        
        <div class="container">
            <form class="form-inline mt-5">
                <input class="form-control mr-sm-2" name="search" type="search" placeholder="Search Judul Buku/Penerbit/Penulis/ISBN/Lokasi Perpustakaan (Format ISBN 1-1234-1234-2)" aria-label="Search">
                <button class="btn btn-outline-secondary my-2 my-sm-0" type="submit">Search</button>
              </form>
            
            <div class="row mt-5 row-cols-3">
                @foreach ($data as $buku)
                <div class="col mt-5 d-flex align-items-stretch justify-content-center">
                    <div class="card" style="width: 17rem;">
                        <img class="mt-4" src="{{asset('/images/buku/'.$buku->file_path)}}"
                            style="width:12vw;height: 16vw;align-self: center" class="card-img-top" alt="...">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title text-center">{{ $buku->nama_buku }}</h5>
                            <p class="card-text text-center">{{ $buku->penulis }}</p>
                            <p class="card-text text-center mb-4">Jakarta Utara</p>
                            <div class="d-flex justify-content-center" style="margin-top: auto">
                                <a href="{{url('/detail-buku/'.$buku->id)}}">
                                    <x-button class=" align-self-end" id="button1" style="align-self: center;">
                                        {{ __('Detail Buku') }}
                                    </x-button>
                                    <style>
                                        #button1 {   
                                            font-size: 3vw;
                                            
                                        }
                                    @media (min-width: 720px) { /* or 301 if you want really the same as previously.  */
                                        #button1 {   
                                            font-size: 1.4vw;
                                            
                                        }
                                    }
                                    </style>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
            {{-- buat row 2-3-4-5-6 --}}
            {{ $data->links() }}
        </div>



    </body>

    </html>
@endsection
