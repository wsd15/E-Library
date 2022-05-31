@extends('layout.app')

@section('content')
    <html>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <body style="">
        {{-- <div class="container rounded bg-white mt-5 mb-5">
            <div class="row">
                <div class="col-4">
                    <img id="bookPic" class="pic" src="https://source.unsplash.com/random/450x300?book-cover">
                </div>
                <div class="col-8">
                    <div class="row" style="margin-top: 20px">
                        <div class="col-8">
                            <p class="fw-bold" style="font-size: 30px">Lord Of The Flies</p>
                            <p>William Golding</p>
                            <p>Tahun Terbit : 2020</p>
                        </div>
                        <div class="col-4">


                            <link rel="stylesheet"
                                href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
                            <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>

                            <!-- Use an element to toggle between a like/dislike icon -->
                            <span id=heart><i class="fa fa-heart-o fa-2x"  aria-hidden="true"></i> </span>



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
                    <div class="row">
                        <div class="col-8" style="margin-top: 25px">
                            <p class="fw-bold" style="font-size: 30px">Perpustakaan ABC</p>
                            <p>Jakarta Pusat</p>
                            <p>Jalan Jendral Sudirman</p>
                        </div>
                        <div class="col-4" style="margin-top: 10%">
                            <x-button style="width: 170px; font-size: 15px">
                                {{ __('Add To Cart') }}
                            </x-button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container rounded bg-white mt-7 mb-5">
            <p class="fw-bold mb-3" style="font-size: 30px">Deskripsi</p>
            <p style="text-align: justify">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Faucibus nulla enim, faucibus
                nec. Nam quam
                scelerisque velit urna, etiam. In integer amet aliquam, penatibus mauris tellus, orci. Egestas velit
                suspendisse eleifend fringilla etiam tortor. Ut non fames gravida vitae aliquet sed nibh egestas. Nulla amet
                laoreet velit vehicula nullam ipsum. Eget pharetra leo cras facilisis id scelerisque dui. Urna tincidunt
                nulla tellus adipiscing sed pharetra, eget.
                Dolor in ultrices arcu suspendisse ultricies. Cras dignissim eu et sed mi quis massa. Dui, eleifend ornare
                et ac dictum nunc. Consectetur tellus pulvinar suspendisse nulla. Dolor purus sit eu arcu velit duis elit
                aliquam odio.
                A dictum felis etiam mi id vitae quisque. Magnis posuere viverra leo, ut ut porta sapien, arcu orci. At
                elementum quis semper risus est aliquam enim tristique nunc. Iaculis aliquet fusce sit faucibus cursus
                mauris in. Purus aliquet potenti malesuada in interdum sed. Facilisis aliquet sapien turpis ipsum neque,
                adipiscing consectetur. At arcu leo at sed pulvinar fermentum eget. Mattis odio velit scelerisque lectus
                vestibulum. Interdum quisque sollicitudin diam ipsum mi, diam. Aliquam fringilla diam elementum euismod
                pretium ac nunc. Vitae commodo sit a, nunc mollis eu. Et congue urna feugiat turpis venenatis mattis. Nisi
                quisque sollicitudin cursus aliquam mollis venenatis sit aliquet sit.
                Enim donec scelerisque lacus, neque justo, pulvinar proin mattis. Vel arcu, mi turpis magna vitae enim. Id
                egestas pharetra scelerisque hendrerit ipsum. Lectus egestas nunc quis pellentesque proin nec in non.
                Porttitor sem convallis ipsum lectus maecenas risus. Sed a ut imperdiet neque velit et aliquam vitae.
                Imperdiet amet, orci at consectetur sed. Odio risus integer id adipiscing faucibus. Id eu iaculis cursus
                ultricies vulputate quis. Diam et ut facilisis adipiscing amet vestibulum ornare ut. Cursus placerat id
                tincidunt elementum. Cras urna sit vitae hendrerit orci.
                Metus, mattis commodo feugiat sed. Quam pellentesque phasellus luctus consectetur. Nec, viverra pellentesque
                vel in lectus tortor amet urna, molestie. Molestie blandit donec nunc imperdiet et sit. Volutpat, mauris,
                morbi morbi sit eget sed suspendisse. Amet risus ullamcorper orci pulvinar vulputate nibh nulla volutpat.
                Facilisis ullamcorper et ultricies quam massa elit. Sed dignissim proin magna in lectus id. Egestas eu netus
                sit nunc vitae neque. At sociis etiam diam ac cursus. Euismod felis sed proin lectus urna tortor imperdiet
                orci dui. Id ut eu faucibus sed lorem sed convallis non sed. Hac lorem nisl, sed urna gravida. Vitae dolor
                donec dolor odio senectus. Phasellus nulla habitant lectus volutpat ut ornare at ac massa.</p>
        </div> --}}

        <div class="container rounded bg-white mt-5 mb-5">
            <div class="row">
                <div class="col-md-3">
                    <img id="bookPic" class="img-fluid" style="width:20vw " src="{{ asset($bookdet[0]->file_path) }}">
                </div>
                <!-- {{-- <div class="col-md-4">
                    <div class="row" style="margin-top: 20px">
                        <div class="col-8 ">
                            <p class="fw-bold" style="font-size: 30px">{{$bookdet->nama_buku}}</p>
                            <p>{{$bookdet->penerbit}}</p>
                            <p>Tahun Terbit : {{$bookdet->tahun_terbit}}</p>
                        </div>
                        <div class="col-4">


                            <link rel="stylesheet"
                                href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
                            <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>

                             Use an element to toggle between a like/dislike icon 
                            <span id=heart><i class="fa fa-heart-o fa-2x"  aria-hidden="true"></i> </span>



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
                    <div class="row">
                        <div class="col-8" style="margin-top: 25px">
                            <p class="fw-bold" style="font-size: 30px">Perpustakaan ABC</p>
                            <p>Jakarta Pusat</p>
                            <p>Jalan Jendral Sudirman</p>
                        </div>
                        <div class="col-4" style="margin-top: 10%">
                            <x-button style="width: 170px; font-size: 15px">
                                {{ __('Add To Cart') }}
                            </x-button>
                        </div>
                    </div>
                </div> --}} -->
                <div class="col-md-7">
                    <p class="fw-bold" style="font-size: 30px">{{ $bookdet[0]->nama_buku }}</p>
                    <p>{{ $bookdet[0]->penerbit }}</p>
                    <p>Tahun Terbit : {{ $bookdet[0]->tahun_terbit }}</p>
                    <div style="padding-top:5vw">
                        <p class="fw-bold" style="font-size: 30px">{{ $bookdet[0]->nama_perpustakaan }}</p>
                        <p>Jakarta Pusat</p>
                        <p>Jalan Jendral Sudirman</p>
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
