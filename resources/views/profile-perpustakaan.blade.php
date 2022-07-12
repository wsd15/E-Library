@extends('layout.app')

@section('content')

<html>

<body style="">

    <div class="container rounded bg-white mt-5 mb-5">
        <form action="/profile-perpustakaan" method="POST" enctype="multipart/form-data">
            @csrf
            <div class=" border-right">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-center align-items-center mb-3">
                        <h1 class="text-center mb-3" style="font-size:3vw">Profile Perpustakaan</h1>
                    </div>

                    
                    @if(!is_null($perpustakaan->foto_perpustakaan))

                    

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
                    
                        <x-input type="text" class="form-control"  name="nama_perpustakaan" placeholder="Nama Perpustakaan" value="{{ $perpustakaan->nama_perpustakaan }}" disabled/>
                       
                </div>
                <div class="col-md-6"><label class="labels">Nomor Telepon Perpustakaan</label>
                    <x-input type="text" class="form-control" name="phonenumber_perpustakaan"  value="{{ $perpustakaan->phonenumber_perpustakaan }}" placeholder="Nomor Telepon Perpustakaan" disabled/>
                </div>
            </div>

            <div class="row mt-2">


                <div class="col-md-6"><label class="labels mt-2">Email Perpustakaan</label>
                    <x-input type="text" class="form-control" name="email_perpustakaan" placeholder="Email Perpustakaan" value="{{ $perpustakaan->email_perpustakaan }}" disabled/>
                </div>
                <div class="col-md-6"><label class="labels mt-2">Alamat Perpustakaan</label>
                    <x-input type="text" class="form-control" name="alamat_perpustakaan" placeholder="Alamat Perpustakaan" value="{{ $perpustakaan->alamat_perpustakaan }}" disabled/>
                </div>

            </div>

            <div class="row mt-2">
                <div class="col-md-6"><label class="labels mt-2">Kota</label>
                    <x-input type="text" class="form-control" placeholder="Kota" value="{{ $perpustakaan->Kota }}" name="Kota" disabled/>
                </div>
                <div class="col-md-6"><label class="labels mt-2">Link Google Maps</label>
                    <x-input type="text" class="form-control" placeholder="ex : https://goo.gl/maps/*****" value="{{ $perpustakaan->link_google_maps }}" nama="link_google_maps" disabled/>
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

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio"  name="status_donasi" id="inlineRadio1"
                        value="Tidak">
                        <label class="form-check-label" for="inlineRadio1">Tidak</label>
                    </div>

                    @else 

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio"  name="status_donasi" id="inlineRadio1"
                        value="Ya">
                        <label class="form-check-label" for="inlineRadio1">Ya</label>
                    </div>

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

            





    <div class="container mt-5 text-center">

       
          
        

        <x-button class="mb-5" >
            Simpan
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
