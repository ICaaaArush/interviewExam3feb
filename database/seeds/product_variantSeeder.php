<?php

use Illuminate\Database\Seeder;

class product_variantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('product_variants')->insert([

            [
                'variant' => "Red",
                'variant_id' => 1,
                'product_id' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'variant' => "Small",
                'variant_id' => 2,
                'product_id' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'variant' => "Italian",
                'variant_id' => 3,
                'product_id' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'variant' => "orange",
                'variant_id' => 1,
                'product_id' => 2,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'variant' => "Large",
                'variant_id' => 2,
                'product_id' => 2,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'variant' => "Italian",
                'variant_id' => 3,
                'product_id' => 2,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'variant' => "Black",
                'variant_id' => 1,
                'product_id' => 3,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'variant' => "Small",
                'variant_id' => 2,
                'product_id' => 3,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'variant' => "Italian",
                'variant_id' => 3,
                'product_id' => 3,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'variant' => "Grey",
                'variant_id' => 1,
                'product_id' => 4,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'variant' => "Large",
                'variant_id' => 2,
                'product_id' => 4,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'variant' => "Slim Fit",
                'variant_id' => 3,
                'product_id' => 4,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'variant' => "Red",
                'variant_id' => 1,
                'product_id' => 5,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'variant' => "Small",
                'variant_id' => 2,
                'product_id' => 5,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'variant' => "Italian",
                'variant_id' => 3,
                'product_id' => 5,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'variant' => "Red",
                'variant_id' => 1,
                'product_id' => 6,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'variant' => "Small",
                'variant_id' => 2,
                'product_id' => 6,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'variant' => "Italian",
                'variant_id' => 3,
                'product_id' => 6,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'variant' => "Red",
                'variant_id' => 1,
                'product_id' => 7,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'variant' => "Small",
                'variant_id' => 2,
                'product_id' => 7,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'variant' => "Italian",
                'variant_id' => 3,
                'product_id' => 7,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'variant' => "Red",
                'variant_id' => 1,
                'product_id' => 8,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'variant' => "Small",
                'variant_id' => 2,
                'product_id' => 8,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'variant' => "Italian",
                'variant_id' => 3,
                'product_id' => 8,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'variant' => "Red",
                'variant_id' => 1,
                'product_id' => 9,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'variant' => "Small",
                'variant_id' => 2,
                'product_id' => 9,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'variant' => "Italian",
                'variant_id' => 3,
                'product_id' => 9,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'variant' => "Red",
                'variant_id' => 1,
                'product_id' => 10,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'variant' => "Small",
                'variant_id' => 2,
                'product_id' => 10,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'variant' => "Italian",
                'variant_id' => 3,
                'product_id' => 10,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'variant' => "Red",
                'variant_id' => 1,
                'product_id' => 11,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'variant' => "Small",
                'variant_id' => 2,
                'product_id' => 11,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'variant' => "Italian",
                'variant_id' => 3,
                'product_id' => 11,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'variant' => "Red",
                'variant_id' => 1,
                'product_id' => 12,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'variant' => "Small",
                'variant_id' => 2,
                'product_id' => 12,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'variant' => "Italian",
                'variant_id' => 3,
                'product_id' => 12,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ]
            
        ]);
    }
}
