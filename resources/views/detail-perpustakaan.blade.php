@extends('layout.app')

@section('content')

<html>

<body style="">

    <div class="container rounded bg-white mt-5 mb-5">
        {{-- <form action="/profile-perpustakaan" method="POST" enctype="multipart/form-data"> --}}
            @csrf
            <div class=" border-right">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-center align-items-center mb-3">
                        <h1 class="text-center mb-3" style="font-size:3vw">Detail Perpustakaan</h1>
                    </div>

                    
                    @if(is_null($perpustakaan->foto_perpustakaan))

                    <div class="profile-pic-wrapper">
                        <div class="pic-holder border border-dark" style="border-radius: 0px;">
                            <!-- uploaded pic shown here -->
                            <img id="profilePic" class="pic">
                            <Input class="uploadProfileInput" type="file" name="newProfilePhoto3" id="newProfilePhoto3"
                                accept="image/*" style="opacity: 0" multiple disabled/>

                           
                        </div>
                    </div>
                        
                    @else
                    
                        <div class="profile-pic-wrapper">
                            <div class="pic-holder border border-dark" style="border-radius: 0px;">
                                <!-- uploaded pic shown here -->
                                <img id="profilePic" class="pic" src="{{asset('/images/fotoperpus/'.$perpustakaan->foto_perpustakaan)}}"
                                    alt="">
                                <Input class="uploadProfileInput" type="file" name="newProfilePhoto3" id="newProfilePhoto3"
                                    accept="image/*" style="opacity: 0" multiple disabled/>
    
                                
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
                    
                        <x-input type="text" class="form-control"  name="nama_perpustakaan" placeholder="Nama Perpustakaan" value="{{ $perpustakaan->nama_perpustakaan }}" disabled/>
                       
                </div>
                <div class="col-md-6"><label class="labels">Nomor Telepon Perpustakaan</label>
                    <x-input type="text" class="form-control" name="phonenumber_perpustakaan"  value="{{ $perpustakaan->phonenumber_perpustakaan }}" placeholder="Nomor Telepon Perpustakaan" disabled/>
                </div>
            </div>

            <div class="row mt-2">


                <div class="col-md-6"><label class="labels mt-2">Email Perpustakaan</label>
                    <x-input type="text" class="form-control" name="email_perpustakaan" placeholder="Email Perpustakaan" value="{{ $perpustakaan->email_perpustakaan }}" disabled/>
                
                        @if ( $perpustakaan->status_donasi==="Ya")
                        <div>
                        <label class="labels mt-2">Ingin Berdonasi? </label>
                            
                            
                            <br>
                        
                                <x-button class="ms-5 " style="text-center">
                                    Ya
                                </x-button>
                                 
                            
                            
                        
                            </div>
                        @else
        
                        <label class="labels mt-2">Alamat Perpustakaan</label>
                            {{-- <x-input type="text" class="form-control" name="alamat_perpustakaan" placeholder="Alamat Perpustakaan" value="{{ $perpustakaan->alamat_perpustakaan }}" disabled/> --}}
                                <textarea class="form-control rounded-md border-dark" name="deskripsi_perpustakaan"
                                placeholder="Masukkan Deskripsi Perpustakaan" id="exampleFormControlTextarea1" 
                                rows="4" disabled>{{ $perpustakaan->alamat_perpustakaan }}</textarea>
                        
        
                        @endif


                        @if ( $perpustakaan->status_donasi==="Ya")

                       


                            <label class="labels mt-2">Alamat Perpustakaan</label>
                                {{-- <x-input type="text" class="form-control" name="alamat_perpustakaan" placeholder="Alamat Perpustakaan" value="{{ $perpustakaan->alamat_perpustakaan }}" disabled/> --}}
                                    <textarea class="form-control rounded-md border-dark" name="deskripsi_perpustakaan"
                                    placeholder="Masukkan Deskripsi Perpustakaan" id="exampleFormControlTextarea1" 
                                    rows="4" disabled>{{ $perpustakaan->alamat_perpustakaan }}</textarea>
                           
            
                            
            
                      
                        @endif
                
                
                </div>

                <div class="col-md-6"><label class="labels mt-2">GANTI FOTO</label>
                    
                        @foreach(explode('+', $perpustakaan->nama_perpustakaan) as $fields) 
                        <div class="mapouter">
                            
                
                            <div class="gmap_canvas">
                                    <iframe width="600" height="300" id="gmap_canvas" 
                                    src="https://maps.google.com/maps?q={{$fields}}&t=&z=19&ie=UTF8&iwloc=&output=embed" 
                                    frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
                                    </iframe>
                            <br>
                                    <style>.mapouter{position:relative;text-align:right;height:300px;width:600px;}</style>
                            <a href="https://www.embedgooglemap.net">google maps plugin html</a><style>.gmap_canvas 
                            {overflow:hidden;background:none!important;height:300px;width:600px;}</style>
                            </div>
                        </div>
                        @endforeach


                </div>
               

            </div>

          
                

                

                
         
            
            <div class="row mt-2">

                <div class="col-md-12 mt-4"><label class="labels">Deskripsi Perpustakaan</label>
                    <textarea class="form-control rounded-md border-dark" name="deskripsi_perpustakaan"
                        placeholder="Masukkan Deskripsi Perpustakaan" id="exampleFormControlTextarea1" 
                        rows="5" disabled>{{ $perpustakaan->deskripsi_perpustakaan }}</textarea>
                </div>

            </div>

            





    <div class="container mt-5 text-center">

       
        <div class="row mt-2 row-cols-3 mb-5">
            @foreach ($buku as $key => $bukus)
            <div class="col mt-5 d-flex align-items-stretch justify-content-center">
                <div class="card" style="width: 17rem;">
                    <img class="mt-4" src="{{asset('/images/buku/'.$bukus->file_path)}}"
                        style="width:12vw;height: 16vw;align-self: center" class="card-img-top" alt="...">
                    <div class="card-body d-flex flex-column">
                        <b class="card-title text-center">{{ $bukus->nama_buku }}</b>
                        <p class="card-text text-center">{{ $bukus->penulis }}</p>
                        <p class="card-text text-center ">{{ $bukus->Kota }}</p>
                        {{-- <p>{{ $buku->perpuslong }}</p> --}}
                        <div class="d-flex justify-content-center" style="margin-top: auto">
                            <a href="{{url('/detail-buku/'.$bukus->id)}}">
                                <x-button class=" align-self-end" id="button1" style="align-self: center;">
                                    {{ __('Detail Buku') }}
                                </x-button>
                                <style>
                                    #button1 {   
                                        font-size: 3vw;
                                        
                                    }
                                @media (min-width: 720px) { /* or 301 if you want really the same as previously.  */
                                    #button1 {   
                                        font-size: 1.4vw;
                                        
                                    }
                                }
                                </style>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
        {{-- buat row 2-3-4-5-6 --}}
        <div class="mb-4">{{ $buku->links() }}</div>

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


    {{-- </form> --}}


</body>




</html>

@endsection
