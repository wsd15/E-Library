<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Books;
use App\Models\CartDetail;
use App\Models\Perpustakaan;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;


class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // $itemuser = Auth::user()->id;//ambil data user
        $itemuser = $request->user();
        // dd($itemuser);
        $itemcart = Cart::where('user_id', $itemuser->id)
                        ->where('status_cart', 'cart')
                        ->get();
                        // dd($itemcart);
                        
                //   dd($b);
                //   dd($book);
                  $data = array('title' => 'Shopping Cart',
                  'itemcart' => $itemcart);
        return view('cart', $data);
     
    }
    //checkout
    public function detail(Request $request,$id){
        $transactionuser = $request->user();
        $ids=$id;

        $itemcart = Cart::where('user_id',  $itemuser = Auth::user()->id)
                        
                        ->where('id',$ids)
                        ->first();
        $checkcart = Cart::where('user_id',  $itemuser = Auth::user()->id)
                            ->where('status_cart','sudah')
                            ->where('id',$ids)
                            ->first();
                       

      $transactioncheck = Transaction::where('user_id',Auth::user()->id)
                            ->where('status_pembayaran','belum dibayar')
                            ->where('cart_id',$ids)
                            ->first();

        
                            if($checkcart){

                            }else{

                           
                                $itemcart->status_cart = 'sudah';
                                $itemcart->save();
                                $transaction = $request->all();
       
                                $transaction['user_id'] = $transactionuser->id;
                                $transaction['cart_id'] = $ids;
                                $transaction['perpustakaan_id'] = $itemcart->perpustakaan_id;
                                $transaction['total_deposito'] = $itemcart->total;
                                $transaction['status_pembayaran'] = 'belum dibayar';
                                $transaction['no_invoice'] = $itemcart->no_invoice;
                                $transaction['counter']= 0;
                                $transaction['tanggal_pengembalian'] = Carbon::now()->addDays(14);
                                $create = Transaction::create($transaction);
                            }
                           
                        
        
       
            
        return view('pembayaran',compact('itemcart','ids'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function show(Cart $cart)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function edit(Cart $cart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cart $cart)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cart $cart)
    {
        //
    }
    public function kosongkan($id) {
        $itemcart = Cart::findOrFail($id);
        $itemcart->detail()->delete();//hapus semua item di cart detail
        $itemcart->updatetotal($itemcart, '-'.$itemcart->subtotal);
        return back()->with('success', 'Cart berhasil dikosongkan');
    }
}
