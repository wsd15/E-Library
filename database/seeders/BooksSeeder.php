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
                'nama_buku' => 'The Lord of the Rings: The Fellowship of the Ring',
                'penerbit' => 'Gramedia Pustaka Utama',
                'penulis' => 'J. R. R. Tolkien',
                'perpustakaan_id'=>'1',
                'isbn' => '9780007136599',
                'tahun_terbit' =>'Juli 1954',
                'stok' => '5',
                'deposit' => '60000',
                'deskripsi' => 'Di sebuah desa yang tenang di Shire, seorang hobbit muda bernama Frodo Baggins mendapat warisan cincin bertuah yang menyimpan kekuatan dahsyat. Agar cincin utama itu tidak jatuh ke tangan Sauron yang jahat, Frodo mesti mengadakan perjalanan panjang dan penuh bahaya ke gunung api di Mordor, untuk memusnahkan cincin tersebut. Bersama kedelapan sahabatnya, ia berangkat. Dipimpin oleh Gandalf sang penyihir, kesembilan pembawa cincin itu memulai perjalanan. Tapi Sauron dan para anak buahnya tidak tinggal diam.',
                'file_path'=>'the-lord-of-the-rings-the-fellowship-of-the-ring.jpg',
            ],
            [
                'nama_buku' => 'The Lord of the Rings: The Two Towers',
                'penerbit' => 'Gramedia Pustaka Utama',
                'penulis' => 'J. R. R. Tolkien',
                'perpustakaan_id'=>'2',
                'isbn' => '9780007203598',
                'tahun_terbit' =>'2002',
                'stok' => '7',
                'deposit' => '85000',
                'deskripsi' => 'Akibat serangan Orc, rombongan pembawa cincin tercerai-berai. Aragorn, Legolas, dan Gimli, meneruskan perjalanan ke negeri orang-orang Rohan. Bersama Raja Theoden dan pasukannya mereka menuju Isengard untuk menghadapi Saruman. Pippin dan Merry tersesat ke hutan Fangorn dan bertemu Treebeard, penjaga pohon tertua yang masih hidup sejak awal terciptanya Middle Earth. Sementara itu, Frodo dan Sam melanjutkan berjalan ke Mordor untuk memusnahkan cincin Sauron. Tapi ada sosok misterius yang senantiasa mengikuti mereka dengan diam-diam, mengintai dengan sabar untuk mendapatkan cincin itu.',
                'file_path'=>'the-lord-of-the-rings-the-two-towers.jpg',
            ],
            [
                'nama_buku' => 'The Lord of the Rings: The Return Of The King',
                'penerbit' => 'Gramedia Pustaka Utama',
                'penulis' => 'J. R. R. Tolkien',
                'perpustakaan_id'=>'3',
                'isbn' => '9780007141326',
                'tahun_terbit' =>'2003',
                'stok' => '4',
                'deposit' => '70000',
                'deskripsi' => 'Kembalinya Sang Raja adalah jilid ketiga dan terakhir dari novel epik The Lord of the Rings karya penulis Inggris, J. R. R. Tolkien. Buku ini dibagi menjadi dua bagian dan pertama kali dirilis di Britania Raya pada 20 Oktober 1955. Dua jilid sebelumnya masing-masing adalah Sembilan Pembawa Cincin dan Dua Menara.',
                'file_path'=>'the-lord-of-the-rings-the-return-of-the-king.jpg',
            ],
            [
                'nama_buku' => 'Harry Potter And The Prisoner Of Azkaban',
                'penerbit' => 'Gramedia Pustaka Utama',
                'penulis' => 'J. K. Rowling',
                'perpustakaan_id'=>'4',
                'isbn' => '9780807283158',
                'tahun_terbit' =>'Maret 2001',
                'stok' => '3',
                'deposit' => '65000',
                'deskripsi' => 'Harry Potter dan Tawanan Azkaban adalah novel fantasi karangan penulis Inggris J. K. Rowling yang merupakan novel ketiga dalam seri Harry Potter. Novel ini mengisahkan mengenai Harry Potter, seorang bocah penyihir pada tahun ketiganya di Sekolah Sihir Hogwarts.',
                'file_path'=>'harry-potter.jpg',
            ],
            [
                'nama_buku' => 'The Hobbit',
                'penerbit' => 'Gramedia Pustaka Utama',
                'penulis' => 'J. R. R. Tolkien',
                'perpustakaan_id'=>'1',
                'isbn' => '9780044403371',
                'tahun_terbit' =>'2018',
                'stok' => '2',
                'deposit' => '75000',
                'deskripsi' => 'Sebagai salah satu karya penulis fantasi veteran J.R.R. Tolkien, The Hobbit yang pertama kali diterbitkan pada 21 September 1937 berhasil menceritakan sebuah petualangan seorang hobbit yang semula tidak tahu apa-apa menjadi seorang hobbit yang tangguh, mendapatkan banyak pengalaman, dan berjumpa dengan banyak makhluk baru. Tujuan para Kurcaci untuk merebut kembali harta dan tanah leluhur mereka di Gunung Sunyi ternyata berakhir ricuh dimana sifat haus kekuasaan orang-orang yang terlibat di dalamnya mengecilkan arti penemuan kembali ‘akar’ mereka yang sebenarnya.',
                'file_path'=>'the-hobbit.jpg',
            ],
            [
                'nama_buku' => 'Aslan',
                'penerbit' => 'HarperCollins',
                'penulis' => 'C. S. Lewis',
                'perpustakaan_id'=>'2',
                'isbn' => '9780060276362',
                'tahun_terbit' =>'Mei 1998',
                'stok' => '5',
                'deposit' => '70000',
                'deskripsi' => 'Peter, Susan, Edmund, and Lucy step into the wardrobe and find themselves in the enchanted Land of Narnia. There an evil White Witch has cast a spell making it always winter and never Christmas. But Aslan, the Great Lion, is on the move again, and together they must fight to destroy the wicked White Witch and reverse her evil spell. Glorious, richly detailed artwork by Deborah Maze brings the creatures and land of Narnia to life in this third exciting title in the World of Narnia picture-book series.',
                'file_path'=>'aslan.jpg',
            ],
            [
                'nama_buku' => 'Aslans Triumph',
                'penerbit' => 'HarperCollins',
                'penulis' => 'C. S. Lewis',
                'perpustakaan_id'=>'3',
                'isbn' => '9780060276393',
                'tahun_terbit' =>'1999',
                'stok' => '18',
                'deposit' => '60000',
                'deskripsi' => 'Peter, Susan, Edmund, and Lucy step through an old wardrobe into the mysterious land of Narnia. There they meet Asian, the Great Lion, and set off to rescue Narnia from the evil White Witch. But Narnia is a magical place, and this will be no ordinary battle. Deborah Mazes paintings, inspired by the original novels, bring Narnia to life in this fourth title in the World of Narnia "TM" picturebook series, now in paperback.',
                'file_path'=>'aslans-triumph.jpg',
            ],
            [
                'nama_buku' => 'The Lion, the Witch and the Wardrobe',
                'penerbit' => 'HarperCollins',
                'penulis' => 'C. S. Lewis',
                'perpustakaan_id'=>'4',
                'isbn' => '9780060276362',
                'tahun_terbit' =>'1994',
                'stok' => '18',
                'deposit' => '65000',
                'deskripsi' => 'Four adventurous siblings—Peter, Susan, Edmund, and Lucy Pevensie—step through a wardrobe door and into the land of Narnia, a land frozen in eternal winter and enslaved by the power of the White Witch. But when almost all hope is lost, the return of the Great Lion, Aslan, signals a great change . . . and a great sacrifice.',
                'file_path'=>'the-lion-the-witch-and-the-wardrobe.jpg',
            ],
            [
                'nama_buku' => 'Hujan',
                'penerbit' => 'Tere Liye',
                'penulis' => 'Tere Liye',
                'perpustakaan_id'=>'1',
                'isbn' => '9786020324784',
                'tahun_terbit' =>'Januari 2016',
                'stok' => '1',
                'deposit' => '80000',
                'deskripsi' => 'Novel setebal 320 halaman ini, mengambil latar di tahun 2042 hingga 2050 dengan genre science fiction (sci-fi) yang mengisahkan dunia di masa depan penuh akan kecanggihan teknologi. ',
                'file_path'=>'hujan-tere-liye.jpg',
            ],
            [
                'nama_buku' => 'Judul Buku 08',
                'penerbit' => 'Contoh Penerbit 08',
                'penulis' => 'Penulis 08',
                'perpustakaan_id'=>'2',
                'isbn' => '12533664',
                'tahun_terbit' =>'Januari 2015',
                'stok' => '2',
                'deposit' => '100000',
                'deskripsi' => 'contoh deskripsi panjang , lorem ipsum 02',
                'file_path'=>'book-open.svg',
            ],
            [
                'nama_buku' => 'Judul Buku 09',
                'penerbit' => 'Contoh Penerbit 09',
                'penulis' => 'Penulis 09',
                'perpustakaan_id'=>'3',
                'isbn' => '12533664',
                'tahun_terbit' =>'Januari 2016',
                'stok' => '1',
                'deposit' => '120000',
                'deskripsi' => 'contoh deskripsi panjang , lorem ipsum 03',
                'file_path'=>'book-open.svg',
            ]
        ];

        foreach ($data as $key => $value) {
            $user = Books::create($value);
        }

        

    }
}
