@extends('layout.app')

@section('content')
    <html>

    <body style="">

        <div class="container rounded bg-white mt-5 mb-5">

            <div class="border-right">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-center align-items-center mb-3">
                        <h1 class="mb-3" style="font-size:48px">Edit Buku</h1>
                    </div>

                    <div class="profile-pic-wrapper">
                        <div class="pic-holder" style="border-radius: 0px; width: 150px; height: 200px;">
                            <!-- uploaded pic shown here -->
                            <img id="profilePic" class="pic"
                                src="https://source.unsplash.com/random/150x200?book">

                            <Input class="uploadProfileInput" type="file" name="profile_pic" id="newProfilePhoto"
                                accept="image/*" style="opacity: 0;" />
                            <label for="newProfilePhoto" class="upload-file-block">
                                <div class="text-center">
                                    <div class="mb-2">
                                        <i class="fa fa-camera fa-2x"></i>
                                    </div>
                                    <div class="text-uppercase">
                                        Change <br /> Book Cover
                                    </div>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="row mt-2">
                        <div class="col-md-6"><label class="labels">Judul Buku</label>
                            <x-input type="text" class="form-control" placeholder="Masukkan Judul Buku" value="" />
                        </div>
                        <div class="col-md-6"><label class="labels">Penerbit</label>
                            <x-input type="text" class="form-control" value="" placeholder="Masukkan Penerbit" />
                        </div>
                    </div>

                    <div class="row mt-2">
                        <div class="col-md-6"><label class="labels">ISBN</label>
                            <x-input type="text" class="form-control" placeholder="Masukkan ISBN" value="" />
                        </div>
                        <div class="col-md-6"><label class="labels">Tahun Terbit</label>
                            <x-input type="text" class="form-control" value="" placeholder="Masukkan Tahun Terbit" />
                        </div>
                    </div>

                    <div class="row mt-2">
                        <div class="col-md-6"><label class="labels">Penulis</label>
                            <x-input type="text" class="form-control" placeholder="Masukkan Penulis" value="" />
                        </div>
                        <div class="col-md-6"><label class="labels">Stok</label>
                            <x-input type="text" class="form-control" value="" placeholder="Qty" />
                        </div>
                    </div>

                    <div class="col-md-12 mt-4"><label class="labels">Deskripsi Buku</label>
                        <textarea class="form-control rounded-md border-dark" placeholder="Masukkan Deskripsi Buku"
                            id="exampleFormControlTextarea1" rows="5"></textarea>
                    </div>

                    <div class="mt-5 text-center">
                        <x-button class="">
                            SIMPAN
                        </x-button>
                    </div>
                </div>
            </div>

        </div>
    </body>

    </html>
@endsection
