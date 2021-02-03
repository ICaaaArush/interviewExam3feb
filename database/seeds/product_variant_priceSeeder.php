<?php

use Illuminate\Database\Seeder;

class product_variant_priceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_variant_prices')->insert([

                [
                	'product_variant_one' => 1,
                    'product_variant_two' => 2,
                    'product_variant_three' => 3,
                    'product_id' => 1,
                    'price' => 100,
                    'stock' => 300,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'product_variant_one' => 4,
                    'product_variant_two' => 5,
                    'product_variant_three' => 6,
                    'product_id' => 2,
                    'price' => 100,
                    'stock' => 300,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'product_variant_one' => 7,
                    'product_variant_two' => 8,
                    'product_variant_three' => 9,
                    'product_id' => 3,
                    'price' => 100,
                    'stock' => 300,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'product_variant_one' => 10,
                    'product_variant_two' => 11,
                    'product_variant_three' => 12,
                    'product_id' => 4,
                    'price' => 100,
                    'stock' => 300,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'product_variant_one' => 13,
                    'product_variant_two' => 14,
                    'product_variant_three' => 15,
                    'product_id' => 5,
                    'price' => 100,
                    'stock' => 300,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'product_variant_one' => 16,
                    'product_variant_two' => 17,
                    'product_variant_three' => 18,
                    'product_id' => 6,
                    'price' => 100,
                    'stock' => 300,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'product_variant_one' => 19,
                    'product_variant_two' => 20,
                    'product_variant_three' => 21,
                    'product_id' => 7,
                    'price' => 100,
                    'stock' => 300,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'product_variant_one' => 22,
                    'product_variant_two' => 23,
                    'product_variant_three' => 24,
                    'product_id' => 8,
                    'price' => 100,
                    'stock' => 300,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'product_variant_one' => 25,
                    'product_variant_two' => 26,
                    'product_variant_three' => 27,
                    'product_id' => 9,
                    'price' => 100,
                    'stock' => 300,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'product_variant_one' => 28,
                    'product_variant_two' => 29,
                    'product_variant_three' => 30,
                    'product_id' => 10,
                    'price' => 100,
                    'stock' => 300,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'product_variant_one' => 31,
                    'product_variant_two' => 32,
                    'product_variant_three' => 33,
                    'product_id' => 11,
                    'price' => 100,
                    'stock' => 300,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'product_variant_one' => 34,
                    'product_variant_two' => 35,
                    'product_variant_three' => 36,
                    'product_id' => 12,
                    'price' => 100,
                    'stock' => 300,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ]
            ]); 
    }
}
