<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\CartDetail;
use App\Models\Transaction;
use App\Models\Perpustakaan;
use Illuminate\Http\Request;
use Carbon\Carbon;

class TransactionController extends Controller
{
    public function store(Request $request)
    {
        $transactionuser = $request->user();

        $cart = Cart::where('user_id', $transactionuser->id)
                        ->where('id',$request->cart_id)
                        ->first();

     //    $cartdetail = CartDetail::where('id',$cart->perpustakaan_id)->first();

        // $perpus = Perpustakaan::findorfail($cart->perpustakaan_id);

        $checktransaction = Transaction::where('user_id',$transactionuser->id)
                            ->where('cart_id',$request->cart_id)
                            ->first();

        // $transaction = $request->all();
       
        // $transaction['user_id'] = $transactionuser->id;
        // $transaction['cart_id'] = $request->cart_id;
        // $transaction['perpustakaan_id'] = $cart->perpustakaan_id;
        // $transaction['total_deposito'] = $cart->total;
        // $transaction['status_pembayaran'] = 'sudah terbayar';

   if($checktransaction)  {
  
        $cart->status_pembayaran = 'sudah terbayar';
        $cart->save();

        $checktransaction->status_pembayaran ='sudah terbayar';
        $checktransaction->save();

   }   
        

        // $transaction['no_invoice'] = $cart->no_invoice;
        // $create = Transaction::create($transaction);
        // $transaction['perpustakaan_id'] = $
        // $ctransaction = Transaction::create($transaction);

        
     return view('status-pembayaran',compact('checktransaction'));
    }


    public function detail(Request $request){
     $transactionuser = $request->user();
     
     $itemcart = Transaction::where('user_id',$transactionuser->id)
                         // ->where('status_pembayaran','belum dibayar')
                         ->get();



      //   $itemcart = Cart::where('user_id', $transactionuser->id)
                        // ->where('status_cart', 'cart')
                        // ->get();
                    
                  $data = array('title' => 'Shopping Cart',
                  'itemcart' => $itemcart );
     
     
     return view('buku-pinjaman', $data);
    }

    public function payment(Request $request,$id){

     $transactionuser = $request->user();

     $itemcart = Cart::where('user_id',$transactionuser->id)
        
        ->where('id',$id)
        ->first();

        

     return view('pembayaran-peminjaman',compact('itemcart'));
    }


    public function perpanjangan(Request $request,$id){
      $transactionuser = $request->user();
      $itemcart = Transaction::where('user_id',$transactionuser->id)
                  ->where('id',$id)
                  ->where('counter','=',0)
                  ->first();

               

                  $itemcart->counter = 1;
                  $itemcart->tanggal_pengembalian = Carbon::parse($itemcart->tanggal_pengembalian)->addDays(14);
                  $itemcart->save();

      return view('perpanjangan-durasi-peminjaman',compact('itemcart'));
    }

}
