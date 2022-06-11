@extends('layout.app')

@section('content')
    <html>

    <body style="">

        <div class="container rounded bg-white mt-5 mb-5">

           

                <form action="/profile" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="p-3 py-5">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h1 class="text-right mb-3" style="font-size:3vw">My Profile</h1>
                        </div>
    
                        @if ($userId->file_path)
                        <div class="profile-pic-wrapper">
                            <div class="pic-holder border border-dark" style="border-radius: 0px;">
                              <!-- uploaded pic shown here -->
                              <img id="profilePic" class="pic" src="{{asset('/images/profile/'.$userId->file_path)}}" alt="" >
                              <Input  class="uploadProfileInput" type="file" name="newProfilePhoto" id="newProfilePhoto" accept="image/*" style="opacity: 0" multiple />
                              
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
                        @else
                        <div class="profile-pic-wrapper">
                            <div class="pic-holder border border-dark" style="border-radius: 0px;">
                              <!-- uploaded pic shown here -->
                              <img id="profilePic" class="pic">
                              <Input  class="uploadProfileInput" type="file" name="newProfilePhoto" id="newProfilePhoto" accept="image/*" style="opacity: 0" multiple />
                              
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
                        @endif
                        
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
                            <div class="col-md-6"><label class="labels">First Name </label>
                                <x-input type="text" class="form-control" name="name" placeholder="{{ $userId->name }}" value="{{ $userId->name }}" />
                            </div>
                            <div class="col-md-6"><label class="labels">Last Name</label>
                                <x-input type="text" class="form-control" name="last_name" value="{{ $userId->last_name }}" placeholder="{{ $userId->last_name }}" />
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-md-12">
                                <label class="labels">Email</label>
                                <x-input type="text" class="form-control" name="email" placeholder="{{ $userId->email }}" value="{{ $userId->email }}" />
                            </div>
                            <div class="col-md-12 mt-4"><label class="labels">Phone Number</label>
                                <x-input type="text" class="form-control" name="phonenumber" placeholder="enter phone number" value="{{ $userId->phonenumber }}" />
                            </div>
    
                            <div class="col-md-12 mt-4"><label class="labels">Birthday: </label>
                                <x-input type="date" id="birthday" name="birthday" name="birthday"  value="{{ $userId->birthday }}"  />
                            </div>

    
    
                            <div class="mt-4">
                                <label for="pass">Password (8 characters minimum):</label>
                                <x-input type="password" id="pass" name="password" minlength="8"  required />
                            </div>
                        </div>
                        <div class="mt-5 text-center">
                            <x-button class="">
                                Save
                            </x-button>
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
