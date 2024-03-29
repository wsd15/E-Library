@extends('layout.app')

@section('content')
    <html>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <body style="">       
           
     {{-- <div class="mt-3" style="margin-left: 3rem"><a class="" href="{{ url('hasil-cari') }}">Go Back</a></div> --}}

        <div class="container rounded bg-white mt-3 mb-5">
            
            <div class="row">
                <div class="col-md-3">
                  
                    <img id="bookPic" class="img-fluid desktop" style="width:20vw " src="{{asset('/images/buku/'.$bookdet[0]->file_path)}}">
                        
                    <div class="row">
                        <div class="col mobile">
                                <img id="bookPic" class="img-fluid " style="width:50vw; margin-right: -10%;" src="{{asset('/images/buku/'.$bookdet[0]->file_path)}}">
                                <p> Harga Deposit : <br> Rp {{ $bookdet[0]->deposit }} </p>
                        </div> 
                        <div class="col mobile">
                            
                            <form action="/detail-buku/{{ $bookdet[0]->id }}" method="post" >
                                @csrf
                                <input type="hidden" name="produk_id" value={{ $bookdet[0]->id }}>
                                <button type="submit" class="" style="margin-bottom: 3vw;margin-left: 6%;">
                                @if(isset($itemwishlist)&& $itemwishlist)
                                <i class="fa fa-heart fa-2x" style="margin-left: 50%"></i> 
                                @else
                                <i class="fa fa-heart-o fa-2x" style=""></i>
                                @endif
                                </button>
                            </form>

                            <div class="" style="margin-top:3vw">
                       
                        
                                <form action="{{ route('cartdet.store') }}" method="POST" >
                                    @csrf
                                    <input type="hidden" name="produk_id" value={{$bookdet[0]->id}}>
                                    <x-button class="d-flex justify-content-center" style=" margin-left: 2%; width: 170px; font-size: 15px; ">
                                         {{ __('Add To Cart') }} <i class="ml-1 fa fa-shopping-cart"> </i>  
                                    </x-button>
                                    </button>
                                </form>
        
                            </div>
    
                        </div> 
                    </div>
                </div>
                
                <div class="col-md-7">
                    <p class="fw-bold" style="font-size: 30px">{{ $bookdet[0]->nama_buku }}</p>
                    <p>Penulis      : {{ $bookdet[0]->penulis }}</p>
                    <p>Penerbit     : {{ $bookdet[0]->penerbit }}</p>
                    <p>Tahun Terbit : {{ $bookdet[0]->tahun_terbit }}</p>
                    <p>Stok         : {{ $bookdet[0]->stok }}</p>
                    <p>ISBN         : {{ $bookdet[0]->isbn }}</p>
                    <div style="padding-top:2vw">
                      <a href="/detail-perpustakaan/{{$bookdet[0]->bukuperpus->id  }}"><p class="fw-bold" style="font-size: 30px"><u>{{ $bookdet[0]->bukuperpus->nama_perpustakaan }}</u> </p></a>  
                        <p>{{ $bookdet[0]->bukuperpus->Kota }}</p>
                        <a href="{{ $bookdet[0]->bukuperpus->link_google_maps }}"><p style="color: blue">{{ $bookdet[0]->bukuperpus->alamat_perpustakaan }}</p></a>
                        {{-- @foreach(explode('+', $bookdet[0]->bukuperpus->nama_perpustakaan) as $fields) 
                        <div class="mapouter">
                            
                
                            <div class="gmap_canvas">
                                    <iframe width="600" height="300" id="gmap_canvas" 
                                    src="https://maps.google.com/maps?q={{$fields}}&t=&z=12&ie=UTF8&iwloc=&output=embed" 
                                    frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
                                    </iframe>
                            <br>
                                    <style>.mapouter{position:relative;text-align:right;height:300px;width:600px;}</style>
                            <a href="https://www.embedgooglemap.net">google maps plugin html</a><style>.gmap_canvas 
                            {overflow:hidden;background:none!important;height:300px;width:600px;}</style>
                            </div>
                        </div>
                        @endforeach --}}
                    </div>
                </div>


                <div class="col-md-2 desktop">
                    <link rel="stylesheet"
                        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
                    <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
                    
                   

                    {{-- <span id=heart><i class="fa fa-heart-o fa-2x" aria-hidden="true"></i> </span>
                     
                    <span id=heart><i class="fa fa-heart fa-2x" aria-hidden="true"></i> </span> --}}
                    
                    
                    <form action="/detail-buku/{{ $bookdet[0]->id }}" method="post">
                        @csrf
                        <input type="hidden" name="produk_id" value={{ $bookdet[0]->id }}>
                        <button type="submit" class="" style="margin-bottom: 3vw;margin-right: 50%">
                        @if(isset($itemwishlist)&& $itemwishlist)
                        <i class="fa fa-heart fa-2x"></i> 
                        @else
                        <i class="fa fa-heart-o fa-2x"></i>
                        @endif
                        </button>
                    </form>
                   <p> Harga Deposit : <br> Rp {{ $bookdet[0]->deposit }} </p>
                    <div class="" style="margin-top:3vw">
                       
                        
                        
                        <form action="{{ route('cartdet.store') }}" method="POST" >
                            @csrf
                            <input type="hidden" name="produk_id" value={{$bookdet[0]->id}}>
                            <x-button class="d-flex justify-content-center" style=" margin-left: 2%; width: 170px; font-size: 15px; ">
                                 {{ __('Add To Cart') }} <i class="ml-1 fa fa-shopping-cart"> </i>  
                            </x-button>
                            </button>
                        </form>

                    </div>

                    {{-- <script>
                        $(document).ready(function() {
                            $("#heart").click(function() {
                                if ($("#heart").hasClass("liked")) {
                                    $("#heart").html('<i class="fa fa-heart-o fa-2x" aria-hidden="true"></i>');
                                    $("#heart").removeClass("liked");
                                } else {
                                    $("#heart").html('<i class="fa fa-heart fa-2x" aria-hidden="true"></i>');
                                    $("#heart").addClass("liked");
                                }
                            });
                        });
                    </script> --}}
                </div>




            </div>
        </div>
        <div class="container rounded bg-white mt-7 mb-5">
            <p class="fw-bold mb-3" style="font-size: 30px">Deskripsi</p>
            <p style="text-align: justify">
                {{ $bookdet[0]->deskripsi }}</p>
        </div>






    </body>

    </html>
@endsection
