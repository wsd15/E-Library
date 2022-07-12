@extends('layout.app')

@section('content')
    <html>

    <div class="container mt-5">

        @if ($userId[0]->file_path)
        <div class="profile-pic-wrapper">
            <div class="pic-holder border border-dark" style="border-radius: 0px;">
              <!-- uploaded pic shown here -->
              <img id="profilePic" class="pic" src="{{asset('/images/profile/'.$userId[0]->file_path)}}" alt="" >
              <Input  class="uploadProfileInput" type="file" name="newProfilePhoto" id="newProfilePhoto" accept="image/*" style="opacity: 0" multiple  disabled/>
              
                
            </div>
        @else
        <div class="profile-pic-wrapper">
            <div class="pic-holder border border-dark" style="border-radius: 0px;">
              <!-- uploaded pic shown here -->
              <img id="profilePic" class="pic">
              <Input  class="uploadProfileInput" type="file" name="newProfilePhoto" id="newProfilePhoto" accept="image/*" style="opacity: 0" multiple disabled/>
              
                
            </div>
        @endif
    </div>


    <div class=" d-flex justify-content-center mt-3" style="align-self: center">
      <p class="fs-1"> {{ $userId[0]->name }} {{ $userId[0]->last_name }}</p>
    </div>

    <div class="row">
      <div class="col-3">

      </div>
      
      <div class="col-6">
        <label class="labels">Nomor Telepon</label>
        @if ($userId[0]->phonenumber === Null)
      

      <x-input type="text" class="form-control" name="" placeholder="No Value" value="" disabled/>
        <input hidden  type="text" value="No Value" name="phonenumber" id="phonenumber" multiple>

      @else
        <x-input type="text" class="form-control" name="" placeholder="{{ $userId[0]->phonenumber }}" value="{{ $userId[0]->phonenumber }}" disabled/>
        <input hidden  type="text" value="{{ $userId[0]->phonenumber }}" name="phonenumber" id="phonenumber" multiple>
        @endif
      </div>
      
      <div class="col-3">

      </div>

    </div>

    <div class="row mt-3">
      <div class="col-3">

      </div>
      
      <div class="col-6">
          <label class="labels">Email</label>
          @if ($userId[0]->email === Null)
        

        <x-input type="text" class="form-control" name="" placeholder="No Value" value="" disabled/>
          <input hidden  type="text" value="No Value" name="email" id="email" multiple>

        @else
          <x-input type="text" class="form-control" name="" placeholder="{{ $userId[0]->email }}" value="{{ $userId[0]->email }}" disabled/>
          <input hidden  type="text" value="{{ $userId[0]->email }}" name="email" id="email" multiple>
          @endif
      </div>
      
      <div class="col-3">

      </div>

    </div>
   

    <div class="row mt-3">
      <div class="col-3">

      </div>
      
      <div class="col-6">
        <label class="labels">Tanggal Lahir</label>
        @if ($userId[0]->birthday === Null)
        

        <x-input type="text" class="form-control" name="" placeholder="No Value" value="" disabled/>
          <input hidden  type="text" value="No Value" name="birthday" id="birthday" multiple>

        @else

        <x-input type="text" class="form-control" name="" placeholder="{{ $userId[0]->birthday }}" value="{{ $userId[0]->birthday }}" disabled/>
          <input hidden  type="text" value="{{ $userId[0]->birthday }}" name="birthday" id="birthday" multiple>
        @endif
         
      </div>
      
      <div class="col-3">

      </div>

    </div>






    </html>
@endsection