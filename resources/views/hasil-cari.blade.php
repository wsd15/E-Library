@extends('layout.app')

@section('content')
    <html>

    <body style="">
        
            
        
        <div class="container">
            
            <div class="row mt-5 row-cols-3">
                @foreach ($data as $buku)
                <div class="col mt-5 d-flex align-items-stretch justify-content-center">
                    <div class="card" style="width: 17rem;">
                        <img class="mt-4" src="{{asset($buku->file_path)}}"
                            style="max-width: 65%;align-self: center" class="card-img-top" alt="...">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title text-center">{{ $buku->nama_buku }}</h5>
                            <p class="card-text text-center">{{ $buku->penulis }}</p>
                            <p class="card-text text-center mb-4">Jakarta Utara</p>
                            <div class="d-flex justify-content-center" style="margin-top: auto">
                                <a href="{{url('/detail-buku/'.$buku->id)}}">
                                    <x-button class=" align-self-end" style="align-self: center;">
                                        {{ __('Detail Buku') }}
                                    </x-button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                <div class="col mt-5 d-flex align-items-stretch justify-content-center">
                    <div class="card" style="width: 17rem;">
                        <img class="mt-4" src="https://source.unsplash.com/random/150x200?person"
                            style="max-width: 65%;align-self: center" class="card-img-top" alt="...">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title text-center">Lord Of the Flies</h5>
                            <p class="card-text text-center">William Golding</p>
                            <p class="card-text text-center mb-4">Jakarta Utara</p>
                            <div class="d-flex justify-content-center" style="margin-top: auto">
                                <x-button class=" align-self-end" style="align-self: center;">
                                    {{ __('Detail Buku') }}
                                </x-button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col mt-5 d-flex align-items-stretch justify-content-center">
                    <div class="card" style="width: 17rem;">
                        <img class="mt-4" src="https://source.unsplash.com/random/150x200?person"
                            style="max-width: 65%;align-self: center" class="card-img-top" alt="...">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title text-center">Lord Of the Flies</h5>
                            <p class="card-text text-center">William Golding</p>
                            <p class="card-text text-center mb-4">Jakarta Utara</p>
                            <div class="d-flex justify-content-center" style="margin-top: auto">
                                <x-button class=" align-self-end" style="align-self: center;">
                                    {{ __('Detail Buku') }}
                                </x-button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col mt-5 d-flex align-items-stretch justify-content-center">
                    <div class="card" style="width: 17rem;">
                        <img class="mt-4" src="https://source.unsplash.com/random/150x200?person"
                            style="max-width: 65%;align-self: center" class="card-img-top" alt="...">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title text-center">Lord Of the Flies</h5>
                            <p class="card-text text-center">William Golding</p>
                            <p class="card-text text-center mb-4">Jakarta Utara</p>
                            <div class="d-flex justify-content-center" style="margin-top: auto">
                                <x-button class=" align-self-end" style="align-self: center;">
                                    {{ __('Detail Buku') }}
                                </x-button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col mt-5 d-flex align-items-stretch justify-content-center">
                    <div class="card" style="width: 17rem;">
                        <img class="mt-4" src="https://source.unsplash.com/random/150x200?person"
                            style="max-width: 65%;align-self: center" class="card-img-top" alt="...">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title text-center">Lord Of the Flies</h5>
                            <p class="card-text text-center">William Golding</p>
                            <p class="card-text text-center mb-4">Jakarta Utara</p>
                            <div class="d-flex justify-content-center" style="margin-top: auto">
                                <x-button class=" align-self-end" style="align-self: center;">
                                    {{ __('Detail Buku') }}
                                </x-button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col mt-5 d-flex align-items-stretch justify-content-center">
                    <div class="card" style="width: 17rem;">
                        <img class="mt-4" src="https://source.unsplash.com/random/150x200?person"
                            style="max-width: 65%;align-self: center" class="card-img-top" alt="...">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title text-center">Lord Of the Flies</h5>
                            <p class="card-text text-center">William Golding</p>
                            <p class="card-text text-center mb-4">Jakarta Utara</p>
                            <div class="d-flex justify-content-center" style="margin-top: auto">
                                <x-button class=" align-self-end" style="align-self: center;">
                                    {{ __('Detail Buku') }}
                                </x-button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col mt-5 d-flex align-items-stretch justify-content-center">
                    <div class="card" style="width: 17rem;">
                        <img class="mt-4" src="https://source.unsplash.com/random/150x200?person"
                            style="max-width: 65%;align-self: center" class="card-img-top" alt="...">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title text-center">Lord Of the Flies</h5>
                            <p class="card-text text-center">William Golding</p>
                            <p class="card-text text-center mb-4">Jakarta Utara</p>
                            <div class="d-flex justify-content-center" style="margin-top: auto">
                                <x-button class=" align-self-end" style="align-self: center;">
                                    {{ __('Detail Buku') }}
                                </x-button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            {{-- buat row 2-3-4-5-6 --}}
        </div>



    </body>

    </html>
@endsection
