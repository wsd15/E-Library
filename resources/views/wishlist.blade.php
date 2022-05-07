@extends('layout.app')

@section('content')

{{-- https://bbbootstrap.com/snippets/bootstrap-ecommerce-item-products-list-description-and-rating-icons-83216490 --}}

<html>


    

    <div class="container d-flex justify-content-center mt-50 mb-50">
            
        <div class="row">
           <div class="col-md-10">
            
                <div class="card card-body">
                            <div class="media align-items-center align-items-lg-start text-center text-lg-left flex-column flex-lg-row">
                                <div class="mr-2 mb-3 mb-lg-0">
                                    
                                        <img src="https://i.imgur.com/5Aqgz7o.jpg" width="150" height="150" alt="">
                                   
                                </div>

                                <div class="media-body">
                                    <h6 class="media-title font-weight-semibold">
                                        <a href="#" data-abc="true">Lord of The Flies</a>
                                    </h6>

                                    <h5 >
                                        <a>William Golding</a>
                                    </h5>

                                    <h5 >
                                        <a>Perpustakaan Cemerlang</a>
                                    </h5>

                                    <p class="mb-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur egestas, elit sit amet suscipit ultrices, justo velit sollicitudin nibh, et semper mi libero vitae turpis. Integer ornare scelerisque magna, et eleifend metus lobortis nec. Pellentesque turpis sapien, volutpat sit amet nibh eget, consequat pharetra mi. Ut luctus feugiat pharetra. Interdum et malesuada fames ac ante ipsum primis in faucibus. Vestibulum accumsan nisl nec diam imperdiet, eu vehicula nibh pharetra. Nunc egestas lectus nunc, sed rhoncus leo egestas in. Maecenas massa augue, laoreet a elit id, consequat consectetur diam. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nulla posuere, massa eu fringilla suscipit, neque urna vulputate libero, non lobortis mauris dui non augue. Etiam vitae commodo orci, id gravida quam. Donec maximus molestie turpis sed dapibus. Nam sit amet porta dui, eget aliquet lorem. Nunc luctus ligula eget finibus placerat. Sed neque risus, ultricies sed neque faucibus, consectetur feugiat tortor.</p>

                                    <ul class="list-inline list-inline-dotted mb-0">
                                        <li class="list-inline-item">All items from <a href="#" data-abc="true">Mobile point</a></li>
                                        <li class="list-inline-item">Add to <a href="#" data-abc="true">wishlist</a></li>
                                    </ul>
                                </div>

                                <div class="mt-3 mt-lg-0 ml-lg-3 text-right">

                                    <button type="button" class="btn btn-warning mt-4 text-white"><i class="icon-cart-add mr-2"></i> Add to cart</button>
                                </div>
                            </div>
                        </div>
                        
                       
        </div>                     
        </div>
    </div>

</html>

@endsection