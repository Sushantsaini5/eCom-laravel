<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('product')->insert([
            [
                'name' => 'Oppo mobile',
                'price' => '20000',
                'category'=>'Mobiles',
                'description' => 'Oppo mobile with the 8gb ram and many more features',
                'gallery' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSOfZpbpMKQctIKOZeZVAcgsG4XdZQPnSuQEw&s',
            ],
            [
                'name' => 'Samsung TV',
                'price' => '18000',
                'category'=>'TV',
                'description' => 'Smart TV with much more features',
                'gallery' => 'https://5.imimg.com/data5/EA/JR/MY-37593200/w.jpg',
            ],
            [
                'name' => 'LG TV',
                'price' => '30000',
                'category'=>'TV',
                'description' => 'Smart TV with much more features',
                'gallery' => 'https://www.lg.com/content/dam/channel/wcms/in/images/tvs/55ur8040psb_atr_eail_in_c/gallery/55UR8040PSB-D-01.jpg',
            ],
            [
                'name' => 'LG Freeze',
                'price' => '15000',
                'category'=>'Freeze',
                'description' => 'Freeze with much more features',
                'gallery' => 'https://5.imimg.com/data5/IO/UT/DM/GLADMIN-82451357/selection-046-500x500.png',
            ],
            ]);
    }
}