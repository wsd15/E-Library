<?php

namespace Database\Seeders;

use App\Models\Perpustakaan;
use Illuminate\Database\Seeder;

class PerpustakaanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'user_id' => 1,
                'nama_perpustakaan' => 'Perpustakaan Umum Daerah DKI Jakarta',
                'email_perpustakaan' =>'perpusDKI@gmail.com',
                'alamat_perpustakaan' => 'Taman Ismail Marzuki Jl. Cikini Raya No.73, RT.8/RW.2, Cikini, Kec. Menteng, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10330',
                'Kota'=>'Jakarta',
                'perpuslat'=> '-6.1903062',
                'perpuslong'=> '106.8388264',
                'status_validasi' => 'sudah'
            ],
            [
                'user_id' => 2,
                'nama_perpustakaan' => 'Perpustakaan Freedom',
                'email_perpustakaan' =>'perpusfreedom@gmail.com',
                'alamat_perpustakaan' => 'Wisma Bakrie, Jl. H. R. Rasuna Said No.11, RT.5/RW.2, Kuningan, Karet Kuningan, Menteng, South Jakarta City, Jakarta 12920',
                'Kota'=>'Jakarta',
                'perpuslat'=> '-6.2130268',
                'perpuslong'=> '106.8297091',
                'status_validasi' => 'sudah'
            ],
            [
                'user_id' => 3,
                'nama_perpustakaan' => 'Perpustakaan Umum LIA',
                'email_perpustakaan' =>'perpusLIA@gmail.com',
                'alamat_perpustakaan' => 'Jl. Pramuka No.Kav.30, RT.9/RW.8, Utan Kayu Utara, Kec. Matraman, Jakarta, Daerah Khusus Ibukota Jakarta 13120',
                'Kota'=>'Jakarta',
                'perpuslat'=> '-6.192693',
                'perpuslong'=> '106.8685606',
                'status_validasi'=>'sudah'
            ],
            [
                'user_id' => 4,
                'nama_perpustakaan' => 'Perpustakaan Narada',
                'email_perpustakaan' =>'perpusnarada@gmail.com',
                'alamat_perpustakaan' => 'Wisma Narada 6th Floor Vihara Jakarta, Dhammacakka Jaya, RT.11/RW.11, Sunter Agung, Tanjung Priok, North Jakarta City, Jakarta 14350',
                'Kota'=>'Jakarta',
                'perpuslat'=> '-6.1438696',
                'perpuslong'=> '106.8648372',
                'status_validasi'=>'sudah'
                ]
        ];

        foreach ($data as $key => $value) {
            $user = Perpustakaan::create($value);
        }
    }
}
