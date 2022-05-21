@extends('layout.app')

@section('content')
    <html>
    <p class="fs-1 text-center mt-5 mb-5">Buku Terpinjam</p>

    <div class="container mt-50 mb-50 border">

        <div class="d-flex flex-column bd-highlight mb-3">

            <div class="p-2 bd-highlight">
                {{-- Content box --}}
                <div class="container justify-content-center mt-30 mb-30">
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
                {{-- Pengembalian button --}}
                <div class="mt-3 text-center">
                    <x-button class="">
                        Pengembalian
                    </x-button>
                </div>
            </div>
        </div>
    </div>

    </html>
@endsection
