@extends('layout.app')

@section('content')

<html>
    <p class="fs-1 text-center">Pembayaran</p>

    @php ($counter=1) @endphp
           
    @php ($array=[]) @endphp


    <div class="container mt-5 border border-dark rounded-3">
        @foreach($itemcart->detail as $detail)
                        @php ($counter2=$detail->buku->perpustakaan_id) @endphp
                            @php 
                            if (in_array($detail->buku->perpustakaan_id,$array)) {
                                continue;
                            }else
                            {
                                array_push($array, $detail->buku->perpustakaan_id); 
                            }
                            @endphp
            @if ($detail->buku->bukuperpus->id == $ids)
            {{ $detail->buku->bukuperpus->nama_perpustakaan }}    
                            <br>
                                @foreach ($itemcart->detail as $item)
                                
                                        @if ($item->buku->perpustakaan_id===$detail->buku->perpustakaan_id)
                                        <div class="card card-body border mt-2 mb-3 border-dark rounded-3">
                                            <div class="row">
                                                <div class="col-2">
                                                    test
                                                </div>
                                                <div class="col-10">
                                                    {{ $item->buku->nama_buku }} <br>
                                                </div>
                                                
                                            </div>
                                        
                                        </div>
                                        @endif
                                    
                                @endforeach
                            
                            <br>
                        
                            <p class="text-start mt-2 fs-3 fw-bold">
                                Total Deposito
                            </p>
                        
                            <p class="text-start mt-2 fs-5">
                                Rp 300.005
                            </p>
                        
                            <p class="text-start mt-2 fs-3 fw-bold">
                                BCA Virtual account
                            </p>
                        
                            <p class="text-start mt-2 fs-5">
                                52798920857
                            </p>
                        
            @endif                
                @php($counter=$counter+1)
        @endforeach
    </div>

    

    <div class="p-2 bd-highlight">
        {{-- Content box --}}
        <div class="container justify-content-center mt-30 mb-30">
            
            <p class="fs-3 text-sm-start pl-50">Perpustakaan A</p>

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

            <p class="text-start mt-2 fs-3 fw-bold">
                Total Deposito
            </p>
        
            <p class="text-start mt-2 fs-5">
                Rp 300.005
            </p>
        
            <p class="text-start mt-2 fs-3 fw-bold">
                BCA Virtual account
            </p>
        
            <p class="text-start mt-2 fs-5">
                52798920857
            </p>

        </div>
    </div>

    

    <div class="mt-5 text-center">
        <x-button class="">
            Cek Status Pembayaran
        </x-button>
        </div> 
    </div>

</html>

@endsection