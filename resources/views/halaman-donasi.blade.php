@extends('layout.app')

@section('content')
    <html>

    <body style="">
        <div id="bg">
            <img src="images/donasi.png" alt="">
        </div>

        <div class="container border border-4 border-dark mt-5 bg-white bg-opacity-50" style="border-radius: 30px;">
            <br>
            <p class="text-center fw-bolder">Terimakasih Sudah Berpartisipasi Untuk Berdonasi</p>
            <p class="text-center fw-bolder">Silahkan Hubungi Kami dan Atur Pengiriman</p>
            <br>
            <p class="fw-bolder">WhatsApp : </p> <a class="fw-bolder" style="color: blue"
                href="wa.me/6281210404587">wa.me/6281210404587</a>
            <br>
            <br>
            <p class="fw-bolder">Alamat Perpustakaan : </p>
            <p class="fw-bolder">Jl. Swadaya Barat RT 015/RW 05 No. 50A</p>
            <br>
            <p class="fw-bolder">Google Maps : </p>
            <a class="fw-bolder" style="color: blue"
                href="https://goo.gl/maps/ukTx6gduD37nqArK8">https://goo.gl/maps/ukTx6gduD37nqArK8</a>
            <br>
            <br>
        </div>
        <div class="d-flex justify-content-center mt-5">
            <x-button style="">
                {{ __('Ya, Sudah!') }}
            </x-button>
        </div>


    </body>

    </html>
@endsection
