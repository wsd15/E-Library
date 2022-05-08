@extends('layout.app')

@section('content')
    <html>

    <body style="">

        <div class="container rounded bg-white mt-5 mb-5">

            <div class=" border-right">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h1 class="text-right mb-3" style="font-size:3vw">My Profile</h1>
                    </div>

                    <div class="profile-pic-wrapper">
                        <div class="pic-holder">
                            <!-- uploaded pic shown here -->
                            <img id="profilePic" class="pic"
                                src="https://source.unsplash.com/random/150x150?person">

                            <Input class="uploadProfileInput" type="file" name="profile_pic" id="newProfilePhoto"
                                accept="image/*" style="opacity: 0;" />
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



                        <div class="col-md-6"><label class="labels">First Name</label>
                            <input type="text" class="form-control" placeholder="first name" value="">
                        </div>
                        <div class="col-md-6"><label class="labels">Last Name</label>
                            <input type="text" class="form-control" value="" placeholder="last name">
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-md-12">
                            <label class="labels">Email</label>
                            <input type="text" class="form-control" placeholder="enter email id" value="">
                        </div>
                        <div class="col-md-12 mt-4"><label class="labels">Phone Number</label>
                            <input type="text" class="form-control" placeholder="enter phone number" value="">
                        </div>

                        <form class="mt-4">
                            <label for="birthday">Birthday:</label>
                            <input type="date" id="birthday" name="birthday">
                        </form>


                        <div class="mt-4">
                            <label for="pass">Password (8 characters minimum):</label>
                            <input type="password" id="pass" name="password" minlength="8" required>
                        </div>
                    </div>
                    <div class="mt-5 text-center">
                        <x-button class="">
                            Save
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
