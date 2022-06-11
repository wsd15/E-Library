@extends('layout.app')

@section('content')
    <html>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <body style="">

        <div class="container rounded bg-white mt-5 mb-5">
            <div class="row">
                <div class="col-md-3">
                    <img id="bookPic" class="img-fluid" style="width:20vw " src="{{asset('/images/buku/'.$bookdet[0]->file_path)}}">
                </div>
                
                <div class="col-md-7">
                    <p class="fw-bold" style="font-size: 30px">{{ $bookdet[0]->nama_buku }}</p>
                    <p>{{ $bookdet[0]->penerbit }}</p>
                    <p>Tahun Terbit : {{ $bookdet[0]->tahun_terbit }}</p>
                    <p>Stok : {{ $bookdet[0]->stok }}</p>
                    <div style="padding-top:5vw">
                        <p class="fw-bold" style="font-size: 30px">{{ $bookdet[0]->nama_perpustakaan }}</p>
                        <p>Jakarta Pusat</p>
                        <a href="https://goo.gl/maps/kv4NAnpTaNK7CRRn8"><p style="color: blue">Jalan Jendral Sudirman</p></a>
                        @foreach(explode('+', $bookdet[0]->nama_perpustakaan) as $fields) 
                        <div class="mapouter">
                            
                
                            <div class="gmap_canvas">
                                    <iframe width="600" height="500" id="gmap_canvas" 
                                    src="https://maps.google.com/maps?q={{$fields}}&t=&z=19&ie=UTF8&iwloc=&output=embed" 
                                    frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
                                    </iframe>
                            <br>
                                    <style>.mapouter{position:relative;text-align:right;height:500px;width:600px;}</style>
                            <a href="https://www.embedgooglemap.net">google maps plugin html</a><style>.gmap_canvas 
                            {overflow:hidden;background:none!important;height:500px;width:600px;}</style>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-md-2 ">
                    <link rel="stylesheet"
                        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
                    <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>


                    <span id=heart><i class="fa fa-heart-o fa-2x" aria-hidden="true"></i> </span>

                    <div class="" style="margin-top:9vw">
                        <x-button class="mt-5" style="width: 170px; font-size: 15px">
                            {{ __('Add To Cart') }}
                        </x-button>
                    </div>

                    <script>
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
                    </script>
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
