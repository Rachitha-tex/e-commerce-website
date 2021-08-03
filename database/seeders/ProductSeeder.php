<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
          [  "name"=>'Apple I8',
            "price"=>"200",
            "description"=>"A smartphone with 128 memory and 12 mp camera",
            "category"=>"mobile",
            "gallery"=>"https://fdn2.gsmarena.com/vv/pics/apple/apple-iphone-8-new-1.jpg"
        ],
         [  "name"=>'AU7000 UHD 4K Smart TV (2021)',
        "price"=>"220",
        "description"=>"A smarttv with 4K technology",
        "category"=>"tv",
        "gallery"=>"https://images.samsung.com/is/image/samsung/p6pim/levant/ua43au7000uxtw/gallery/levant-uhd-au7000-ua43au7000uxtw-409719074?$720_576_PNG$"
         ],
         [  "name"=>'Acer Laptop',
         "price"=>"240",
         "description"=>"515 11th Gen Core i7 and many features",
         "category"=>"laptop",
         "gallery"=>"https://buyabans.com/upload/product/Laptop/ACPCL515I711GI7/1_1.jpg"
         ],
         [  "name"=>'LG refrigirators',
             "price"=>"260",
        "description"=>"Side by side & french doors",
        "category"=>"fridge",
        "gallery"=>"https://www.lg.com/lk/images/refrigerators/md07528515/thumbnail/GL-M332RPZI-Refrigerators-350-02.jpg"
         ],
         [  "name"=>'Juki Machines',
        "price"=>"100",
        "description"=>"
        Industrial Sewing Machine
        SL-777B Spec | Single Needle Lock Stitch | Industrial Sewing Machine ",
        "category"=>"sewing machine",
        "gallery"=>"https://industrialsewingmachine.global.brother/-/media/machinery/ism/product/ism/img/product/sl777b.ashx"
         ],

        ]);
    }
}
