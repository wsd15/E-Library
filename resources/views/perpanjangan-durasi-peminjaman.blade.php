@extends('layout.app')

@section('content')

<html>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" ></script>

    <p class="fs-1 text-center mt-2">Terimakasih, Anda Berhasil Melakukan Perpanjangan Durasi Peminjaman</p>

    @php ($counter=1) @endphp
           
    @php ($array=[]) @endphp




    <div class="container mt-5 ">
        @foreach($itemcart->cart->detail as $detail)
                        @php ($counter2=$detail->buku->perpustakaan_id) @endphp
                            @php 
                            if (in_array($detail->buku->perpustakaan_id,$array)) {
                                continue;
                            }else
                            {
                                array_push($array, $detail->buku->perpustakaan_id); 
                            }
                            @endphp
       
          <div class="row">
            <div class="col"><p class="fs-3 text-sm-start pl-50">{{ $detail->buku->bukuperpus->nama_perpustakaan }}</p>     </div> 
            </div>  
                            
                                @foreach ($itemcart->cart->detail as $item)
                                  <div class="container ms-2">
                                       
                                        <div class="card card-body border mt-2 mb-3 border-dark rounded-3" style="background-color: #E2E2E2">
                                            <div class="row">
                                                <div class="col-1 desktop">
                                                    <img id="bookPic" class="img-fluid " style="width:5vw " src="{{asset('/images/buku/'.$item->buku->file_path)}}">
                                                </div>
                                                <div class="col-3 mobile">
                                                    <img id="bookPic" class="img-fluid " style="width:20vw " src="{{asset('/images/buku/'.$item->buku->file_path)}}">
                                                </div>

                                                <div class="col ">

                                                    <h6 class="media-title font-weight-semibold text-start" style="font-size:2vw">
                                                        <b href="#" data-abc="true">{{ $item->buku->nama_buku }} </b>
                                                    </h6>
                
                                                    <p class="text-start mt-2 fs-5 fw-bold">
                                <a>Status : @if ($itemcart->status_pembayaran === 'belum dibayar')
                                    Menunggu Pembayaran
                                    @elseif ($itemcart->status_pembayaran === 'sudah terbayar')
                                    Sudah Terbayar
                                @endif </a>
                            </p>


                                            <p class="text-start  fs-5">
                                                <a> {{ $item->buku->bukuperpus->nama_perpustakaan }}</a>
                                            </p>
                                            <p class="text-start fs-5">
                                                
                                                <a>Deadline Pengembalian : {{ $itemcart->tanggal_pengembalian }}</a>
                                            </p>
                                
                      
                                                   

                                                </div>
                                            </div>
                                        
                                        </div>
                                      
                                  </div> 
                                @endforeach
                            
                            
                        
                          
                        
                      
                @php($counter=$counter+1)
      @endforeach

     
       
          <div class="card card-body mb-3">
            Ketentuan Perpanjangan Durasi Peminjaman :
            <ul style="list-style-type:disc" class="ms-3">
                <li>
                  Peminjam hanya bisa melakukan 1 (satu) kali perpanjangan durasi peminjaman
                </li>
                <li>
                  Perpanjangan durasi selama 14 hari
                </li>
                <li>
                  Perpanjangan hanya bisa dilakukan per 1 (satu) kali transaksi
                </li>
                <li>
                  Maksimal transaksi hanya bisa 2 (dua) buku
                </li>
              
            </ul>
           
         </div>
       
         

         
          <div class="mt-3 mb-3 text-center">
             <a href="{{ url('buku-pinjaman') }}"> <x-button class="" >
                 Ok
              </x-button>
            </a>
          </div>
  

        

    </div>

  
    
    

    

   

</html>

@endsection