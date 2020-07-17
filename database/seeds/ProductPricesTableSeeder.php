<?php

use Illuminate\Database\Seeder;

class ProductPricesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_prices')->delete();
        DB::table('product_prices')->insert([
            [
                'product_id' => '1',
                'price' => '100'
            ],
            [
                'product_id' => '2',
                'price' => '150'
            ],
            [
                'product_id' => '3',
                'price' => '150'
            ],
            [
                'product_id' => '4',
                'price' => '100'
            ],
            [
                'product_id' => '5',
                'price' => '100'
            ],
            [
                'product_id' => '6',
                'price' => '150'
            ],
            [
                'product_id' => '7',
                'price' => '100'
            ],
            [
                'product_id' => '8',
                'price' => '150'
            ],
            [
                'product_id' => '9',
                'price' => '100'
            ],
            [
                'product_id' => '10',
                'price' => '100'
            ],
            [
                'product_id' => '11',
                'price' => '100'
            ],
            [
                'product_id' => '12',
                'price' => '100'
            ],
            [
                'product_id' => '13',
                'price' => '100'
            ],
            [
                'product_id' => '14',
                'price' => '100'
            ],
            [
                'product_id' => '15',
                'price' => '100'
            ],
            [
                'product_id' => '16',
                'price' => '100'
            ],
            [
                'product_id' => '17',
                'price' => '100'
            ],
            [
                'product_id' => '18',
                'price' => '100'
            ],
            [
                'product_id' => '19',
                'price' => '100'
            ],
            [
                'product_id' => '20',
                'price' => '100'
            ],
            [
                'product_id' => '21',
                'price' => '100'
            ],
            [
                'product_id' => '22',
                'price' => '100'
            ],
            [
                'product_id' => '23',
                'price' => '100'
            ],
            [
                'product_id' => '24',
                'price' => '100'
            ],
            [
                'product_id' => '25',
                'price' => '100'
            ],
            [
                'product_id' => '26',
                'price' => '100'
            ],
            [
                'product_id' => '27',
                'price' => '100'
            ],
            [
                'product_id' => '28',
                'price' => '100'
            ],
            [
                'product_id' => '29',
                'price' => '100'
            ]
        ]);
    }
}
