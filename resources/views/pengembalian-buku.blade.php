
@extends('layout.app')

@section('content')
    <html>
    <p class="fs-1 text-center mt-5 mb-5">Rincian Pengembalian</p>


    @php ($array2=[]) @endphp
    @foreach ($itemcart as $key => $item)
    
                @foreach ($itemcart[$key]->cart->detail as $item2)


                @php 
                
                if (in_array($item2->cart_id,$array2)) {
                  
                    continue;
                }else
                {
                    array_push($array2, $item2->cart_id);
                    
                }
               
    
                @endphp
                <form action="{{url('/pengembalian-buku/'.$item2->cart_id)}}" method="POST" >
                    @csrf

                    
            <div class="container">
             
                

                <p class="fs-3 text-sm-start">{{ $item2->cart->user->name}}</p>
                <div class="row border border-dark border-3 mt-1 rounded-3 mb-5 ms-1 me-1 " style="background-color: #E2E2E2">  
                        @foreach ($itemcart[$key]->cart->detail as $item3)
                       
                            <div class="col-1 mt-2">
                                <img style="width:10vw;height: 20vh;" src="{{asset('/images/buku/'.$item3->buku->file_path)}}">
                            </div>
                            
                            <div class="col ms-2 mt-2">
                                
                                <h6 class="media-title font-weight-semibold text-start"
                                style="font-size:2vw">
                                <b href="#" data-abc="true">{{ $item3->buku->nama_buku }} </b>
                            </h6>
                          

                            <p class="text-start mt-2 fs-5 fw-bold">
                                <a>Status : @if ($item->status_pembayaran === 'belum dibayar')
                                    Menunggu Pembayaran
                                    @elseif ($item->status_pembayaran === 'sudah terbayar')
                                    Sudah Terbayar
                                @endif </a>
                            </p>


                            <p class="text-start  fs-5">
                                <a> {{ $item3->buku->bukuperpus->nama_perpustakaan }}</a>
                            </p>
                            <p class="text-start fs-5">
                                
                                <a>Deadline Pengembalian : {{ $item->tanggal_pengembalian }}</a>
                            </p>
                                
                            </div>


                            <div class="row mt-2 text-start">
                                <div class="col-2">
                                    <p class="fs-4">
                                        <a>Status Buku : </a>
                                    </p>
                                </div>
                                {{-- Radios form check --}}
                                <div class="col-2">
                                    {{-- <div class="form-check form-check-inline">
                                        <input class="form-check-input form-control @error('status_buku')  @enderror" type="radio" name="status_buku[]" id="inlineRadio1"
                                            value="Rusak">
                                        <label class="form-check-label" for="inlineRadio1">Rusak</label>
                                    </div> --}}
                                    <input type="radio" name="status_buku[{{$loop->index}}]" id="a{{$loop->index}} " value="Rusak"> <label class="" for="a">Rusak</label>
                                   
                                </div>
                                <div class="col-2">    
                                    {{-- <div class="form-check form-check-inline">
                                        <input class="form-check-input form-control @error('status_buku')  @enderror" type="radio" name="status_buku[]" id="inlineRadio2"
                                            value="Hilang">
                                        <label class="form-check-label" for="inlineRadio2">Hilang</label>
                                    </div> --}}
                                    <input type="radio" name="status_buku[{{$loop->index}}]" id="b{{$loop->index}} " value="Hilang"> <label class="" for="b">Hilang</label>
                                   
                                </div>
                                <div class="col-3">
                                    {{-- <div class="form-check form-check-inline">
                                        <input class="form-check-input form-control @error('status_buku')  @enderror" type="radio" name="status_buku[]" id="inlineRadio3"
                                            value="Telat Pengembalian">
                                        <label class="form-check-label" for="inlineRadio3">Telat Pengembalian</label>
                                    </div> --}}
                                    <input type="radio" name="status_buku[{{$loop->index}}]" id="c{{$loop->index}} " value="Telat Pengembalian"> <label class="" for="c">Telat Pengembalian</label>
                                  
                                </div>
                                <div class="col">
                                    {{-- <div class="form-check form-check-inline">
                                        <input class="form-check-input form-control @error('status_buku')  @enderror" type="radio" name="status_buku[]" id="inlineRadio4"
                                            value="Baik">
                                        <label class="form-check-label" for="inlineRadio4">Baik</label>
                                    </div> --}}
                                     <input type="radio" name="status_buku[{{$loop->index}}]" id="d{{$loop->index}} " value="Baik"> <label class="" for="d">Baik</label>
                                
                
                                    @error('status_buku')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                            </div>

                            <div class="row">
                                <div class="col-md-12 mt-4"><label class="labels">Catatan</label>
                                    <textarea class="form-control rounded-md border-dark " name="catatan[]"
                                        placeholder="Masukkan Catatan" id="exampleFormControlTextarea1"
                                        rows="5"></textarea>
                                       
                                </div>
                                
                            </div>
                            <div class="row">
                                <div class="col  text-start fs-4 mb-2 mt-2">
                                    <label class="labels">Denda : </label>
                                    <div class="input-group">
                                        <span class="input-group-text border border-dark"
                                            id="basic-addon1">Rp.</span>
                                        <x-input type="text" class="form-control fs-5"
                                            placeholder="Masukkan denda" name="denda[]" value="" />
                                    </div>
                                </div>
                            </div>
                            

                            
                        </div>
                        
                        
                        
                        
                        @endforeach
                      <div class="d-flex justify-content-center mt-3" style="align-self: center">
                        <button  class="btn btn-black mb-1 border border-dark rounded-pill font-semibold text-s  text-black uppercase ring-gray-300" style="background-color: #D3D3D3; align-items: flex-end">Selesai</button>
                         
                      </div>
                       
                    </form>
                @endforeach
                 {{-- <a href="{{url('/pembayaran/'.$detail->cart_id)}}">
                    </a> --}}
                    <div class="row mt-3">
                        <div class="col">
                            {{-- Total Deposito : Rp. {{ $item->total_deposito }} --}}
                        </div>
                        <div class="col text-end">
                            {{-- @if ($item->status_pembayaran === 'sudah terbayar')
                                @if ($item->counter===1)
                                 
                                    <button type="button" class="btn btn-black mb-1 border border-dark rounded-pill font-semibold text-s  text-black uppercase ring-gray-300" style="background-color: #D3D3D3; align-items: flex-end" disabled>Perpanjang Durasi</button>
                                     
                                    @else
                                    <form action="{{url('perpanjangan-durasi-peminjaman/'.$item2->cart_id)}}" method="POST" >
                                        @csrf
                                        <input type="hidden" name="cart_id" value={{$item2->cart_id}}>
                                        <a href="{{url('perpanjangan-durasi-peminjaman/'.$item2->cart_id)}}">
                                            <button type="button" class="btn btn-black mb-1 border border-dark rounded-pill font-semibold text-s  text-black uppercase ring-gray-300" style="background-color: #D3D3D3; align-items: flex-end">Perpanjang Durasi</button>
                                        </a>
                                    </form>
                                @endif
                                
                            @endif --}}
                        </div>
                        
                    </div>

                    

                    @if ($item->status_pembayaran === 'sudah terbayar')
                    <div class="text-center mb-1">
                        
                           
                           
                    </div>
                    @else
                    <div class="text-center">
                        <form action="{{url('/pembayaran-peminjaman/'.$item2->cart_id)}}" method="POST" >
                            @csrf
                            <input type="hidden" name="cart_id" value={{$item2->cart_id}}>
                            <a href="{{url('/pembayaran-peminjaman/'.$item2->cart_id)}}">
                                <button type="button" class="btn btn-black mb-1 border border-dark rounded-pill font-semibold text-s  text-black uppercase ring-gray-300" style="background-color: #D3D3D3; align-items: flex-end">Lanjutkan Pembayaran</button>
                            </a>
                        </form>
                    </div>
                    @endif
                
            </div>
    @endforeach


    </html>
@endsection
