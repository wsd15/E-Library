@extends('layout.app')

@section('content')

<html>
    <p class="fs-1 text-center">Keranjang</p>

            @php ($counter=1) @endphp
           
            @php ($array=[]) @endphp

    @foreach($itemcart->detail as $detail)
            @php ($counter2=$detail->buku->perpustakaan_id) @endphp
            @php 
            
            if (in_array($detail->buku->perpustakaan_id,$array)) {
              
                continue;
            }else
            {
                array_push($array, $detail->buku->perpustakaan_id);
                
            }
           

            @endphp



           <div class="border mt-3 mb-5">    
                    {{ $detail->buku->bukuperpus->nama_perpustakaan }} 
                    <br>
                        @foreach ($itemcart->detail as $item)
                                
                                @if ($item->buku->perpustakaan_id===$detail->buku->perpustakaan_id)
                                {{ $item->buku->nama_buku }} <br>
                                @endif
                                
                        @endforeach
                    <br>

                    <a href="{{url('/pembayaran/'.$detail->buku->perpustakaan_id)}}">
                        <x-button class=" align-self-end" id="button1" style="align-self: center;">
                            {{ __('Detail Buku') }}
                        </x-button>
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
                    </a>

            </div> 

        @php($counter=$counter+1)
    @endforeach
   



        
   
</html>

@endsection