@extends('layout.app')

@section('content')
    <html>

    <body style="">
        <div class="container">
            <div class="row mt-5">
                <div class="col-8">
                    <div>
                        <h1 class="text-center mb-3" style="font-size:48px; float: right;">Buku Perpustakaan</h1>
                    </div>
                </div>
                <div class="col-4">
                    <div class="mb-2">
                        <center>
                            <a href="/add-buku">
                            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor"
                                class="bi bi-plus-circle-fill" viewBox="0 0 16 16">
                                <path
                                    d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z" />
                            </svg>
                        </center>
                    </div>
                    <h1 class="mb-3 ml-3 text-center" style="font-size:28px">Tambah Buku</h1>
                </a>
                </div>
            </div>
        </div>


        <div class="container">

            
                
            @if($data->isEmpty())
            <div class="alert alert-warning text-center">
                <h1>Daftar buku anda kosong, silahkan tambahkan buku</h1>
            </div>    
            @endif 
                
                <div class="row mt-5 row-cols-3">
                    @foreach ($data as $buku)
                    <div class="col mt-5 d-flex align-items-stretch justify-content-center">
                        <div class="card mb-5" style="width: 17rem;">
                            <img class="mt-4" src="{{asset('/images/buku/'.$buku->file_path)}}"
                                style="width:12vw;height: 16vw;align-self: center" class="card-img-top" alt="...">
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title text-center">{{ $buku->nama_buku }}</h5>
                                <p class="card-text text-center">{{ $buku->penulis }}</p>
                                <p class="card-text text-center mb-4">Jakarta Utara</p>
                                <div class="d-flex justify-content-center" style="margin-top: auto">
                                    <a href="{{url('/edit-buku/'.$buku->id)}}">
                                        <x-button class=" align-self-end" style="align-self: center;">
                                            {{ __('Ubah') }}
                                        </x-button>
                                        <div class="mt-1 ml-2">
                                            <form method="post" class="delete_form" action="daftar-buku-perpustakaan/{{ $buku->id }}">
                                                {{csrf_field()}}
                                                <input type="hidden" name="_method" value="DELETE" />
                                                <button type="submit" class="">
                                                    <a href="/" class="link-dark">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="31" height="38" fill="currentColor"
                                                            class="bi bi-trash" viewBox="0 0 16 16">
                                                            <path
                                                                d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                                                            <path fill-rule="evenodd"
                                                                d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
                                                        </svg>
        
                                                    </a>
                                                </button>
                                            </form>
                                            
                                        </div>
                                        
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
                
                {{ $data->links() }}
                 
                
                
            
            

            {{-- <div class="row mt-5 row-cols-3">
                <div class="col mt-5 d-flex align-items-stretch justify-content-center">
                    <div class="card border-dark border-4" style="width: 17rem; border-radius: 10px">
                        <img class="mt-4" src="https://source.unsplash.com/random/150x200?person"
                            style="max-width: 65%;align-self: center" class="card-img-top" alt="...">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title text-center">Lord Of the Flies Lord Of the Flies</h5>
                            <p class="card-text text-center">William Golding</p>
                            <p class="card-text text-center mb-4">Jakarta Utara</p>
                            <div class="d-flex justify-content-center" style="margin-top: auto">
                                <x-button class=" align-self-end" style="align-self: center;">
                                    {{ __('Ubah') }}
                                </x-button>
                                <div class="mt-1 ml-2">
                                    <a href="/" class="link-dark">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="31" height="38" fill="currentColor"
                                            class="bi bi-trash" viewBox="0 0 16 16">
                                            <path
                                                d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                                            <path fill-rule="evenodd"
                                                d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col mt-5 d-flex align-items-stretch justify-content-center">
                    <div class="card border-dark border-4" style="width: 17rem; border-radius: 10px">
                        <img class="mt-4" src="https://source.unsplash.com/random/150x200?person"
                            style="max-width: 65%;align-self: center" class="card-img-top" alt="...">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title text-center">Lord Of the Flies Lord Of the Flies</h5>
                            <p class="card-text text-center">William Golding</p>
                            <p class="card-text text-center mb-4">Jakarta Utara</p>
                            <div class="d-flex justify-content-center" style="margin-top: auto">
                                <x-button class=" align-self-end" style="align-self: center;">
                                    {{ __('Ubah') }}
                                </x-button>
                                <div class="mt-1 ml-2">
                                    <a href="/" class="link-dark">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="31" height="38" fill="currentColor"
                                            class="bi bi-trash" viewBox="0 0 16 16">
                                            <path
                                                d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                                            <path fill-rule="evenodd"
                                                d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col mt-5 d-flex align-items-stretch justify-content-center">
                    <div class="card border-dark border-4" style="width: 17rem; border-radius: 10px">
                        <img class="mt-4" src="https://source.unsplash.com/random/150x200?person"
                            style="max-width: 65%;align-self: center" class="card-img-top" alt="...">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title text-center">Lord Of the Flies Lord Of the Flies</h5>
                            <p class="card-text text-center">William Golding</p>
                            <p class="card-text text-center mb-4">Jakarta Utara</p>
                            <div class="d-flex justify-content-center" style="margin-top: auto">
                                <x-button class=" align-self-end" style="align-self: center;">
                                    {{ __('Ubah') }}
                                </x-button>
                                <div class="mt-1 ml-2">
                                    <a href="/" class="link-dark">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="31" height="38" fill="currentColor"
                                            class="bi bi-trash" viewBox="0 0 16 16">
                                            <path
                                                d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                                            <path fill-rule="evenodd"
                                                d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col mt-5 d-flex align-items-stretch justify-content-center">
                    <div class="card border-dark border-4" style="width: 17rem; border-radius: 10px">
                        <img class="mt-4" src="https://source.unsplash.com/random/150x200?person"
                            style="max-width: 65%;align-self: center" class="card-img-top" alt="...">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title text-center">Lord Of the Flies Lord Of the Flies</h5>
                            <p class="card-text text-center">William Golding</p>
                            <p class="card-text text-center mb-4">Jakarta Utara</p>
                            <div class="d-flex justify-content-center" style="margin-top: auto">
                                <x-button class=" align-self-end" style="align-self: center;">
                                    {{ __('Ubah') }}
                                </x-button>
                                <div class="mt-1 ml-2">
                                    <a href="/" class="link-dark">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="31" height="38" fill="currentColor"
                                            class="bi bi-trash" viewBox="0 0 16 16">
                                            <path
                                                d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                                            <path fill-rule="evenodd"
                                                d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col mt-5 d-flex align-items-stretch justify-content-center">
                    <div class="card border-dark border-4" style="width: 17rem; border-radius: 10px">
                        <img class="mt-4" src="https://source.unsplash.com/random/150x200?person"
                            style="max-width: 65%;align-self: center" class="card-img-top" alt="...">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title text-center">Lord Of the Flies Lord Of the Flies</h5>
                            <p class="card-text text-center">William Golding</p>
                            <p class="card-text text-center mb-4">Jakarta Utara</p>
                            <div class="d-flex justify-content-center" style="margin-top: auto">
                                <x-button class=" align-self-end" style="align-self: center;">
                                    {{ __('Ubah') }}
                                </x-button>
                                <div class="mt-1 ml-2">
                                    <a href="/" class="link-dark">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="31" height="38" fill="currentColor"
                                            class="bi bi-trash" viewBox="0 0 16 16">
                                            <path
                                                d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                                            <path fill-rule="evenodd"
                                                d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col mt-5 d-flex align-items-stretch justify-content-center">
                    <div class="card border-dark border-4" style="width: 17rem; border-radius: 10px">
                        <img class="mt-4" src="https://source.unsplash.com/random/150x200?person"
                            style="max-width: 65%;align-self: center" class="card-img-top" alt="...">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title text-center">Lord Of the Flies Lord Of the Flies</h5>
                            <p class="card-text text-center">William Golding</p>
                            <p class="card-text text-center mb-4">Jakarta Utara</p>
                            <div class="d-flex justify-content-center" style="margin-top: auto">
                                <x-button class=" align-self-end" style="align-self: center;">
                                    {{ __('Ubah') }}
                                </x-button>
                                <div class="mt-1 ml-2">
                                    <a href="/" class="link-dark">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="31" height="38" fill="currentColor"
                                            class="bi bi-trash" viewBox="0 0 16 16">
                                            <path
                                                d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                                            <path fill-rule="evenodd"
                                                d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col mt-5 d-flex align-items-stretch justify-content-center">
                    <div class="card border-dark border-4" style="width: 17rem; border-radius: 10px">
                        <img class="mt-4" src="https://source.unsplash.com/random/150x200?person"
                            style="max-width: 65%;align-self: center" class="card-img-top" alt="...">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title text-center">Lord Of the Flies Lord Of the Flies</h5>
                            <p class="card-text text-center">William Golding</p>
                            <p class="card-text text-center mb-4">Jakarta Utara</p>
                            <div class="d-flex justify-content-center" style="margin-top: auto">
                                <x-button class=" align-self-end" style="align-self: center;">
                                    {{ __('Ubah') }}
                                </x-button>
                                <div class="mt-1 ml-2">
                                    <a href="/" class="link-dark">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="31" height="38" fill="currentColor"
                                            class="bi bi-trash" viewBox="0 0 16 16">
                                            <path
                                                d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                                            <path fill-rule="evenodd"
                                                d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}

            </div>
            {{-- buat row 2-3-4-5-6 --}}
        </div>


    </body>

    </html>
@endsection
