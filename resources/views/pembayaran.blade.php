@extends('layout.app')

@section('content')

<html>
    <p class="fs-1 text-center">Pembayaran</p>

    <div class="p-2 bd-highlight">
        {{-- Text judul --}}
        <p class="fs-4 text-sm-start pl-50">Perpustakaan A</p>
    </div>

    <div class="p-2 bd-highlight">
        {{-- Content box --}}
        <div class="container justify-content-center mt-30 mb-30">
            
            <div class="row">
            <div class="col-md-10">
                
                    <div class="card card-body mt-2">
                                <div class="media align-items-center align-items-lg-start text-center text-lg-left flex-column flex-lg-row">
    
                                    <div class="container">
                                        <div class="row">
                                            <div class="col col-2">
                                                <div class="mb-3 mb-lg-0">                                 
                                                    <img src="https://source.unsplash.com/random/150x150?person" width="150" height="150" alt="">
                                            </div>
                                            </div>
                                            <div class="col col-10">
                                                <div class="mt-2 row">
                                                    <div class="col">
                                                        <h6 class="media-title font-weight-semibold text-start" style="font-size:2vw">
                                                            <b href="#" data-abc="true">Lord of The Flies</b>
                                                        </h6>
                    
                                                        <h5 class="text-start mt-2">
                                                            <a>Biaya deposit: Rp. 100.000</a>
                                                        </h5>
                
                                                    </div>
                                                <div class="col">

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                            
                        
                </div>                     
            </div>
        </div>
    </div>

    <p class="text-start mt-2 fs-3 fw-bold">
        <a>Total Deposito</a>
    </p>

    <p class="text-start mt-2 fs-5">
        <a>Rp 300.005</a>
    </p>

    <p class="text-start mt-2 fs-3 fw-bold">
        <a>BCA Virtual account</a>
    </p>

    <p class="text-start mt-2 fs-5">
        <a>52798920857</a>
    </p>

    <div class="mt-5 text-center">
        <x-button class="">
            Cek Status Pembayaran
        </x-button>
        </div> 
    </div>

</html>

@endsection