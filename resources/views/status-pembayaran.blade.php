@extends('layout.app')

@section('content')
    <html>
        <body>
            <script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>
     
                        @if ($checktransaction->status_pembayaran === 'sudah terbayar')
                            <div class="container mt-5">
                                <div class="d-flex justify-content-center">
                                    <svg style="color: #0FA958" xmlns="http://www.w3.org/2000/svg" width="55vw" height="55vh" fill="currentColor" class="bi bi-patch-check-fill" viewBox="0 0 16 16">
                                        <path d="M10.067.87a2.89 2.89 0 0 0-4.134 0l-.622.638-.89-.011a2.89 2.89 0 0 0-2.924 2.924l.01.89-.636.622a2.89 2.89 0 0 0 0 4.134l.637.622-.011.89a2.89 2.89 0 0 0 2.924 2.924l.89-.01.622.636a2.89 2.89 0 0 0 4.134 0l.622-.637.89.011a2.89 2.89 0 0 0 2.924-2.924l-.01-.89.636-.622a2.89 2.89 0 0 0 0-4.134l-.637-.622.011-.89a2.89 2.89 0 0 0-2.924-2.924l-.89.01-.622-.636zm.287 5.984-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7 8.793l2.646-2.647a.5.5 0 0 1 .708.708z"/>
                                    </svg>
                                </div>
                                <div class="d-flex justify-content-center mt-3">
                                        <h5 class="fs-1">Selamat! Pembayaran Anda Berhasil!</h5>
                                </div>
                            </div>

                            <div class=" d-flex justify-content-center mt-3" style="align-self: center">
                                <a href="/buku-pinjaman">
                                    <button type="button" class="btn btn-black mb-1 border border-dark rounded-pill font-semibold text-s  text-black uppercase ring-gray-300" style="background-color: #D3D3D3; align-items: flex-end">Halaman Buku Pinjaman</button>
                                </a>
                            </div>

                            @else
                            <div class="container mt-5">
                                <div class="d-flex justify-content-center">
                                    <span style="color: #FF3A00" class="iconify" data-width="400" data-height="55vh" data-icon="akar-icons:circle-x-fill"></span>
                                </div>
                                <div class="d-flex justify-content-center mt-3">
                                        <h5 class="fs-1">Pembayaran Anda Gagal!</h5>
                                </div>
                            </div>
                            <div class=" d-flex justify-content-center mt-3" style="align-self: center">
                                <a href="/buku-pinjaman">
                                    <button type="button" class="btn btn-black mb-1 border border-dark rounded-pill font-semibold text-s  text-black uppercase ring-gray-300" style="background-color: #D3D3D3; align-items: flex-end">Halaman Buku Pinjaman</button>
                                </a>
                            </div>
                            
                        @endif 
     
           

                        {{-- <div class="container mt-5">
                            <div class="d-flex justify-content-center">
                                <svg style="color: #0FA958" xmlns="http://www.w3.org/2000/svg" width="55vw" height="55vh" fill="currentColor" class="bi bi-patch-check-fill" viewBox="0 0 16 16">
                                    <path d="M10.067.87a2.89 2.89 0 0 0-4.134 0l-.622.638-.89-.011a2.89 2.89 0 0 0-2.924 2.924l.01.89-.636.622a2.89 2.89 0 0 0 0 4.134l.637.622-.011.89a2.89 2.89 0 0 0 2.924 2.924l.89-.01.622.636a2.89 2.89 0 0 0 4.134 0l.622-.637.89.011a2.89 2.89 0 0 0 2.924-2.924l-.01-.89.636-.622a2.89 2.89 0 0 0 0-4.134l-.637-.622.011-.89a2.89 2.89 0 0 0-2.924-2.924l-.89.01-.622-.636zm.287 5.984-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7 8.793l2.646-2.647a.5.5 0 0 1 .708.708z"/>
                                </svg>
                            </div>
                            <div class="d-flex justify-content-center mt-3">
                                    <h5 class="fs-1">Selamat! Pembayaran Anda Berhasil!</h5>
                            </div>
                        </div> --}}

          
            
            
        </body>
    </html>
@endsection