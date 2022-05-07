@extends('layout.app')

@section('content')


<html>
   

    <div class="container d-flex justify-content-center mt-50 mb-50">
            
        <div class="row">
           <div class="col-md-10">
            
                <div class="card card-body">
                            <div class="media align-items-center align-items-lg-start text-center text-lg-left flex-column flex-lg-row">

                                <div class="container border">
                                    <div class="row">
                                        <div class="col border col-2">
                                            <div class="mb-3 mb-lg-0">                                 
                                                <img src="https://source.unsplash.com/random/150x150?person" width="150" height="150" alt="">
                                        </div>
                                        </div>
                                        <div class="col border col-10">
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
                                                <div class="col">
                                                    <div class="mt-2 text-end">
                                                        <x-button class="">
                                                            Add to Cart
                                                        </x-button>
                                                        </div> 
                                                    </div> 
                                                                                            {{-- buat characternya jadi limit --}}
                                        <span class="limit_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur egestas, elit sit amet suscipit ultrices, justo velit sollicitudin nibh, et semper mi libero vitae turpis. Integer ornare scelerisque magna, et eleifend metus lobortis nec. Pellentesque turpis sapien, volutpat sit amet nibh eget, consequat pharetra mi. Ut luctus feugiat pharetra. Interdum et malesuada fames ac ante ipsum primis in faucibus. Vestibulum accumsan nisl nec diam imperdiet, eu vehicula nibh pharetra. Nunc egestas lectus nunc, sed rhoncus leo egestas in. Maecenas massa augue, laoreet a elit id, consequat consectetur diam. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nulla posuere, massa eu fringilla suscipit, neque urna vulputate libero, non lobortis mauris dui non augue. Etiam vitae commodo orci, id gravida quam. Donec maximus molestie turpis sed dapibus. Nam sit amet porta dui, eget aliquet lorem. Nunc luctus ligula eget finibus placerat. Sed neque risus, ultricies sed neque faucibus, consectetur feugiat tortor.</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                {{-- Button love https://codepen.io/jh3y/pen/eYZZdeK --}}
                            </div>
                        </div>
                        
                       
        </div>                     
        </div>
    </div>

</html>

@endsection