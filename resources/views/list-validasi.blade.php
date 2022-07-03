@extends('layout.app')

@section('content')
    <html>
        <body>
            
            <div class="container mt-5">
                
                    <h1 class="mb-3 text-center" style="font-size:3vw"> Validasi Perpustakaan</h1>
                    <div style="background: #E3E3E3">
                    <ul class="">
                        @foreach ($perpus as $item)
                            
                        
                    
                            <li class="border border-dark border-3 rounded-3">
                               
    
                                <div class="row ms-5 mt-1 mb-1">
                                    <div class="col">
                                        <div>
                                            <b href="#" style="font-size:2vw" data-abc="true">{{ $item->nama_perpustakaan }} </b>
                                            <br>
                                            {{ $item->Kota }}
                                        </div>
                                            
                                
                                        
                                    </div>
                                    <div class="col align-self-center">
                                        <div class="d-flex float-end  me-5">
                                            <a href="{{url('/validasi-perpustakaan/'.$item->id)}}">
                                            <button class="me-5" href="" style="align-items: flex-end"> ya</button>
                                            </a>
                                            <button class="ms-5" style="align-items: flex-end"> tidak</button>
                                        </div>
                                    </div>
    
                                </div>
    
                                    
                                    
                            </li>
                    
                        @endforeach
                    </ul>
                </div>
                
            </div>





        
        </body>
    </html>
@endsection