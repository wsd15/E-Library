<?php

namespace App\Http\Controllers;
use Stevebauman\Location\Facades\Location;
use App\Models\Books;
use App\Models\Perpustakaan;
use App\Models\Wishlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\User;




class BooksController extends Controller
{
    public function index(Request $request){

        // $user = User::find(Auth::user()->id);

  
        $clientIP = \Request::getClientIp(true);
     
        if($clientIP == '127.0.0.1'){
            $locationData = \Location::get('https://'.$clientIP);//kalo local host , ngambil ip user
        }else{
            $locationData = \Location::get($clientIP);// kalo ga local host, ambil ip user
        }

        // dd($locationData2);
        $userlat =$locationData->latitude;
        $userlong=$locationData->longitude;

        // dd($userlong);


        // $record = $location->get(request()->getClientIp());
        // 'https://'.$request->ip()

        $buku = Books::all();
        
        // dd($buku[0]);
        $itemslong = array();
        foreach($buku as $key => $value)
        {
            $itemslong[]= $buku[$key]->bukuperpus->perpuslong ;
        }
        $itemslat = array();
        foreach($buku as $key => $value)
        {
            $itemslat[]= $buku[$key]->bukuperpus->perpuslat ;
        }

        // foreach($buku  as $key => $value2){
        //     echo $itemslong[$key];
        // }
        
        // $perpus = Perpustakaan::all()->first();
        // dd($perpus->perpuslat);


        // dd($itemslat);

        // $geo = DB::table("users")
        //     ->select("users.id"
        //         ,DB::raw("6371 * acos(cos(radians(" . $userlat . ")) 
        //         * cos(radians(users.lat)) 
        //         * cos(radians(users.lon) - radians(" . $userlong . ")) 
        //         + sin(radians(" .$userlat. ")) 
        //         * sin(radians(users.lat))) AS distance"))
        // ->orderBy('distance', 'asc')
        // ->get();
   



        // foreach($buku as $key => $items ){
        //     echo $itemslong[$key];
        // }


        // foreach($buku as $key => $value)
        // {
        $geo = DB::table("perpustakaans")
             ->select("perpustakaans.id"
                ,DB::raw("6371 * acos(cos(radians(" . $userlat . ")) 
                * cos(radians(perpustakaans.perpuslat)) 
                * cos(radians(perpustakaans.perpuslong) - radians(" . $userlong . ")) 
                + sin(radians(". $userlat . ")) 
                * sin(radians(perpustakaans.perpuslat))) AS distance"))
             ->join('books', 'books.perpustakaan_id', '=', 'perpustakaans.id')
                ->orderBy('distance', 'asc')
        ->paginate();
        // dd($geo);
    // }
       
       
        if ($request->has('search')) {
            // $data =  Books::where('nama_buku','LIKE','%'.$request->search.'%')
            // ->orWhere('penulis','LIKE','%'.$request->search.'%')
            // ->orWhere('penerbit','LIKE','%'.$request->search.'%')
            // ->orWhere('isbn','LIKE','%'.$request->search.'%')
            // ->paginate(6);
            // 
            // dd($data);
            //perpuslong perpuslat
            $data = DB::table("perpustakaans")
            ->select("*"
               ,DB::raw("6371 * acos(cos(radians(" . $userlat . ")) 
               * cos(radians(perpustakaans.perpuslat)) 
               * cos(radians(perpustakaans.perpuslong) - radians(" . $userlong . ")) 
               + sin(radians(". $userlat . ")) 
               * sin(radians(perpustakaans.perpuslat))) AS distance"))
            ->join('books', 'books.perpustakaan_id', '=', 'perpustakaans.id')
            ->where('nama_buku','LIKE','%'.$request->search.'%')
            ->orWhere('penulis','LIKE','%'.$request->search.'%')->orWhere('penerbit','LIKE','%'.$request->search.'%')
            ->orWhere('isbn','LIKE','%'.$request->search.'%')
            ->orWhere('Kota','LIKE','%'.$request->search.'%')
            ->orderBy('distance', 'asc')
            ->paginate(6);
           

        }else {
            // $data =  Books::paginate(6);
            $data = DB::table("perpustakaans")
            ->select("*"
               ,DB::raw("6371 * acos(cos(radians(" . $userlat . ")) 
               * cos(radians(perpustakaans.perpuslat)) 
               * cos(radians(perpustakaans.perpuslong) - radians(" . $userlong . ")) 
               + sin(radians(". $userlat . ")) 
               * sin(radians(perpustakaans.perpuslat))) AS distance"))
            ->join('books', 'books.perpustakaan_id', '=', 'perpustakaans.id')
            ->orderBy('distance', 'asc')
            ->paginate(6);
    //    dd($data);
        }
        
        // dd($data);
        return view('hasil-cari',compact('data','itemslong','itemslat'));
    }


    
    public function detail($id) {
    
        // $data = Books::find($id)->where('books.id','=',$id)->get();
        // $bookdet = DB::table('perpustakaans')
        //         ->leftJoin('books', 'books.perpustakaan_id', '=', 'perpustakaans.id')
        //         ->where('books.id','=',$id)
        //         ->get();
        // $bookdet = $data->concat($data2); 
                // dd($bookdet[0]);
                $itemproduk = Books::find($id);
            // dd($itemproduk->id);
                

        $bookdet = Books::where('id',$id)->paginate(1);


        if(Auth::user()){
            $itemuser = Auth::user()->id;
            $itemwishlist = Wishlist::where('produk_id', $itemproduk->id)
            ->where('user_id', $itemuser)
            ->first();
            // dd($itemwishlist);
// dd($bookdet[0]);

            return view('detail-buku',compact('bookdet','itemwishlist'));
        }else{
            return view('detail-buku',compact('bookdet'));
        }
       
    }

    // public function insert(Request $request){
    //     $id = $request->perpustakaan_id;
    //     dd($id);
    //     Books::create($request->all());

    //     return redirect('daftar-buku-perpustakaan');
    // }
    


    public function insert(Request $request){
        // dd($request->all());

        $id2 = Perpustakaan::where('user_id',Auth::user()->id)->select('id')->get()->pluck('id');//id login
        // // $id2 = Perpustakaan::select('id','user_id')->where('user_id','=',$id)->get()->toArray;
        // dd($id2);
        $img_ext = $request->file('file_path')->getClientOriginalExtension();
        $filename = 'foto-buku-' . time() . '.' . $img_ext;
        $path = $request->file('file_path')->move(public_path('/images/buku'), $filename);//image save public folder
      
        Books::create([
            'nama_buku' =>$request->input('nama_buku'),
            'penerbit'=>$request->input('penerbit'),
            'penulis'=>$request->input('penulis'),
            'perpustakaan_id'=>$id2[0],
            'isbn'=>$request->input('isbn'),
            'file_path'=>$filename,
            'tahun_terbit'=>$request->input('tahun_terbit'),
            'stok'=>$request->input('stok'),
            'deposit'=>$request->input('deposit'),
            'deskripsi'=>$request->input('deskripsi'),
        ]);

        return redirect('daftar-buku-perpustakaan');
    }

    public function index2(Request $request){
        $id2 = Perpustakaan::where('user_id',Auth::user()->id)->select('id')->get()->pluck('id');
    // dd($id2);
        $data =  Books::where('perpustakaan_id','=',$id2)->paginate(6);

        return view('daftar-buku-perpustakaan',compact('data'));
    }

    public function editbukudetail($id){
        
        $buku = Books::find($id);
        
        return view('edit-buku',compact('buku'));
    }

    public function editbuku(Request $request,$id){

        $validated=  $request->validate([
            'nama_buku' => 'required|max:255',
            'penerbit' => 'required',
            'isbn'=> 'integer',
            'tahun_terbit' => 'required',
            'penulis' => 'required',
            'stok' => 'required|integer',
            'deskripsi' => 'required|max:255',

        ]);

     
        
        $buku = Books::find($id);

        if($request->hasFile('file_path'))
        {
            $img_ext = $request->file('file_path')->getClientOriginalExtension();
            $imagePath = public_path('/images/buku/'.$buku->file_path);
           
            if(File::exists($imagePath)){
                unlink($imagePath);
            }
            $filename = 'foto-buku-' . time() . '.' . $img_ext;
            $request->file('file_path')->move(public_path('/images/buku'), $filename);//image save public folder
            $buku->file_path=$filename;
        }
        $buku->nama_buku=$request->input('nama_buku');
        $buku->penerbit=$request->input('penerbit');
        $buku->isbn=$request->input('isbn');
       
        $buku->tahun_terbit=$request->input('tahun_terbit');
        $buku->penulis=$request->input('penulis');
        $buku->stok=$request->input('stok');
        $buku->deskripsi=$request->input('deskripsi');
        
        $buku->save();
      
        return redirect('daftar-buku-perpustakaan');
    }

    public function destroy($id){
        $book= Books::find($id);
        $imagePath = public_path('/images/buku/'.$book->file_path);
           
            if(File::exists($imagePath)){
                unlink($imagePath);
            }
        $book->delete();
        return redirect('/daftar-buku-perpustakaan');

    }

}
