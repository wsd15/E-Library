@extends('layout.app')

@section('content')

<html>
    <p class="fs-1 text-center">Keranjang</p>

    @php ($array=[]) @endphp
@foreach ($itemcart as $key => $item2)
    
  
    @foreach($itemcart[$key]->detail as $detail) 
       
            @php 
            
            if (in_array($detail->buku->perpustakaan_id,$array)) {
              
                continue;
            }else
            {
                array_push($array, $detail->buku->perpustakaan_id);
                
            }
           

            @endphp



           <div class="container mt-3 mb-5  border border-dark rounded-3">    
            <p class="fs-3 text-sm-start pl-50">   {{ $detail->buku->bukuperpus->nama_perpustakaan }} </p>
                    <br>
                        @foreach ($itemcart[$key]->detail as $item)
                                
                                @if ($item->buku->perpustakaan_id===$detail->buku->perpustakaan_id)
                                
                                <form action="{{ route('cartdet.destroy', $item->id) }}" method="post" style="display:inline;">
                                    @csrf
                                    <div class="row ms-1 me-1 border border-dark rounded-3" style="background: #E2E2E2">
                                        <div class="col-1 mt-2 mb-2">
                                            <img id="bookPic" class="img-fluid " style="width:20vw " src="{{asset('/images/buku/'.$item->buku->file_path)}}">
                                        </div>
                                        <div class="col mt-2 mb-2">
                                            <h6 class="media-title font-weight-semibold text-start " style="font-size:2vw">
                                                <b href="#" data-abc="true">{{ $item->buku->nama_buku }} </b>
                                            </h6>
                                            <h5 class="text-start mt-2">
                                                <a>Biaya Deposit: Rp. {{ $item->buku->deposit }},00</a>
                                            </h5>
                                        </div>
                                        <div class="col-1 mt-2 mb-2">
                                            {{ method_field('delete') }}
                                            <button type="submit" class="btn btn-sm btn-danger mb-2">
                                                <a href="/" class="link-dark">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="31" height="38" fill="currentColor"
                                                        class="bi bi-trash" viewBox="0 0 16 16">
                                                        <path
                                                            d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                                                        <path fill-rule="evenodd"
                                                            d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
                                                    </svg>
        
                                                </a>
                                            </button>      
                                        </div>

                                    </div>
                                     
                                    
                                                  
                                  </form>
                                    <br>
                                @endif
                        
                        @endforeach
                 

                        <style>
                            #button1 {   
                                font-size: 3vw;
                                
                            }
                        @media (min-width: 720px) { /* or 301 if you want really the same as previously.  */
                            #button1 {   
                                font-size: 1.4vw;
                                
                            }
                        }
                        </style>
                   
                        <div class="text-center">
                            <x-button class="btn" data-bs-toggle="modal" data-bs-target="#exampleModal" id="button1" style="align-self: end;">
                                {{ __('Checkout') }}
                            </x-button>
                        </div>
                        <br>
                      
                      <!-- Modal -->
                      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered ">
                          <div class="modal-content border border-4 border-dark">
                            <div class="modal-header d-flex justify-content-center border-bottom border-top-0 border-end-0 border-start-0 border-4 border-dark" style="background-color: #D3D3D3">
                              <h5 class="modal-title" id="exampleModalLabel">Lanjut Ke Pembayaran ?</h5>
                              {{-- <button type="button" class="btn-close btn-black" data-bs-dismiss="modal" aria-label="Close"></button> --}}
                            </div>
                            {{-- <div class="modal-body">
                              ...
                            </div> --}}
                            <div class="modal-footer d-flex justify-content-between" style="display: block">
                              <button type="button" class="btn btn-black" style="background-color: #D3D3D3; align-items: flex-start" data-bs-dismiss="modal">Batal</button>
                                {{-- <a href="{{url('/pembayaran/'.$detail->cart_id)}}">
                                    </a> --}}
                                <form action="{{url('/pembayaran/'.$detail->cart_id)}}" method="POST" >
                                    @csrf
                                    <input type="hidden" name="cart_id" value={{$detail->buku->perpustakaan_id}}>
                                    <a href="{{url('/pembayaran/'.$detail->cart_id)}}">
                                        <button type="button" class="btn btn-black" style="background-color: #D3D3D3; align-items: flex-end">Lanjutkan Pembayaran</button>
                                    </a>
                                </form>
                            </div>
                          </div>
                        </div>
                      </div>

            </div> 

   
    @endforeach 
@endforeach  

<script>
    var msg = '{{Session::get('alert')}}';
    var exist = '{{Session::has('alert')}}';
    if(exist){
      alert(msg);
    }
  </script>
    
   
</html>

@endsection