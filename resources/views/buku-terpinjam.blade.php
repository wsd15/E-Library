@extends('layout.app')

@section('content')
    <html>
    <p class="fs-1 text-center mt-5 mb-5">Buku Terpinjam</p>

    {{-- <div class="container mt-50 mb-50 border">

        <div class="d-flex flex-column bd-highlight mb-3">

            <div class="p-2 bd-highlight"> --}}
                {{-- Content box --}}
                {{-- <div class="container justify-content-center mt-30 mb-30">
                    <p class="fs-3 text-sm-start">Perpustakaan A</p>
                    <div class="row">
                        <div class="col-md-12">

                            <div class="card card-body mt-2">
                                <div
                                    class="media align-items-center align-items-lg-start text-center text-lg-left flex-column flex-lg-row">

                                    <div class="container">
                                        <div class="row">
                                            <div class="col col-2">
                                                <div class="mb-3 mb-lg-0">
                                                    <img src="https://source.unsplash.com/random/150x150?person" width="150"
                                                        height="150" alt="">
                                                </div>
                                            </div>
                                            <div class="col col-10">
                                                <div class="mt-2 row">
                                                    <div class="col">
                                                        <h6 class="media-title font-weight-semibold text-start"
                                                            style="font-size:2vw">
                                                            <b href="#" data-abc="true">Lord of The Flies</b>
                                                        </h6>

                                                        <p class="text-start mt-2 fs-5 fw-bold">
                                                            <a>Status: Menunggu Pembayaran</a>
                                                        </p>

                                                        <p class="text-start mt-2 fs-5">
                                                            <a>Perpustakaan Cemerlang</a>
                                                        </p>

                                                        <p class="text-start mt-2 fs-5">
                                                            <a>Deadline Pengembalian : 1 Agustus 2022</a>
                                                        </p>

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

            <div class="p-2 bd-highlight">
                <p class="fs-4 text-sm-center">Total Deposito: Rp. 100.000</p> --}}

                {{-- Checkout button --}}
                {{-- <div class="mt-5 text-center">
                    <x-button class="">
                        Detail Pembayaran
                    </x-button>
                </div>
            </div>
        </div>
    </div> --}}





    {{-- @php ($array=[]) @endphp
    @foreach ($itemcart as $key => $item2)
        
      
        @foreach($itemcart[$key]->cart->detail as $detail)  --}}
           
                {{-- @php 
                
                if (in_array($detail->buku->perpustakaan_id,$array)) {
                  
                    continue;
                }else
                {
                    array_push($array, $detail->buku->perpustakaan_id);
                    
                }
               
    
                @endphp --}}
    
    
    
               {{-- <div class="border mt-3 mb-5">    
                        {{ $detail->buku->bukuperpus->nama_perpustakaan }} 
                        <br>
                            @foreach ($itemcart[$key]->cart->detail as $item)
                                    
                                   
                                    {{ $item->buku->nama_buku }} 
                                    
                                        <br>
                                  
                            
                            @endforeach
                        <br>
    
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
                       
                     
                            <x-button class="btn align-self-end" data-bs-toggle="modal" data-bs-target="#exampleModal" id="button1" style="align-self: center;">
                                {{ __('Detail Buku') }}
                            </x-button>
                         
                          
                         
    
                </div> 
    
       
        @endforeach 
    @endforeach   --}}


    @php ($array2=[]) @endphp
    @php ($array3=[]) @endphp
    @foreach ($itemcart as $key => $item)
    @if ($item->status_pembayaran === 'belum dibayar')
               @php continue; @endphp
    @endif
                @foreach ($itemcart[$key]->cart->detail as $item2)


                @php 
                
                if (in_array($item2->cart_id,$array2)) {
                  
                    continue;
                }else
                {
                    array_push($array2, $item2->cart_id);
                    
                }
               
    
                @endphp
            <div class="container border border-dark border-3 rounded-3 mt-3 mb-3">
             
                

                <p class="fs-3 text-sm-start">{{ $item2->buku->bukuperpus->nama_perpustakaan }}</p>
                        @foreach ($itemcart[$key]->cart->detail as $item3)
                        <div class="row border border-dark border-3 rounded-3 mt-5 ms-1 me-1 " style="background-color: #E2E2E2">  
                            <div class="col-1 mt-2">
                                <img style="width:10vw;height: 20vh;" src="{{asset('/images/buku/'.$item3->buku->file_path)}}">
                            </div>
                            
                            <div class="col ms-2 mt-2">
                                
                                <h6 class="media-title font-weight-semibold text-start"
                                style="font-size:2vw">
                                    <b href="#" data-abc="true">{{ $item3->buku->nama_buku }} </b>
                                </h6>
                          

                                <p class="text-start mt-2 fs-5 fw-bold">
                                    <a>Status : @if ($item->status_pembayaran === 'belum dibayar')
                                        Menunggu Pembayaran
                                        @elseif ($item->status_pembayaran === 'sudah terbayar')
                                        Sudah Terbayar
                                        @elseif ($item->status_pembayaran === 'lunas')
                                        Lunas
                                    @endif </a>
                                </p>


                                <p class="text-start  fs-5">
                                    <a> {{ $item3->buku->bukuperpus->nama_perpustakaan }}</a>
                                </p>
                                <p class="text-start fs-5">
                                    
                                    <a>Deadline Pengembalian : {{ $item->tanggal_pengembalian }}</a>
                                </p>
                                
                            </div>
                            
                            <div class="row">
                                @foreach ($itemcart[$key]->detail as $item4)
                                @php 
                
                                if (in_array($item4->id,$array3)) {
                                  
                                    continue;
                                }else
                                {
                                    array_push($array3, $item4->id);
                                    
                                }
                               
                    
                                @endphp
                                    
                                
                               <div class="col-md-12 mt-4"><label class="labels">Catatan</label>
                                    <textarea class="form-control rounded-md border-dark " name="catatan[]"
                                        placeholder="Masukkan Catatan" id="exampleFormControlTextarea1"
                                        rows="5"></textarea>
                                       
                                </div>
                                {{ $item4 }}
                                @php break; @endphp

                                @endforeach
                            </div>
                            
                        </div>

                        

                        @endforeach
                        
                      

                @endforeach
                 {{-- <a href="{{url('/pembayaran/'.$detail->cart_id)}}">
                    </a> --}}
                    
                   

                    @if ($item->status_pembayaran === 'sudah terbayar1')
                    <div class="text-center mt-5 mb-3">
                        <form action="{{url('/pengembalian-buku/'.$item2->cart_id)}}" method="POST" >
                            @csrf
                            <input type="hidden" name="cart_id" value={{$item2->cart_id}}>
                            <a href="{{url('/pengembalian-buku/'.$item2->cart_id)}}">
                                <button type="button" class="btn btn-black mb-1 border border-dark rounded-pill font-semibold text-s  text-black uppercase ring-gray-300" style="background-color: #D3D3D3; align-items: flex-end">Pengembalian</button>
                            </a>
                        </form>
                    </div>
                    @else
                    <div class="row mt-3">
                            <div class="col">
                                Total Deposito : Rp. {{ $item->total_deposito+$item->totaldenda }}
                            </div>  
                            <div class="col">
                                Total Denda : Rp. {{ $item->totaldenda }}
                            </div> 
                    </div>
                   @endif
                
            </div>
    @endforeach
    



    </html>
@endsection
