@extends('layout.app')

@section('content')

<html>
    <body style="">

        <div class="container rounded bg-white mt-5 mb-5"> 

            <div class=" border-right"> 
                <div class="p-3 py-5"> 
                    <div class="d-flex justify-content-between align-items-center mb-3"> 
                        <h1 class="text-right mb-3" style="font-size:3vw">Mendaftar Pustakawan</h1> 
                    </div> 

                            <div class="profile-pic-wrapper">
                                <div class="pic-holder">
                                <!-- uploaded pic shown here -->
                                <img id="profilePic" class="pic" src="https://source.unsplash.com/random/150x150?person">
                            
                                <Input class="uploadProfileInput" type="file" name="profile_pic" id="newProfilePhoto" accept="image/*" style="opacity: 0;" />
                                <label for="newProfilePhoto" class="upload-file-block">
                                    <div class="text-center">
                                        <div class="mb-2">
                                            <i class="fa fa-camera fa-2x"></i>
                                        </div>
                                        <div class="text-uppercase">
                                            Update <br /> Profile Photo
                                        </div>
                                    </div>
                                </label>
                                </div>
                            
                               
                                
                            </div>

                    <div class="row mt-2"> 



                            <div class="col-md-6"><label class="labels ">First Name</label>
                                <x-input type="text" class="form-control" placeholder="{{ $userId->name }}" value=""/>
                            </div> 
                            <div class="col-md-6"><label class="labels">Last Name</label>
                                <x-input type="text" class="form-control" value="" placeholder="{{ $userId->last_name }}"/>
                            </div> 

                            <div class="col-md-6"><label class="labels mt-2">Email</label>
                                <x-input type="text" class="form-control" placeholder="{{ $userId->email }}" value=""/>
                            </div> 
                            <div class="col-md-6"><label class="labels mt-2">Nomor Ponsel</label>
                                <x-input type="text" class="form-control" value="" placeholder="nomor ponsel"/>
                            </div> 

                            <form class="col-md-6 mt-4">
                                <label for="birthday">Birthday:</label>
                                <x-input type="date" class="form-control" value="" id="birthday" name="birthday"/>
                            </form>

                            <div class="col-md-6 mb-3 mt-4">
                                <label for="formFile" class="form-label">Upload KTP</label>
                                <div class="pic-holder border" style="border-radius:0%">
                                    <!-- uploaded pic shown here -->
                 
                                    <Input class="uploadProfileInput" type="file" name="profile_pic" id="newProfilePhoto" accept="image/*" style="opacity: 0;" />
                                    <label for="newProfilePhoto" class="upload-file-block">
                                        <div class="text-center">
                                            <div class="mb-2">
                                                <i class="fa fa-camera fa-2x"></i>
                                            </div>
                                            <div class="text-uppercase text-primary">
                                                Upload <br /> Foto KTP
                                        </div>
                                    </label>
                                    </div>
                                </div>

                    </div>                            



</div> 
</div> 
</div> 
</div>
</div>
</div>
    </body>

    <body style="">

        <div class="container rounded bg-white mt-5 mb-5"> 

            <div class=" border-right"> 
                <div class="p-3 py-5"> 
                    <div class="d-flex justify-content-between align-items-center mb-3"> 
                        <h1 class="text-right mb-3" style="font-size:3vw">Profile Perpustakaan</h1> 
                    </div> 

                    <div class="col-md-6 mb-3 mt-4 justify-content-between align-items-center">
                        <label for="formFile" class="form-label">Upload foto Perpustakaan</label>
                        <div class="pic-holder border" style="border-radius:0%">
                            <!-- uploaded pic shown here -->
         
                            <Input class="uploadProfileInput" type="file" name="profile_pic" id="newProfilePhoto" accept="image/*" style="opacity: 0;" />
                            <label for="newProfilePhoto" class="upload-file-block">
                                <div class="text-center">
                                    <div class="mb-2">
                                        <i class="fa fa-camera fa-2x"></i>
                                    </div>
                                    <div class="text-uppercase text-primary">
                                        Upload <br /> Foto Perpustakaan
                                </div>
                            </label>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-2"> 

                            <div class="col-md-6"><label class="labels ">Nama Perpustakaan</label>
                                <x-input type="text" class="form-control" placeholder="nama perpustakaan" value=""/>
                            </div> 
                            <div class="col-md-6"><label class="labels">Last Name</label>
                                <x-input type="text" class="form-control" value="" placeholder="last name"/>
                            </div> 

                            <div class="col-md-6"><label class="labels mt-2">Email Perpustakaan</label>
                                <x-input type="text" class="form-control" placeholder="email perpustakaan" value=""/>
                            </div> 

                    </div> 
                    
                    <div class="row mt-2">

                        <div class="col-md-6"><label class="labels mt-2">Alamat Perpustakaan</label>
                            <x-input type="text" class="form-control" placeholder="alamat perpustakaan" value=""/>
                        </div> 

                    </div>

                    <div class="row mt-2">

                        <div class="col-md-6"><label class="labels mt-2">Menerima Donasi Buku : </label>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                <label class="form-check-label" for="inlineRadio1">Ya</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                <label class="form-check-label" for="inlineRadio2">Tidak</label>
                              </div>
                        </div> 

                    </div>


                    <div class="row mt-2">

                    <div class="col-md-12 mt-4"><label class="labels">Deskripsi Perpustakaan</label>
                        <x-input type="text" class="form-control" placeholder="Deskripsi" value=""/>
                    </div> 

                    </div>

                    <div class="row mt-2">

                        <div class="col-md-6 mb-3 mt-4">
                            <label for="formFile" class="form-label">Upload dokumen perpustakaan</label>
                            <div class="pic-holder border" style="border-radius:0%">
                                <!-- uploaded pic shown here -->
             
                                <Input class="uploadProfileInput" type="file" name="profile_pic" id="newProfilePhoto" accept="image/*" style="opacity: 0;" />
                                <label for="newProfilePhoto" class="upload-file-block">
                                    <div class="text-center">
                                        <div class="mb-2">
                                            <i class="fa fa-camera fa-2x"></i>
                                        </div>
                                        <div class="text-uppercase text-primary">
                                            Upload <br /> dokumen perpustakaan
                                    </div>
                                </label>
                                </div>
                            </div>
                        </div>

                    </div>



                    </div> 
                        <div class="mt-5 text-center">
                            <x-button class="">
                                Daftar
                            </x-button>
                            </div> 
                        </div> 
                    </div> 
  
</div>
</div>
</div>

       
        
    </body>
</html>

@endsection