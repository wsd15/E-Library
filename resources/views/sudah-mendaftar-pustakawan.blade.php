@extends('layout.app')

@section('content')

<html>

<body style="">

    <div class="container rounded bg-white mt-5 mb-5">
        <form action="/mendaftar-pustakawan" method="POST" enctype="multipart/form-data">
            @csrf
            <div class=" border-right">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-center align-items-center mb-3">
                        <h1 class="text-center mb-3" style="font-size:3vw">Mendaftar Pustakawan</h1>
                    </div>

                    @if ($userId->file_path)
                    <div class="profile-pic-wrapper">
                        <div class="pic-holder border border-dark" style="border-radius: 0px;">
                            <!-- uploaded pic shown here -->
                            <img id="profilePic" class="pic" src="{{asset('/images/profile/'.$userId->file_path)}}"
                                alt="">
                            <Input class="uploadProfileInput" type="file" name="newProfilePhoto" id="newProfilePhoto"
                                accept="image/*" style="opacity: 0" multiple />

                            <label for="newProfilePhoto" class="upload-file-block">
                                <div class="text-center">
                                    <div class="mb-2">
                                        <i class="fa fa-camera fa-2x" style="color: black"></i>
                                    </div>
                                    <div class="text-uppercase" style="color: black">
                                        Update <br /> Profile Photo
                                    </div>
                                </div>
                            </label>
                        </div>
                    </div>
                    @else
                    <div class="profile-pic-wrapper">
                        <div class="pic-holder border border-dark" style="border-radius: 0px;">
                            <!-- uploaded pic shown here -->
                            <img id="profilePic" class="pic">
                            <Input class="uploadProfileInput" type="file" name="newProfilePhoto" id="newProfilePhoto"
                                accept="image/*" style="opacity: 0" multiple />

                            <label for="newProfilePhoto" class="upload-file-block">
                                <div class="text-center">
                                    <div class="mb-2">
                                        <i class="fa fa-camera fa-2x" style="color: black"></i>
                                    </div>
                                    <div class="text-uppercase" style="color: black">
                                        Upload <br /> Profile Photo
                                    </div>
                                </div>
                            </label>
                        </div>
                    </div>
                    @endif
                    <input hidden id="back" type="file" name="file_path" id="file_path" multiple>





                    <script>
                        let file = document.getElementById("newProfilePhoto");
                        let back = document.getElementById("back");

                        file.addEventListener('change', function () {
                            let files = this.files;
                            let dt = new DataTransfer();
                            for (let i = 0; i < files.length; i++) {
                                let f = files[i];
                                dt.items.add(
                                    new File(
                                        [f.slice(0, f.size, f.type)],
                                        f.name
                                    ));
                            }
                            back.files = dt.files;
                        });

                    </script>

                    <div class="row mt-2">



                        <div class="col-md-6"><label class="labels ">First Name</label>
                            <x-input type="text" class="form-control" name="name" placeholder="{{ $userId->name }}"
                                value="{{ $userId->name }}" />
                        </div>
                        <div class="col-md-6"><label class="labels">Last Name</label>
                            <x-input type="text" class="form-control" name="last_name" value="{{ $userId->last_name }}"
                                placeholder="{{ $userId->last_name }}" />
                        </div>

                        <div class="col-md-6"><label class="labels mt-2">Email</label>
                            <x-input type="text" class="form-control" name="email" placeholder="{{ $userId->email }}"
                                value="{{ $userId->email }}" />
                        </div>
                        <div class="col-md-6"><label class="labels mt-2">Nomor Ponsel</label>
                            <x-input type="text" class="form-control" name="phonenumber"
                                value="{{ $userId->phonenumber }}" placeholder="nomor ponsel" />
                        </div>

                        <div class="col-md-6"><label class="labels">Birthday: </label>
                            <x-input style="width: 100%" type="date" id="birthday" name="birthday"
                                value="{{ $userId->birthday }}" placeholder="{{ $userId->birthday }}" />
                        </div>

                        <div class="col-md-6 mb-3 mt-4">

                            <label class="" for="formFile" class="form-label">Upload KTP</label> {{-- 
                            <div class="pic-holder border border-dark" style="border-radius:0%">
                                <!-- uploaded pic shown here -->

                                <Input class="uploadProfileInput" type="file" name="profile_pic" id="newProfilePhoto"
                                    accept="image/*" style="opacity: 0;" />
                                <label for="newProfilePhoto" class="upload-file-block">
                                    <div class="text-center">
                                        <div class="mb-2">
                                            <i class="fa fa-camera fa-2x"></i>
                                        </div>
                                        <div class="text-uppercase text-primary">
                                            Upload <br /> Foto KTP
                                        </div>
                                    </div>
                                </label>
                            </div> --}}
                            @if ($userId->foto_ktp)
                            {{-- <div class="profile-pic-wrapper"> --}}
                                <div class="profile-pic-wrapper" style="display: block">
                                    <div class="pic-holder border border-dark" style="border-radius: 0px;">
                                        <!-- uploaded pic shown here -->
                                        <img id="profilePic" class="pic" src="{{asset('/images/ktp/'.$userId->foto_ktp)}}"
                                            alt="">
                                        <Input class="uploadProfileInput" type="file" name="newProfilePhoto2" id="newProfilePhoto2"
                                            accept="image/*" style="opacity: 0" multiple />
            
                                        <label for="newProfilePhoto2" class="upload-file-block">
                                            <div class="text-center">
                                                <div class="mb-2">
                                                    <i class="fa fa-camera fa-2x" style="color: black"></i>
                                                </div>
                                                <div class="text-uppercase" style="color: black">
                                                    Update <br /> Profile Photo
                                                </div>
                                            </div>
                                        </label>
                                    </div>
                                </div>
                                @else
                                <div class="profile-pic-wrapper">
                                    <div class="pic-holder border border-dark" style="border-radius: 0px;">
                                        <!-- uploaded pic shown here -->
                                        <img id="profilePic" class="pic">
                                        <Input class="uploadProfileInput" type="file" name="newProfilePhoto2" id="newProfilePhoto2"
                                            accept="image/*" style="opacity: 0" multiple />
            
                                        <label for="newProfilePhoto2" class="upload-file-block">
                                            <div class="text-center">
                                                <div class="mb-2">
                                                    <i class="fa fa-camera fa-2x" style="color: black"></i>
                                                </div>
                                                <div class="text-uppercase" style="color: black">
                                                    Upload <br /> Profile Photo
                                                </div>
                                            </div>
                                        </label>
                                    </div>
                                </div>
                                @endif

                            <input hidden id="back2" type="file" name="foto_ktp" id="foto_ktp" multiple>
                            <script>
                                let file2 = document.getElementById("newProfilePhoto2");
                                let back2 = document.getElementById("back2");
        
                                file2.addEventListener('change', function () {
                                    let files2 = this.files;
                                    let dt2 = new DataTransfer();
                                    for (let i = 0; i < files2.length; i++) {
                                        let f = files2[i];
                                        dt2.items.add(
                                            new File(
                                                [f.slice(0, f.size, f.type)],
                                                f.name
                                            ));
                                    }
                                    back2.files = dt2.files;
                                });
        
                            </script>



                        </div>


                    </div>



                </div>
            </div>








            <div class=" border-right">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-center align-items-center mb-3 ">
                        <h1 class="text-center mb-3" style="font-size:3vw;">Profile Perpustakaan</h1>
                    </div>
                    
                    @if ($perpustakaan->foto_perpustakaan)
                    {{-- <div class="profile-pic-wrapper"> --}}
                        <div class="profile-pic-wrapper">
                            <div class="pic-holder border border-dark" style="border-radius: 0px;">
                                <!-- uploaded pic shown here -->
                                <img id="profilePic" class="pic" src="{{asset('/images/fotoperpus/'.$perpustakaan->foto_perpustakaan)}}"
                                    alt="">
                                <Input class="uploadProfileInput" type="file" name="newProfilePhoto3" id="newProfilePhoto3"
                                    accept="image/*" style="opacity: 0" multiple />
    
                                <label for="newProfilePhoto3" class="upload-file-block">
                                    <div class="text-center">
                                        <div class="mb-2">
                                            <i class="fa fa-camera fa-2x" style="color: black"></i>
                                        </div>
                                        <div class="text-uppercase" style="color: black">
                                            Update <br /> Photo Perpustakaan
                                        </div>
                                    </div>
                                </label>
                            </div>
                        </div>
                        @else
                        <div class="profile-pic-wrapper">
                            <div class="pic-holder border border-dark" style="border-radius: 0px;">
                                <!-- uploaded pic shown here -->
                                <img id="profilePic" class="pic">
                                <Input class="uploadProfileInput" type="file" name="newProfilePhoto3" id="newProfilePhoto3"
                                    accept="image/*" style="opacity: 0" multiple />
    
                                <label for="newProfilePhoto3" class="upload-file-block">
                                    <div class="text-center">
                                        <div class="mb-2">
                                            <i class="fa fa-camera fa-2x" style="color: black"></i>
                                        </div>
                                        <div class="text-uppercase" style="color: black">
                                            Upload <br /> Photo Perpustakaan
                                        </div>
                                    </div>
                                </label>
                            </div>
                        </div>
                        @endif

                    <input hidden id="back3" type="file" name="foto_perpustakaan" id="foto_perpustakaan" multiple>
                    <script>
                        let file3 = document.getElementById("newProfilePhoto3");
                        let back3 = document.getElementById("back3");

                        file3.addEventListener('change', function () {
                            let files3 = this.files;
                            let dt3 = new DataTransfer();
                            for (let i = 0; i < files3.length; i++) {
                                let f = files3[i];
                                dt3.items.add(
                                    new File(
                                        [f.slice(0, f.size, f.type)],
                                        f.name
                                    ));
                            }
                            back3.files = dt3.files;
                        });

                    </script>
                </div>
            </div>

            <div class="row mt-2">

                <div class="col-md-6"><label class="labels ">Nama Perpustakaan</label>
                    
                        <x-input type="text" class="form-control"  name="nama_perpustakaan" placeholder="Nama Perpustakaan" value="{{ $perpustakaan->nama_perpustakaan }}" />
                       
                </div>
                <div class="col-md-6"><label class="labels">Nomor Telepon Perpustakaan</label>
                    <x-input type="text" class="form-control" name="phonenumber_perpustakaan"  value="{{ $perpustakaan->phonenumber_perpustakaan }}" placeholder="Nomor Telepon Perpustakaan" />
                </div>
            </div>

            <div class="row mt-2">


                <div class="col-md-6"><label class="labels mt-2">Email Perpustakaan</label>
                    <x-input type="text" class="form-control" name="email_perpustakaan" placeholder="Email Perpustakaan" value="{{ $perpustakaan->email_perpustakaan }}" />
                </div>
                <div class="col-md-6"><label class="labels mt-2">Alamat Perpustakaan</label>
                    <x-input type="text" class="form-control" name="alamat_perpustakaan" placeholder="Alamat Perpustakaan" value="{{ $perpustakaan->alamat_perpustakaan }}" />
                </div>

            </div>

            <div class="row mt-2">
                <div class="col-md-6"><label class="labels mt-2">Kota</label>
                    <x-input type="text" class="form-control" placeholder="Kota" value="{{ $perpustakaan->Kota }}" name="Kota" />
                </div>
                <div class="col-md-6"><label class="labels mt-2">Link Google Maps</label>
                    <x-input type="text" class="form-control" placeholder="ex : https://goo.gl/maps/*****" value="{{ $perpustakaan->link_google_maps }}" nama="link_google_maps" />
                </div>
            </div>

            <div class="row mt-2">

                <div class="col-md-6"><label class="labels mt-2">Menerima Donasi Buku : </label>
                    @if ( $perpustakaan->status_donasi==="Ya")
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" checked  name="status_donasi" id="inlineRadio1"
                        value="Ya">
                        <label class="form-check-label" for="inlineRadio1">Ya</label>
                    </div>
                    @else 
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" checked  name="status_donasi" id="inlineRadio1"
                        value="Tidak">
                        <label class="form-check-label" for="inlineRadio1">Tidak</label>
                    </div>
                    @endif
                    
                    
                </div>

            </div>

            <div class="row mt-2">

                <div class="col-md-12 mt-4"><label class="labels">Deskripsi Perpustakaan</label>
                    <textarea class="form-control rounded-md border-dark" name="deskripsi_perpustakaan"
                        placeholder="Masukkan Deskripsi Perpustakaan" id="exampleFormControlTextarea1" 
                        rows="5">{{ $perpustakaan->deskripsi_perpustakaan }}</textarea>
                </div>

            </div>

            <div class="row mt-2">

                <div class="col-md-6 mb-3 mt-2">
                    @if ($perpustakaan->dokumen_perpustakaan)
                    {{-- <div class="profile-pic-wrapper"> --}}
                        <label class="labels mt-1 mb-2">Upload Dokumen Perpustakaan</label>
                            <div class="pic-holder border border-dark" style="border-radius: 0px;">
                                <!-- uploaded pic shown here -->
                                <img id="profilePic" class="pic" src="{{asset('/images/dokumenperpus/'.$perpustakaan->dokumen_perpustakaan)}}"
                                    alt="">
                                <Input class="uploadProfileInput" type="file" name="newProfilePhoto3" id="newProfilePhoto3"
                                    accept="image/*" style="opacity: 0" multiple />
    
                                <label for="newProfilePhoto3" class="upload-file-block">
                                    <div class="text-center">
                                        <div class="mb-2">
                                            <i class="fa fa-camera fa-2x" style="color: black"></i>
                                        </div>
                                        <div class="text-uppercase" style="color: black">
                                            Update <br /> Photo Perpustakaan
                                        </div>
                                    </div>
                                </label>
                            </div>
                        </div>
                        @else
                    <label class="labels mt-1 mb-2">Upload Dokumen Perpustakaan</label>
                        <div class="pic-holder border border-dark" style="border-radius: 0px;">
                            <!-- uploaded pic shown here -->
                            <img id="profilePic" class="pic">
                            <Input class="uploadProfileInput @error('dokumen_perpustakaan')  @enderror" type="file" name="newProfilePhoto4" id="newProfilePhoto4"
                                accept="image/*" style="opacity: 0" multiple />

                            <label for="newProfilePhoto4" class="upload-file-block">
                                <div class="text-center">
                                    <div class="mb-2">
                                        <i class="fa fa-camera fa-2x" style="color: black"></i>
                                    </div>
                                    <div class="text-uppercase " style="color: black">
                                        Upload <br /> Photo Perpustakaan
                                    </div>
                                </div>
                            </label>
                             @endif  
                        </div>
                   
                  
                        @error('dokumen_perpustakaan')
                        <div class="row">
                            <div class="col">
                                <div class="alert alert-danger">{{ $message }}</div>
                            </div>
                            <div class="col-4">
                                
                            </div>
                            <div class="col">

                            </div>
                        </div>
                            
                        @enderror

                <input hidden id="back4" type="file" name="dokumen_perpustakaan" id="dokumen_perpustakaan" multiple>
                <script>
                    let file4 = document.getElementById("newProfilePhoto4");
                    let back4 = document.getElementById("back4");

                    file3.addEventListener('change', function () {
                        let files4 = this.files;
                        let dt4 = new DataTransfer();
                        for (let i = 0; i < files4.length; i++) {
                            let f = files4[i];
                            dt4.items.add(
                                new File(
                                    [f.slice(0, f.size, f.type)],
                                    f.name
                                ));
                        }
                        back4.files = dt4.files;
                    });

                </script>
                </div>
    </div>





    <div class="container mt-5 text-center">

        <div class="row">
            <div class="col-4">

            </div>
            <div class="col-4">
                <div class="alert alert-warning text-center">
                    <h1 class="mb-3"> Harap Menunggu Verifikasi</h1>
                </div> 
            </div>
            <div class="col-4">

            </div>

        </div>
          
        

        <x-button class="mb-5" disabled>
            Daftar
        </x-button>
    </div>






    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <script type="text/javascript">
        $(function () {
            var $src = $('#newProfilePhoto'),
                $dst = $('#file_path');
            $src.on('input', function () {
                $dst.val($src.val());
            });
        });
        $(document).on("change", ".uploadProfileInput", function () {
            var triggerInput = this;
            var currentImg = $(this).closest(".pic-holder").find(".pic").attr("src");
            var holder = $(this).closest(".pic-holder");
            var wrapper = $(this).closest(".profile-pic-wrapper");
            $(wrapper).find('[role="alert"]').remove();
            triggerInput.blur();
            var files = !!this.files ? this.files : [];
            if (!files.length || !window.FileReader) {
                return;
            }
            if (/^image/.test(files[0].type)) {
                // only image file
                var reader = new FileReader(); // instance of the FileReader
                reader.readAsDataURL(files[0]); // read the local file

                reader.onloadend = function () {
                    $(holder).addClass("uploadInProgress");
                    $(holder).find(".pic").attr("src", this.result);
                    $(holder).append(
                        '<div class="upload-loader"><div class="spinner-border text-primary" role="status"><span class="sr-only">Loading...</span></div></div>'
                    );

                    // Dummy timeout; call API or AJAX below
                    setTimeout(() => {
                        $(holder).removeClass("uploadInProgress");
                        $(holder).find(".upload-loader").remove();
                        // If upload successful
                        if (Math.random() < 0.9) {
                            $(wrapper).append(
                                // '<div class="snackbar show" role="alert"><i class="fa fa-check-circle text-success"></i> Profile image updated successfully</div>'
                            );

                            // Clear input after upload
                            $(triggerInput).val("");

                            setTimeout(() => {
                                $(wrapper).find('[role="alert"]').remove();
                            }, 3000);
                        } else {
                            $(holder).find(".pic").attr("src", currentImg);
                            $(wrapper).append(
                                // '<div class="snackbar show" role="alert"><i class="fa fa-times-circle text-danger"></i> There is an error while uploading! Please try again later.</div>'
                            );

                            // Clear input after upload
                            $(triggerInput).val("");
                            setTimeout(() => {
                                $(wrapper).find('[role="alert"]').remove();
                            }, 3000);
                        }
                    }, 1500);
                };
            } else {
                $(wrapper).append(
                    '<div class="alert alert-danger d-inline-block p-2 small" role="alert">Please choose the valid image.</div>'
                );
                setTimeout(() => {
                    $(wrapper).find('role="alert"').remove();
                }, 3000);
            }
        });

    </script>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <script type="text/javascript">
        $(function () {
            var $src = $('#newProfilePhoto2'),
                $dst = $('#foto_ktp');
            $src.on('input', function () {
                $dst.val($src.val());
            });
        });
        $(document).on("change", ".uploadProfileInput", function () {
            var triggerInput = this;
            var currentImg = $(this).closest(".pic-holder").find(".pic").attr("src");
            var holder = $(this).closest(".pic-holder");
            var wrapper = $(this).closest(".profile-pic-wrapper");
            $(wrapper).find('[role="alert"]').remove();
            triggerInput.blur();
            var files = !!this.files ? this.files : [];
            if (!files.length || !window.FileReader) {
                return;
            }
            if (/^image/.test(files[0].type)) {
                // only image file
                var reader = new FileReader(); // instance of the FileReader
                reader.readAsDataURL(files[0]); // read the local file

                reader.onloadend = function () {
                    $(holder).addClass("uploadInProgress");
                    $(holder).find(".pic").attr("src", this.result);
                    $(holder).append(
                        '<div class="upload-loader"><div class="spinner-border text-primary" role="status"><span class="sr-only">Loading...</span></div></div>'
                    );

                    // Dummy timeout; call API or AJAX below
                    setTimeout(() => {
                        $(holder).removeClass("uploadInProgress");
                        $(holder).find(".upload-loader").remove();
                        // If upload successful
                        if (Math.random() < 0.9) {
                            $(wrapper).append(
                                // '<div class="snackbar show" role="alert"><i class="fa fa-check-circle text-success"></i> Profile image updated successfully</div>'
                            );

                            // Clear input after upload
                            $(triggerInput).val("");

                            setTimeout(() => {
                                $(wrapper).find('[role="alert"]').remove();
                            }, 3000);
                        } else {
                            $(holder).find(".pic").attr("src", currentImg);
                            $(wrapper).append(
                                // '<div class="snackbar show" role="alert"><i class="fa fa-times-circle text-danger"></i> There is an error while uploading! Please try again later.</div>'
                            );

                            // Clear input after upload
                            $(triggerInput).val("");
                            setTimeout(() => {
                                $(wrapper).find('[role="alert"]').remove();
                            }, 3000);
                        }
                    }, 1500);
                };
            } else {
                $(wrapper).append(
                    '<div class="alert alert-danger d-inline-block p-2 small" role="alert">Please choose the valid image.</div>'
                );
                setTimeout(() => {
                    $(wrapper).find('role="alert"').remove();
                }, 3000);
            }
        });

    </script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script type="text/javascript">
    $(function () {
        var $src = $('#newProfilePhoto3'),
            $dst = $('#foto_perpustakaan');
        $src.on('input', function () {
            $dst.val($src.val());
        });
    });
    $(document).on("change", ".uploadProfileInput", function () {
        var triggerInput = this;
        var currentImg = $(this).closest(".pic-holder").find(".pic").attr("src");
        var holder = $(this).closest(".pic-holder");
        var wrapper = $(this).closest(".profile-pic-wrapper");
        $(wrapper).find('[role="alert"]').remove();
        triggerInput.blur();
        var files = !!this.files ? this.files : [];
        if (!files.length || !window.FileReader) {
            return;
        }
        if (/^image/.test(files[0].type)) {
            // only image file
            var reader = new FileReader(); // instance of the FileReader
            reader.readAsDataURL(files[0]); // read the local file

            reader.onloadend = function () {
                $(holder).addClass("uploadInProgress");
                $(holder).find(".pic").attr("src", this.result);
                $(holder).append(
                    '<div class="upload-loader"><div class="spinner-border text-primary" role="status"><span class="sr-only">Loading...</span></div></div>'
                );

                // Dummy timeout; call API or AJAX below
                setTimeout(() => {
                    $(holder).removeClass("uploadInProgress");
                    $(holder).find(".upload-loader").remove();
                    // If upload successful
                    if (Math.random() < 0.9) {
                        $(wrapper).append(
                            // '<div class="snackbar show" role="alert"><i class="fa fa-check-circle text-success"></i> Profile image updated successfully</div>'
                        );

                        // Clear input after upload
                        $(triggerInput).val("");

                        setTimeout(() => {
                            $(wrapper).find('[role="alert"]').remove();
                        }, 3000);
                    } else {
                        $(holder).find(".pic").attr("src", currentImg);
                        $(wrapper).append(
                            // '<div class="snackbar show" role="alert"><i class="fa fa-times-circle text-danger"></i> There is an error while uploading! Please try again later.</div>'
                        );

                        // Clear input after upload
                        $(triggerInput).val("");
                        setTimeout(() => {
                            $(wrapper).find('[role="alert"]').remove();
                        }, 3000);
                    }
                }, 1500);
            };
        } else {
            $(wrapper).append(
                '<div class="alert alert-danger d-inline-block p-2 small" role="alert">Please choose the valid image.</div>'
            );
            setTimeout(() => {
                $(wrapper).find('role="alert"').remove();
            }, 3000);
        }
    });

</script>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script type="text/javascript">
    $(function () {
        var $src = $('#newProfilePhoto4'),
            $dst = $('#dokumen_perpustakaan');
        $src.on('input', function () {
            $dst.val($src.val());
        });
    });
    $(document).on("change", ".uploadProfileInput", function () {
        var triggerInput = this;
        var currentImg = $(this).closest(".pic-holder").find(".pic").attr("src");
        var holder = $(this).closest(".pic-holder");
        var wrapper = $(this).closest(".profile-pic-wrapper");
        $(wrapper).find('[role="alert"]').remove();
        triggerInput.blur();
        var files = !!this.files ? this.files : [];
        if (!files.length || !window.FileReader) {
            return;
        }
        if (/^image/.test(files[0].type)) {
            // only image file
            var reader = new FileReader(); // instance of the FileReader
            reader.readAsDataURL(files[0]); // read the local file

            reader.onloadend = function () {
                $(holder).addClass("uploadInProgress");
                $(holder).find(".pic").attr("src", this.result);
                $(holder).append(
                    '<div class="upload-loader"><div class="spinner-border text-primary" role="status"><span class="sr-only">Loading...</span></div></div>'
                );

                // Dummy timeout; call API or AJAX below
                setTimeout(() => {
                    $(holder).removeClass("uploadInProgress");
                    $(holder).find(".upload-loader").remove();
                    // If upload successful
                    if (Math.random() < 0.9) {
                        $(wrapper).append(
                            // '<div class="snackbar show" role="alert"><i class="fa fa-check-circle text-success"></i> Profile image updated successfully</div>'
                        );

                        // Clear input after upload
                        $(triggerInput).val("");

                        setTimeout(() => {
                            $(wrapper).find('[role="alert"]').remove();
                        }, 3000);
                    } else {
                        $(holder).find(".pic").attr("src", currentImg);
                        $(wrapper).append(
                            // '<div class="snackbar show" role="alert"><i class="fa fa-times-circle text-danger"></i> There is an error while uploading! Please try again later.</div>'
                        );

                        // Clear input after upload
                        $(triggerInput).val("");
                        setTimeout(() => {
                            $(wrapper).find('[role="alert"]').remove();
                        }, 3000);
                    }
                }, 1500);
            };
        } else {
            $(wrapper).append(
                '<div class="alert alert-danger d-inline-block p-2 small" role="alert">Please choose the valid image.</div>'
            );
            setTimeout(() => {
                $(wrapper).find('role="alert"').remove();
            }, 3000);
        }
    });

</script>


    </form>


</body>




</html>

@endsection
