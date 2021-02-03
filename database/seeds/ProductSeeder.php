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
        DB::table('products')->insert([

                [
                    'title' => 'Jeans',
                    'sku' => 'Jea/BD-/Jea/Blu',
                    'description' =>'Nunc convallis molesue, pulvinar ex sed, iaculis lorem.',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'title' => 'Shoes',
                    'sku' => 'Sho/BD-/Lea/Bla',
                    'description' => 'Maecenas vel tempor dui, q fermee est pulvinar lobortis.',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'title' => 'Hats',
                    'sku' => 'Hat/US-/Cot/Gre',
                    'description' => 'Integer accumsan ultrices est.',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'title' => 'Lungi',
                    'sku' => 'Lun/BD-/Cot/Red',
                    'description' => 'Integer accucondimentum.',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'title' => 'Sandle',
                    'sku' => 'San/BD-/Plastic/Black',
                    'description' => 'Cras nec pellentrisquecipit non. Phasellus eu urna eros.',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'title' => 'Towel',
                    'sku' => 'Tow/IND-/Cot/Pink',
                    'description' => 'Nullam laortellus, ipit non. Phasellus eu urna eros.',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'title' => 'Panjabi',
                    'sku' => 'Pan/BD-/Cot/Blu',
                    'description' => 'Phasellus eu urna eros.',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'title' => 'Item',
                    'sku' => 'I1/US-/Cot/Gre',
                    'description' => 'Integer accumsan ultrices est.',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'title' => 'Item2',
                    'sku' => 'I2/US-/Cot/Gre',
                    'description' => 'Integer accumsan eros.',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'title' => 'Item3',
                    'sku' => 'I3/US-/Cot/Gre',
                    'description' => 'Integer accums suscipiellus eu urna eros.',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'title' => 'Item4',
                    'sku' => 'I4/US-/Cot/Gre',
                    'description' => 'Integer eu urna eros.',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'title' => 'Item5',
                    'sku' => 'I5/US-/Cot/Gre',
                    'description' => 'Integer accumsa ra vnia condimna eros.',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ]
            ]);
    }
}
