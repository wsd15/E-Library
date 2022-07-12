<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\CartDetail;
use App\Models\Transaction;
use App\Models\Perpustakaan;
use App\Models\TransactionDetail;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

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
                  ->where('cart_id',$id)
                  ->where('counter','=',0)
                  ->first();

               

                  $itemcart->counter = 1;
                  $itemcart->tanggal_pengembalian = Carbon::parse($itemcart->tanggal_pengembalian)->addDays(14);
                  $itemcart->save();

      return view('perpanjangan-durasi-peminjaman',compact('itemcart'));
    }

    public function detailterpinjam(Request $request){

      $transactionuser = $request->user();

      $perpus = Perpustakaan::where('user_id',$transactionuser->id)->get()->pluck('id');
   
     
     $itemcart = Transaction::where('perpustakaan_id',$perpus)
                    // ->leftjoin('transaction_details', 'transaction_details.transaction_id', '=', 'transactions.id')
                    
                        //  ->where('status_pembayaran','sudah terbayar')
                         ->get();
      //  dd($itemcart);


      //   $itemcart = Cart::where('user_id', $transactionuser->id)
                        // ->where('status_cart', 'cart')
                        // ->get();
                    
                  $data = array('title' => 'Shopping Cart',
                  'itemcart' => $itemcart  );
     
    //  dd($itemcart);
    

      return view('buku-terpinjam',$data);
    }

    public function rincianpengembalian($id){
      $id = $id;

      $itemcart = Transaction::where('cart_id',$id)
      // ->where('status_pembayaran','belum dibayar')
      ->get();


      // dd($itemcart);
      return view('pengembalian-buku',compact('itemcart','id'));
    }

    public function pengembalian(Request $request,$id){

      

// dd($transaction);
      
      foreach ($request->catatan as $index => $rowid) {
        //  dd($request->denda[0],$request->denda[1],$request->denda[2]);
         TransactionDetail::create([
                'transaction_id' => $id,
                'catatan'=>$request->catatan[$index],
                'denda'=>$request->denda[$index],
                
        ]);
     
      }

      

      // $data = DB::table("transaction_details")
	    // ->select(DB::raw("SUM(denda) as total"))
      // ->where('transaction_id',$id)
	    // ->orderBy("transaction_id")
	    // ->groupBy(DB::raw("transaction_id"))
	    // ->pluck('total');
      $data =TransactionDetail::where('transaction_id',$id)->sum('denda');
      

      $transaction = Transaction::where('id',$id)->first();
      // $transaction->status_pembayaran ='lunas';
      $total = $transaction->total_deposito;
      $transaction->total_deposito =$total - $data;
      $transaction->totaldenda = $data;
      $transaction->save();

      return redirect('buku-terpinjam');
    }
    

}
