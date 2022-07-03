@extends('layout.app')

@section('content')

<html>

<body style="">

    <div class="container rounded bg-white mt-5 mb-5">
        <form action="{{url('/validasi-perpustakaan/'.$perpustakaan->id)}}" method="POST" enctype="multipart/form-data">
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
                            
                          
                        </div>
                    </div>
                    @else
                    <div class="profile-pic-wrapper">
                        <div class="pic-holder border border-dark" style="border-radius: 0px;">
                            <!-- uploaded pic shown here -->
                            <img id="profilePic" class="pic">
                            
                            
                        </div>
                    </div>
                    @endif

                    <div class="row mt-2">
                        <div class="col-md-6"><label class="labels ">First Name</label>
                            <x-input type="text" class="form-control" name="name" placeholder="{{ $userId->name }}"
                                value="{{ $userId->name }}" disabled/>
                        </div>
                        <div class="col-md-6"><label class="labels">Last Name</label>
                            <x-input type="text" class="form-control" name="last_name" value="{{ $userId->last_name }}"
                                placeholder="{{ $userId->last_name }}" disabled/>
                        </div>

                        <div class="col-md-6"><label class="labels mt-2">Email</label>
                            <x-input type="text" class="form-control" name="email" placeholder="{{ $userId->email }}"
                                value="{{ $userId->email }}" disabled/>
                        </div>
                        <div class="col-md-6"><label class="labels mt-2">Nomor Ponsel</label>
                            <x-input type="text" class="form-control" name="phonenumber"
                                value="{{ $userId->phonenumber }}" placeholder="nomor ponsel" disabled/>
                        </div>

                        <div class="col-md-6"><label class="labels">Birthday: </label>
                            <x-input style="width: 100%" type="date" id="birthday" name="birthday"
                                value="{{ $userId->birthday }}" placeholder="{{ $userId->birthday }}" disabled />
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
                                       
                                    </div>
                                </div>
                                @else
                                <div class="profile-pic-wrapper">
                                    <div class="pic-holder border border-dark" style="border-radius: 0px;">
                                        <!-- uploaded pic shown here -->
                                        <img id="profilePic" class="pic">
                                       
                                    </div>
                                </div>
                                @endif

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
    
                                
                            </div>
                        </div>
                        @else
                        <div class="profile-pic-wrapper">
                            <div class="pic-holder border border-dark" style="border-radius: 0px;">
                                <!-- uploaded pic shown here -->
                                <img id="profilePic" class="pic">
                                <Input class="uploadProfileInput" type="file" name="newProfilePhoto3" id="newProfilePhoto3"
                                    accept="image/*" style="opacity: 0" multiple />
    
                                
                            </div>
                        </div>
                        @endif

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
                <div class="col-md-6"><label class="labels mt-2">Perpustakaan Latitude</label>
                    <x-input type="text" class="form-control @error ('perpuslat') @enderror" placeholder="Latitude Perpustakaan" value="" name="perpuslat"/>
                    @error('perpuslat')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                

                <div class="col-md-6"><label class="labels mt-2">Perpustakaan Latitude</label>
                    <x-input type="text" class="form-control @error ('perpuslong') @enderror" placeholder="Latitude Perpustakaan" value="" name="perpuslong"/>
                    @error('perpuslong')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
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
                        rows="5" disabled>{{ $perpustakaan->deskripsi_perpustakaan }}</textarea>
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
    
                               
                            </div>
                        </div>
                        @else
                    <label class="labels mt-1 mb-2">Upload Dokumen Perpustakaan</label>
                        <div class="pic-holder border border-dark" style="border-radius: 0px;">
                            <!-- uploaded pic shown here -->
                            <img id="profilePic" class="pic">
                            <Input class="uploadProfileInput" type="file" name="newProfilePhoto4" id="newProfilePhoto4"
                                accept="image/*" style="opacity: 0" multiple />

                            
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
                </div>
    </div>





    <div class="container mt-5 text-center">

        {{-- <div class="row">
            <div class="col-4">

            </div>
            <div class="col-4">
                <div class="alert alert-warning text-center">
                    <h1 class="mb-3"> Harap Menunggu Verifikasi</h1>
                </div> 
            </div>
            <div class="col-4">

            </div>

        </div> --}}
          
        

        <x-button class="mb-5">
            Validasi
        </x-button>
    </div>









    </form>


</body>




</html>

@endsection
