<?php

use Illuminate\Database\Seeder;

class AddonsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('addons')->delete();
        DB::table('addons')->insert([
            [
                'name' => 'Cheese',
                'shop_id' => 1,
            ],
            [
                'name' => 'Paneer',
                'shop_id' => 1,
            ],
            [
                'name' => 'Apple',
                'shop_id' => 1,
            ],
            [
                'name' => 'Banana',
                'shop_id' => 1,
            ],
            [
                'name' => 'Tomato',
                'shop_id' => 1,
            ],
            [
                'name' => 'Cheese',
                'shop_id' => 2,
            ],
            [
                'name' => 'Paneer',
                'shop_id' => 2,
            ],
            [
                'name' => 'Apple',
                'shop_id' => 2,
            ],
            [
                'name' => 'Banana',
                'shop_id' => 2,
            ],
            [
                'name' => 'Tomato',
                'shop_id' => 2,
            ],
            [
                'name' => 'Cheese',
                'shop_id' => 3,
            ],
            [
                'name' => 'Paneer',
                'shop_id' => 3,
            ],
            [
                'name' => 'Apple',
                'shop_id' => 3,
            ],
            [
                'name' => 'Banana',
                'shop_id' => 3,
            ],
            [
                'name' => 'Tomato',
                'shop_id' => 3,
            ],
            [
                'name' => 'Cheese',
                'shop_id' => 4,
            ],
            [
                'name' => 'Paneer',
                'shop_id' => 4,
            ],
            [
                'name' => 'Apple',
                'shop_id' => 4,
            ],
            [
                'name' => 'Banana',
                'shop_id' => 4,
            ],
            [
                'name' => 'Tomato',
                'shop_id' => 4,
            ],
            [
                'name' => 'Cheese',
                'shop_id' => 5,
            ],
            [
                'name' => 'Paneer',
                'shop_id' => 5,
            ],
            [
                'name' => 'Apple',
                'shop_id' => 5,
            ],
            [
                'name' => 'Banana',
                'shop_id' => 5,
            ],
            [
                'name' => 'Tomato',
                'shop_id' => 5,
            ],
            [
                'name' => 'Cheese',
                'shop_id' => 6,
            ],
            [
                'name' => 'Paneer',
                'shop_id' => 6,
            ],
            [
                'name' => 'Apple',
                'shop_id' => 6,
            ],
            [
                'name' => 'Banana',
                'shop_id' => 6,
            ],
            [
                'name' => 'Tomato',
                'shop_id' => 6,
            ]
        ]);
    }
}
