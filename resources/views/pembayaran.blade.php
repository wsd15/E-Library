@extends('layout.app')

@section('content')

<html>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" ></script>

    <p class="fs-1 text-center mt-2">Pembayaran</p>

    @php ($counter=1) @endphp
           
    @php ($array=[]) @endphp


    <div class="container mt-5 ">
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
       
       <p class="fs-3 text-sm-start pl-50">{{ $detail->buku->bukuperpus->nama_perpustakaan }}</p>    
                        
                                @foreach ($itemcart->detail as $item)
                                
                                       
                                        <div class="container mt-2 mb-3 ">
                                            <div class="row  border border-dark rounded-3" style="background: #E2E2E2">
                                                <div class="col-1 desktop mt-2 mb-2">
                                                    <img id="bookPic" class="img-fluid " style="width:5vw " src="{{asset('/images/buku/'.$item->buku->file_path)}}">
                                                </div>
                                                <div class="col-3 mobile mt-2 mb-2">
                                                    <img id="bookPic" class="img-fluid " style="width:20vw " src="{{asset('/images/buku/'.$item->buku->file_path)}}">
                                                </div>

                                                <div class="col mt-2 mb-2">

                                                    <h6 class="media-title font-weight-semibold text-start" style="font-size:2vw">
                                                        <b href="#" data-abc="true">{{ $item->buku->nama_buku }} </b>
                                                    </h6>
                
                                                    <h5 class="text-start mt-2">
                                                        <a>Biaya Deposit: Rp. {{ $item->buku->deposit }},00</a>
                                                    </h5>

                                                </div>
                                            </div>
                                        
                                        </div>
                                      
                                    
                                @endforeach
                            
                            
                        
                            <p class="text-start mt-2 fs-3 fw-bold">
                                Total Deposito
                            </p>
                        
                            <p class="text-start mt-2 fs-5">
                                Rp. {{ $itemcart->total }},00
                            </p>
                        
                            <p class="text-start mt-2 fs-3 fw-bold">
                                BCA Virtual account
                            </p>
                        
                            <p class="text-start mt-2 fs-5">
                                52798920857
                            </p>
                        
                      
                @php($counter=$counter+1)
        @endforeach

        <button class="btn btn-outline-dark mb-3" style="color: black;background-color: white;width: 18rem;" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
          Cara Pembayaran via ATM BCA &#x25BC;
          </button>
        </p>
        <div class="collapse" id="collapseExample">
          <div class="card card-body mb-3">
            <ul style="list-style-type:disc" class="ms-3">
                <li>
                    Catat atau screenshot virtual account.
                </li>
                <li>
                    Masukkan kartu ATM dan PIN BCA kamu.
                </li>
                <li>
                    Di menu utama, pilih “Transaksi Lainnya” kemudian pilih “Transfer”.
                </li>
                <li>
                    Selanjutnya, pilih “Ke Rekening BCA Virtual Account”.
                </li>
                <li>
                    Masukkan virtual account kamu dan tekan “Benar”.
                </li>
                <li>
                    Layar ATM akan menampilkan konfirmasi jumlah pembayaran dan nama kamu. Jika benar, tekan “Ya”.
                </li>
                <li>
                    Pembayaran selesai. Simpan struk transaksi sebagai bukti pembayaran.
                </li>
            </ul>
           
         </div>
        </div>

        <button class="btn btn-outline-dark mb-3" style="color: black;background-color: white;width: 18rem;" type="button" data-toggle="collapse" data-target="#collapseExample2" aria-expanded="false" aria-controls="collapseExample">
           Cara Pembayaran via Klik BCA &#x25BC;
            </button>
          </p>
          <div class="collapse" id="collapseExample2">
            <div class="card card-body mb-3">
              <ul style="list-style-type:disc" class="ms-3">
                  <li>
                    Catat atau screenshot virtual account.
                  </li>
                  <li>
                    Login pada aplikasi KlikBCA Individual.
                  </li>
                  <li>
                    Masukkan USER ID dan PIN.
                  </li>
                  <li>
                    Pilih menu “Transfer Dana” kemudian pilih “Transfer ke BCA Virtual Account”.
                  </li>
                  <li>
                    Masukkan virtual account kamu dan pilih “Lanjutkan”.
                  </li>
                  <li>
                    Layar akan menampilkan konfirmasi jumlah pembayaran dan nama kamu. Jika benar, pilih “Lanjutkan”.
                  </li>
                  <li>
                    Masukkan respon KeyBCA kamu untuk validasi pembayaran dan pilih “Kirim”.
                  </li>
                  <li>
                    Pembayaran selesai. Simpan notifikasi dan nomor referensi sebagai bukti transaksi kamu.
                  </li>
              </ul>
             
           </div>
          </div>

          <button class="btn btn-outline-dark mb-3" style="color: black;background-color: white;width: 18rem;" type="button" data-toggle="collapse" data-target="#collapseExample3" aria-expanded="false" aria-controls="collapseExample">
            Cara Pembayaran via BCA Mobile &#x25BC;
            </button>
          </p>
          <div class="collapse" id="collapseExample3">
            <div class="card card-body mb-3">
              <ul style="list-style-type:disc" class="ms-3">
                  <li>
                    Catat atau screenshot virtual account.
                  </li>
                  <li>
                    Login pada aplikasi BCA Mobile.
                  </li>
                  <li>
                    Pilih m-BCA dan masukkan PIN m-BCA.
                  </li>
                  <li>
                    Kemudian pilih “m-Transfer”.
                  </li>
                  <li>
                    Pilih “Transfer” kemudian pilih “BCA Virtual Account”.
                  </li>
                  <li>
                    Masukkan virtual account kamu dan pilih “Kirim”.
                  </li>
                  <li>
                    Layar akan menampilkan konfirmasi jumlah pembayaran dan nama kamu. Jika benar, pilih “OK”.
                  </li>
                  <li>
                    Masukkan kembali PIN m-BCA kamu dan pilih “OK”.
                  </li>
                  <li>
                    Pembayaran selesai. Simpan notifikasi yang muncul sebagai bukti transaksi.
                  </li>
              </ul>
             
           </div>
          </div>

        

          <form action="{{ route('transaction.store') }}" method="POST" >
            @csrf
            <input type="hidden" name="cart_id" value={{$itemcart->id}}>
            <div class="mt-3 mb-3 text-center">
              <x-button class="">
                  Cek Status Pembayaran
              </x-button>
              </div> 
        </form>

    </div>

    

    {{-- <div class="p-2 bd-highlight"> --}}
        {{-- Content box --}}
        {{-- <div class="container justify-content-center mt-30 mb-30">
            
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
    </div> --}}

    

   

</html>

@endsection