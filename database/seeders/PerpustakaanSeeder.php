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
                'nama_perpustakaan' => 'Nama Perpustakaan 01',
                'email_perpustakaan' =>'email 01',
                'alamat_perpustakaan' => 'Jln. Jendral Sudirman 01',
            ],
            [
                'user_id' => 2,
                'nama_perpustakaan' => 'Nama Perpustakaan 02',
                'email_perpustakaan' =>'email 02',
                'alamat_perpustakaan' => 'Jln. Jendral Sudirman 02',
            ],
            [
                'user_id' => 3,
                'nama_perpustakaan' => 'Nama Perpustakaan 03',
                'email_perpustakaan' =>'email 03',
                'alamat_perpustakaan' => 'Jln. Jendral Sudirman 03',
            ],
            [
                'user_id' => 4,
                'nama_perpustakaan' => 'Nama Perpustakaan 04',
                'email_perpustakaan' =>'email 04',
                'alamat_perpustakaan' => 'Jln. Jendral Sudirman 04',
            ]
        ];

        foreach ($data as $key => $value) {
            $user = Perpustakaan::create($value);
        }
    }
}
