<?php

namespace Database\Seeders;

use App\Models\Camps;
use Illuminate\Database\Seeder;


class CampTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $camps = [
            [
                'title' => 'Gila Belajar',
                'slug' => 'Gila Belajar',
                'price' => 280,
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time())
            ],
            [

                'title' => 'Baru Mulai',
                'slug' => 'Baru Mulai',
                'price' => 140,
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time())
            ]
        ];

        // 1st method
        // foreach ($camps as $key => $camp) {
        //     Camps::create($camp);
        // }

        // 2nd method
        Camps::insert($camps);
    }
}
