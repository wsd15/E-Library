@extends('layout.app')

@section('content')
    <html>

    <body style="">

        <div class="container rounded bg-white mt-3 mb-5">
            <div class=" border-right">
                <div class="p-3 py-5">
                    <div class="profile-pic-wrapper">
                        <div class="pic-holder">
                            <img id="profilePic" class="pic"
                                src="https://source.unsplash.com/random/150x150?person">
                        </div>
                    </div>

                    <div class="d-flex justify-content-center">
                        <h1 class="text-center mb-3 mt-3" style="font-size:3vw">Justin Andrea</h1>
                    </div>

                    <div class="row mt-4">
                        <div class="col-md-12">
                            <label class="labels">Email</label>
                            <x-input type="text" class="form-control" placeholder="justinandrea@email.com" readonly />
                        </div>
                        <div class="col-md-12 mt-4">
                            <label class="labels">Phone Number</label>
                            <x-input type="text" class="form-control" placeholder="0812-1234-1234" readonly />
                        </div>
                        <div class="col-md-12 mt-4">
                            <label class="labels">Tanggal Lahir</label>
                            <x-input type="text" class="form-control" placeholder="15/05/2001" readonly />
                        </div>

                    </div>
                    <div class="mt-5 text-center">
                        <x-button class="">
                            BACK
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
