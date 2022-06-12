@extends('layout.app')

@section('content')


<html>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <div class="container justify-content-between align-items-center rounded bg-white mt-5 mb-5">
        <h1 class="text-right mb-3" style="font-size:3vw">Wishlist</h1> 
        @php($counter=0)
        @if($itemwishlist->isEmpty())
        <div class="alert alert-warning text-center">
            <h1>Kamu belum menambahkan buku apapun ke dalam keranjang</h1>
        </div>    
    @endif 
        @foreach ($itemwishlist as $key=> $wishlist)

       
            
            <div class="card card-body">
                <div class="row">
                    <div class="col-md-1">No . {{ $key+1 }}</div>
                    <div class="col-md-2 align-middle" style="text-align: center">
                        <img id="bookPic" class="rounded mx-auto d-block" width="150" height="150" src="{{asset('/images/buku/'.$wishlist->produk->file_path)}}">
                    </div>
                    <div class="col-md-7">
                        <h6 class="media-title font-weight-semibold text-start" style="font-size:2vw">
                            <b href="#" data-abc="true">{{ $wishlist->produk->nama_buku}}</b>
                        </h6>

                        <h5 class="text-start">
                            <a>{{ $wishlist->produk->penulis }}</a>
                        </h5>


                        <h5 class="text-start" style="font-size:2vw">
                            @if($counter ==0)
                                <b>{{ $b[0]->bukuperpus->nama_perpustakaan }}</b>
                            @endif
                            @if($counter ==1)
                                <b>{{ $b[1]->bukuperpus->nama_perpustakaan }}</b>
                            @endif
                            @if($counter ==2)
                                <b>{{ $b[2]->bukuperpus->nama_perpustakaan }}</b>
                            @endif
                            @if($counter ==3)
                                <b>{{ $b[3]->bukuperpus->nama_perpustakaan }}</b>
                            @endif
                            @if($counter ==4)
                                <b>{{ $b[4]->bukuperpus->nama_perpustakaan }}</b>
                            @endif
                            @if($counter ==5)
                                <b>{{ $b[5]->bukuperpus->nama_perpustakaan }}</b>
                            @endif
                            @if($counter ==6)
                                <b>{{ $b[6]->bukuperpus->nama_perpustakaan }}</b>
                            @endif
                            @if($counter ==7)
                                <b>{{ $b[7]->bukuperpus->nama_perpustakaan }}</b>
                            @endif
                            @if($counter ==8)
                                <b>{{ $b[8]->bukuperpus->nama_perpustakaan }}</b>
                            @endif
                            @if($counter ==9)
                                <b>{{ $b[9]->bukuperpus->nama_perpustakaan }}</b>
                            @endif
                            @if($counter ==10)
                                <b>{{ $b[10]->bukuperpus->nama_perpustakaan }}</b>
                            @endif
                            @php($counter=$counter+1)
                            
                        </h5>
                        <span class="limit_text">{{ $wishlist->produk->deskripsi }}</span>
                    </div>
                    <div class="col-md-2">

    
                        <form method="post" class="delete_form" action="wishlist/{{ $wishlist->id }}">
                            {{csrf_field()}}
                            <input type="hidden" name="_method" value="DELETE" />
                            <button type="submit" class="">
                                
                                <span id="heart" class="liked"><i class="fa fa-heart fa-2x " aria-hidden="true" ></i> </span>
                            </button>
                        </form>
                        <div class="" style="margin-top:0.3vw">
                            <x-button class="mt-5" style="width: 170px; font-size: 15px">
                                {{ __('Add To Cart') }}
                            </x-button>
                        </div>
                      
                    </div>
                </div>
            </div>
        @endforeach
        {{ $itemwishlist->links() }}
            {{-- <div class="card card-body">
                <div class="row">
                    <div class="col-md-2 align-middle" style="text-align: center">
                        <img id="bookPic" class="rounded mx-auto d-block" width="150" height="150" src="https://source.unsplash.com/random/150x150?person">
                    </div>
                    <div class="col-md-8">
                        <h6 class="media-title font-weight-semibold text-start" style="font-size:2vw">
                            <b href="#" data-abc="true">Lord of The Flies</b>
                        </h6>

                        <h5 class="text-start">
                            <a>William Golding</a>
                        </h5>

                        <h5 class="text-start" style="font-size:2vw">
                            <b>Perpustakaan Cemerlang</b>
                        </h5>
                        <span class="limit_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur egestas, elit sit amet suscipit ultrices, justo velit sollicitudin nibh, et semper mi libero vitae turpis. Integer ornare scelerisque magna, et eleifend metus lobortis nec. Pellentesque turpis sapien, volutpat sit amet nibh eget, consequat pharetra mi. Ut luctus feugiat pharetra. Interdum et malesuada fames ac ante ipsum primis in faucibus. Vestibulum accumsan nisl nec diam imperdiet, eu vehicula nibh pharetra. Nunc egestas lectus nunc, sed rhoncus leo egestas in. Maecenas massa augue, laoreet a elit id, consequat consectetur diam. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nulla posuere, massa eu fringilla suscipit, neque urna vulputate libero, non lobortis mauris dui non augue. Etiam vitae commodo orci, id gravida quam. Donec maximus molestie turpis sed dapibus. Nam sit amet porta dui, eget aliquet lorem. Nunc luctus ligula eget finibus placerat. Sed neque risus, ultricies sed neque faucibus, consectetur feugiat tortor.</span>
                    </div>
                    <div class="col-md-2">

    
    
                        <span id="heart" class="liked"><i class="fa fa-heart fa-2x " aria-hidden="true" ></i> </span>
    
                        <div class="" style="margin-top:0.3vw">
                            <x-button class="mt-5" style="width: 170px; font-size: 15px">
                                {{ __('Add To Cart') }}
                            </x-button>
                        </div>

            </div> --}}
   

    {{-- <div class="container d-flex justify-content-center mt-50 mb-50">
            
        <div class="row">
           <div class="col-md-10">
            
                <div class="card card-body mt-2">
                            <div class="media align-items-center align-items-lg-start text-center text-lg-left flex-column flex-lg-row">

                                <div class="container">
                                    <div class="row">
                                        <div class="col col-2">
                                            <div class="mb-3 mb-lg-0">                                 
                                                <img src="https://source.unsplash.com/random/150x150?person" width="150" height="150" alt="">
                                        </div>
                                        </div>
                                        <div class="col col-10">
                                            <div class="mt-2 row">
                                                <div class="col">
                                                    <h6 class="media-title font-weight-semibold text-start" style="font-size:2vw">
                                                        <b href="#" data-abc="true">Lord of The Flies</b>
                                                    </h6>
                
                                                    <h5 class="text-start">
                                                        <a>William Golding</a>
                                                    </h5>
                
                                                    <h5 class="text-start" style="font-size:2vw">
                                                        <b>Perpustakaan Cemerlang</b>
                                                    </h5>
                                                </div>
                                                
                                        <span class="limit_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur egestas, elit sit amet suscipit ultrices, justo velit sollicitudin nibh, et semper mi libero vitae turpis. Integer ornare scelerisque magna, et eleifend metus lobortis nec. Pellentesque turpis sapien, volutpat sit amet nibh eget, consequat pharetra mi. Ut luctus feugiat pharetra. Interdum et malesuada fames ac ante ipsum primis in faucibus. Vestibulum accumsan nisl nec diam imperdiet, eu vehicula nibh pharetra. Nunc egestas lectus nunc, sed rhoncus leo egestas in. Maecenas massa augue, laoreet a elit id, consequat consectetur diam. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nulla posuere, massa eu fringilla suscipit, neque urna vulputate libero, non lobortis mauris dui non augue. Etiam vitae commodo orci, id gravida quam. Donec maximus molestie turpis sed dapibus. Nam sit amet porta dui, eget aliquet lorem. Nunc luctus ligula eget finibus placerat. Sed neque risus, ultricies sed neque faucibus, consectetur feugiat tortor.</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        
                       
        </div>                     
        </div>
    </div> --}}

</html>

@endsection