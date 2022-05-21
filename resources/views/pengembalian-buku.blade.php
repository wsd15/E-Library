@extends('layout.app')

@section('content')
    <html>
    <p class="fs-1 text-center mt-5 mb-5">Rincian Pengembalian</p>

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
                                    class="media align-items-center align-items-lg-start text-center text-lg-left flex-column flex-lg-row mt-2">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col col-2">
                                                <div class="mb-3 mb-lg-0">
                                                    <img src="https://source.unsplash.com/random/150x150?book" width="150"
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
                                            <div class="col col-10">
                                                <div class="row mt-2 text-start">
                                                    <div class="col">
                                                        <p class="fs-4">
                                                            <a>Status Buku : </a>
                                                        </p>
                                                    </div>
                                                    {{-- Radios form check --}}
                                                    <div class="col">
                                                        <div class="form-check">
                                                            <input class="form-check-input mt-2" type="radio"
                                                                style="width: 20px; height: 20px;" name="flexRadioDefault"
                                                                id="flexRadioDefault1">
                                                            <label class="form-check-label fs-4" for="flexRadioDefault1">
                                                                Baik
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="form-check">
                                                            <input class="form-check-input mt-2" type="radio"
                                                                style="width: 20px; height: 20px;" name="flexRadioDefault"
                                                                id="flexRadioDefault1">
                                                            <label class="form-check-label fs-4" for="flexRadioDefault1">
                                                                Rusak
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="form-check">
                                                            <input class="form-check-input mt-2" type="radio"
                                                                style="width: 20px; height: 20px;" name="flexRadioDefault"
                                                                id="flexRadioDefault1">
                                                            <label class="form-check-label fs-4" for="flexRadioDefault1">
                                                                Telat
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="form-check">
                                                            <input class="form-check-input mt-2" type="radio"
                                                                style="width: 20px; height: 20px;" name="flexRadioDefault"
                                                                id="flexRadioDefault1">
                                                            <label class="form-check-label fs-4" for="flexRadioDefault1">
                                                                Hilang
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col col-10 text-start fs-4"><label class="labels">Catatan
                                                    :</label>
                                                <textarea class="form-control rounded-md border-dark fs-5" placeholder="Masukkan Deskripsi Buku"
                                                    id="exampleFormControlTextarea1" rows="5"></textarea>
                                            </div>
                                            <div class="col col-10 text-start fs-4 mb-2 mt-2">
                                                <label class="labels">Denda : </label>
                                                <div class="input-group">
                                                    <span class="input-group-text border border-dark"
                                                        id="basic-addon1">Rp.</span>
                                                    <x-input type="text" class="form-control fs-5"
                                                        placeholder="Masukkan denda" value="" />
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

        {{-- Selesai button --}}
        <div class=" mb-4 text-center">
            <x-button class="">
                Selesai
            </x-button>
        </div>

    </div>
    </div>

    </html>
@endsection
