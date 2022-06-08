@extends('layout.app')

@section('content')
    <html>

    <body style="">

        <div class="container rounded bg-white mt-5 mb-5">
            <form action="/edit-buku/{{ $buku->id }}" method="POST" enctype="multipart/form-data">
            @csrf
            
            <div class="border-right">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-center align-items-center mb-3">
                        <h1 class="mb-3" style="font-size:48px">Edit Buku</h1>
                    </div>

                    {{-- <div class="profile-pic-wrapper">
                        <div class="pic-holder border border-dark" style="border-radius: 0px; width: 150px; height: 200px;">
                            <!-- uploaded pic shown here -->
                            <img id="profilePic" class="pic"
                                src="https://source.unsplash.com/random/150x200?book">

                            <Input class="uploadProfileInput" type="file" name="file_path" id="newProfilePhoto"
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
                    </div> --}}
                    <div class="profile-pic-wrapper">
                        <div class="pic-holder border border-dark" style="border-radius: 0px;">
                          <!-- uploaded pic shown here -->
                          <img id="profilePic" class="pic" src="/images/buku/{{ $buku->file_path }}" >
                          <Input  class="uploadProfileInput" type="file" name="newProfilePhoto" id="newProfilePhoto" accept="image/*" style="opacity: 0" multiple />
                          
                            <label for="newProfilePhoto" class="upload-file-block">
                            <div class="text-center">
                              <div class="mb-2">
                                <i class="fa fa-camera fa-2x" style="color: black"></i>
                              </div>
                              <div class="text-uppercase" style="color: black">
                                Upload <br /> Book Photo
                              </div>
                            </div>
                          </label>
                        </div>
                        <input hidden id="back"  type="file" name="file_path" id="file_path" multiple>
                       
                        
                      </div>
                    

                      <script>
                        let file = document.getElementById("newProfilePhoto");
                        let back = document.getElementById("back");

                        file.addEventListener('change', function() {
                        let files = this.files;
                        let dt = new DataTransfer();
                        for(let i=0; i<files.length; i++) {
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
                        <div class="col-md-6"><label class="labels">Judul Buku</label>
                            <x-input type="text" class="form-control" name="nama_buku" placeholder="Masukkan Judul Buku" value="{{ $buku->nama_buku }}" />
                        </div>
                        <div class="col-md-6"><label class="labels">Penerbit</label>
                            <x-input type="text" class="form-control" value="{{ $buku->penerbit }}" name="penerbit" placeholder="Masukkan Penerbit" />
                        </div>
                    </div>

                    <div class="row mt-2">
                        <div class="col-md-6"><label class="labels">ISBN</label>
                            <x-input type="text" class="form-control" name="isbn" placeholder="Masukkan ISBN" value="{{ $buku->isbn }}" />
                        </div>
                        <div class="col-md-6"><label class="labels">Tahun Terbit</label>
                            <x-input type="text" class="form-control" value="{{ $buku->tahun_terbit }}" name="tahun_terbit" placeholder="Masukkan Tahun Terbit" />
                        </div>
                    </div>

                    <div class="row mt-2">
                        <div class="col-md-6"><label class="labels">Penulis</label>
                            <x-input type="text" class="form-control" name="penulis" placeholder="Masukkan Penulis" value="{{ $buku->penulis }}" />
                        </div>
                        <div class="col-md-6"><label class="labels">Stok</label>
                            <x-input type="text" class="form-control" value="{{ $buku->stok }}" name="stok" placeholder="Qty" />
                        </div>
                    </div>

                    <div class="col-md-12 mt-4"><label class="labels">Deskripsi Buku</label>
                        <textarea class="form-control rounded-md border-dark" name="deskripsi" placeholder="Masukkan Deskripsi Buku"
                            id="exampleFormControlTextarea1" rows="5">{{ $buku->deskripsi }}</textarea>
                    </div>

                    
                   
                    <div class="mt-5 text-center">
                        <x-button type="submit" class="">
                            SIMPAN
                        </x-button>
                    </div>
                </div>
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
                                        '<div class="snackbar show" role="alert"><i class="fa fa-check-circle text-success"></i> Profile image updated successfully</div>'
                                    );

                                    // Clear input after upload
                                    $(triggerInput).val("");

                                    setTimeout(() => {
                                        $(wrapper).find('[role="alert"]').remove();
                                    }, 3000);
                                    } else {
                                    $(holder).find(".pic").attr("src", currentImg);
                                    $(wrapper).append(
                                        '<div class="snackbar show" role="alert"><i class="fa fa-times-circle text-danger"></i> There is an error while uploading! Please try again later.</div>'
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
        </div>

    


    </body>

    </html>
@endsection
