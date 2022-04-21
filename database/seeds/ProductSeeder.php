<?php

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            [
                'name'=>'One plus 10 pro',
                "price"=>"1200",
                "description"=>"Competitive pricing and solid all-round performance make the 10 Pro a compelling option. ",
                "category"=>"Android",
                "gallery"=>"https://www.cnet.com/a/img/2022/03/30/155456bb-8e04-455f-bfd8-bb414928ffeb/oneplus-10-pro-cnet-review-17.jpg"
            ],
            [
                'name'=>'iphone 13',
                "price"=>"1200",
                "description"=>"As part of our efforts to reach our environmental goals, ",
                "category"=>"iphone",
                "gallery"=>"https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/iphone-13-product-red-select-2021?wid=940&hei=1112&fmt=png-alpha&.v=1645572315758"
            ],
            [
                'name'=>'Samsung s22 ultra',
                "price"=>"2000",
                "description"=>"Our best camera, performance, and connectivity ever on a Galaxy smartphone,  ",
                "category"=>"Android",
                "gallery"=>"https://img.global.news.samsung.com/ca/wp-content/uploads/2022/02/Galaxy_S22_Ultra_PR_main1F.jpg"
            ],
            [
                'name'=>'iphone 13 pro',
                "price"=>"1450",
                "description"=>"iPhone 13 Pro and iPhone 13 Pro Max do not include a power adapter or EarPods. ",
                "category"=>"iphone",
                "gallery"=>"https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/iphone-13-pro-family-hero?wid=940&hei=1112&fmt=png-alpha&.v=1644969385433"
            ]
        ]);

    }
}
