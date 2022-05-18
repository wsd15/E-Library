<?php

namespace Database\Seeders;
use App\Models\Books;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class BooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    // public function run()
    // {
    //     DB::table('books')->insert([
    //     'nama_buku'=>'Judul Buku',
    //     'penerbit'=> 'Contoh Penerbit',
    //     'penulis'=> 'Penulis',
    //     'isbn'=> '12533664',
    //     'tahun_terbit'=>'Januari 2014',
    //     'stok'=> '3',
    //     'deskripsi'=> 'contoh deskripsi panjang , lorem ipsum ',
    //     'file_path'=>'images/book-open.svg',
    //     ]);
    // }
    public function run()
    {
        $data = [
            [
                'nama_buku' => 'Judul Buku',
                'penerbit' => 'Contoh Penerbit',
                'penulis' => 'Penulis',
                'isbn' => '12533664',
                'tahun_terbit' =>'Januari 2014',
                'stok' => '3',
                'deskripsi' => 'contoh deskripsi panjang , lorem ipsum ',
                'file_path'=>'images/book-open.svg',
            ],
            [
                'nama_buku' => 'Judul Buku 02',
                'penerbit' => 'Contoh Penerbit 02',
                'penulis' => 'Penulis 02',
                'isbn' => '12533664',
                'tahun_terbit' =>'Januari 2015',
                'stok' => '2',
                'deskripsi' => 'contoh deskripsi panjang , lorem ipsum 02',
                'file_path'=>'images/book-open.svg',
            ],
            [
                'nama_buku' => 'Judul Buku 03',
                'penerbit' => 'Contoh Penerbit 03',
                'penulis' => 'Penulis 03',
                'isbn' => '12533664',
                'tahun_terbit' =>'Januari 2016',
                'stok' => '1',
                'deskripsi' => 'contoh deskripsi panjang , lorem ipsum 03',
                'file_path'=>'images/book-open.svg',
            ]
        ];

        foreach ($data as $key => $value) {
            $user = Books::create($value);
        }



    }
}
