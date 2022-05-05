@extends('layout.app')

@section('content')

<html>
    <body style="">


        <h1 class="my-5" style="">Halaman profile</h1>

        <div class="container rounded bg-white mt-5 mb-5"> 

            <div class="col-md-5 border-right"> 
                <div class="p-3 py-5"> 
                    <div class="d-flex justify-content-between align-items-center mb-3"> 
                        <h4 class="text-right">Profile Settings</h4> 
                    </div> 

                            {{-- https://codepen.io/chiraggoyal777/pen/xxEowxq --}}
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
                            
                               
                                <p class="text-info text-center small">Note: Selected image will not be uploaded anywhere.  It's just for demonstration purposes.</p>
                            </div>

                    <div class="row mt-2"> 



                            <div class="col-md-6"><label class="labels">First Name</label>
                                <input type="text" class="form-control" placeholder="first name" value="">
                            </div> 
                            <div class="col-md-6"><label class="labels">Last Name</label>
                                <input type="text" class="form-control" value="" placeholder="last name">
                            </div> 
                            </div> 
                            <div class="row mt-3"> 
                                <div class="col-md-12">
                                <label class="labels">Email</label>
                                <input type="text" class="form-control" placeholder="enter email id" value="">
                            </div>
                            <div class="col-md-12"><label class="labels">Phone Number</label>
                                <input type="text" class="form-control" placeholder="enter phone number" value="">
                            </div> 
                            
                            <form>
                                <label for="birthday">Birthday:</label>
                                <input type="date" id="birthday" name="birthday">
                              </form>


                              <div>
                                <label for="pass">Password (8 characters minimum):</label>
                                <input type="password" id="pass" name="password"
                                       minlength="8" required>
                            </div>
                        </div> 
                        <div class="mt-5 text-center">
                                <button class="btn btn-primary profile-button" type="button">Save Profile</button>
                            </div> 
                        </div> 
                    </div> 
  
</div>
</div>
</div>

       
        
    </body>
</html>

@endsection