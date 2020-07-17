<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       	DB::table('categories')->delete();
        DB::table('categories')->insert([
            [
                'name' => 'Fruits & Vegetables',
                'shop_id' => 1,
                'description' => 'Fruits & Vegetables'
            ],
            [
                'name' => 'Bakery, Cake & Dairy',
                'shop_id' => 1,
                'description' => 'Bakery, Cake & Dairy'
            ],
            [
                'name' => 'Cleaning & House Hold',
                'shop_id' => 1,
                'description' => 'Cleaning & House Hold'
            ],
            [
                'name' => 'Fruits & Vegetables',
                'shop_id' => 2,
                'description' => 'Fruits & Vegetables'
            ],
            [
                'name' => 'Bakery, Cake & Dairy',
                'shop_id' => 2,
                'description' => 'Bakery, Cake & Dairy'
            ],
            [
                'name' => 'Cleaning & House Hold',
                'shop_id' => 2,
                'description' => 'Cleaning & House Hold'
            ],
            [
                'name' => 'Fruits & Vegetables',
                'shop_id' => 3,
                'description' => 'Fruits & Vegetables'
            ],
            [
                'name' => 'Bakery, Cake & Dairy',
                'shop_id' => 3,
                'description' => 'Bakery, Cake & Dairy'
            ],
            [
                'name' => 'Cleaning & House Hold',
                'shop_id' => 3,
                'description' => 'Cleaning & House Hold'
            ],
            [
                'name' => 'Fruits & Vegetables',
                'shop_id' => 4,
                'description' => 'Fruits & Vegetables'
            ],
            [
                'name' => 'Bakery, Cake & Dairy',
                'shop_id' => 4,
                'description' => 'Bakery, Cake & Dairy'
            ],
            [
                'name' => 'Cleaning & House Hold',
                'shop_id' => 4,
                'description' => 'Cleaning & House Hold'
            ],
            [
                'name' => 'Fruits & Vegetables',
                'shop_id' => 5,
                'description' => 'Fruits & Vegetables'
            ],
            [
                'name' => 'Bakery, Cake & Dairy',
                'shop_id' => 5,
                'description' => 'Bakery, Cake & Dairy'
            ],
            [
                'name' => 'Cleaning & House Hold',
                'shop_id' => 5,
                'description' => 'Cleaning & House Hold'
            ],
            [
                'name' => 'Beverages',
                'shop_id' => 6,
                'description' => 'Beverages'
            ],
            [
                'name' => 'Beauty & Hygiene',
                'shop_id' => 6,
                'description' => 'Beauty & Hygiene'
            ],
            [
                'name' => 'Kitchen, Garden & Pets',
                'shop_id' => 6,
                'description' => 'Kitchen, Garden & Pets'

            ],
            [
                'name' => 'Baby Care',
                'shop_id' => 6,
                'description' => 'Baby Care'
            ]
        ]);


        DB::table('category_images')->delete();
        DB::table('category_images')->insert([
            [
                'category_id' => '1',
                'url' => 'http://localhost/grocery/public/storage/categories/JwfVe5scSX7xGPNkRDAMCPy1IaAgvX5QS8slHnIp.png',
                'position'=>'0'
            ],
            [
                'category_id' => '2',
                'url' => 'http://localhost/grocery/public/storage/categories/rPqhA4hijOiE6LwFbG7YhODJfm3Q86uSL8Tddjhn.jpeg',
                'position'=>'0'
            ],
            [
                'category_id' => '3',
                'url' => 'http://localhost/grocery/public/storage/categories/lvTthHnO2ajux1mynXiQQUp8ImNBKWHW1qUjscva.jpeg',
                'position'=>'0'
            ],
            [
                'category_id' => '4',
                'url' => 'http://localhost/grocery/public/storage/categories/sAc8WhD1clj0amoKmxRZktjcG382ryJUmqIu4LRZ.png',
                'position'=>'0'
            ],
            [
                'category_id' => '5',
                'url' => 'http://localhost/grocery/public/storage/categories/0dkx496HZmaldL8omMrCcfDZnOY5vTaEoOD3yD02.jpeg',
                'position'=>'0'
            ],
            [
                'category_id' => '6',
                'url' => 'http://localhost/grocery/public/storage/categories/VrQRnJ4gpu98ncnR1LwENTEcMgBeAt1nL1SauF15.jpeg',
                'position'=>'0'
            ],
            [
                'category_id' => '7',
                'url' => 'http://localhost/grocery/public/storage/categories/jYI6Lmleg1f8LTKNtuZnq7coB7iJb7yfizXhcn7n.png',
                'position'=>'0'
            ],
            [
                'category_id' => '8',
                'url' => 'http://localhost/grocery/public/storage/categories/PTupJPbOFkSEoMOwHpYBUaRA3PVnj07OOSsYcETn.jpeg',
                'position'=>'0'
            ],
            [
                'category_id' => '9',
                'url' => 'http://localhost/grocery/public/storage/categories/FZ1miomMZ5apWmcD2BiPFdLwVeJVfoNIVNbiNSIA.jpeg',
                'position'=>'0'
            ],
            [
                'category_id' => '10',
                'url' => 'http://localhost/grocery/public/storage/categories/dDi2M78UJorNIMO0y3PWQxjOaj3or9UbLCosh2v0.png',
                'position'=>'0'
            ],
            [
                'category_id' => '11',
                'url' => 'http://localhost/grocery/public/storage/categories/gp5P7RTNRChB5pwE95kJNlSznHnMEpnNJFVWJHql.jpeg',
                'position'=>'0'
            ],
            [
                'category_id' => '12',
                'url' => 'http://localhost/grocery/public/storage/categories/pCtprltmsxsNhitkAVORE71egGiHX66QLuqJhQI7.jpeg',
                'position'=>'0'
            ],
            [
                'category_id' => '13',
                'url' => 'http://localhost/grocery/public/storage/categories/KWdsjWqnw6PZ5uK3tDER4dThme6fzXoGyM06Fvqg.png',
                'position'=>'0'
            ],
            [
                'category_id' => '14',
                'url' => 'http://localhost/grocery/public/storage/categories/iXtVqXjd5Xly4m6AMIjWNltYy3ux04h7RVoENtRC.jpeg',
                'position'=>'0'
            ],
            [
                'category_id' => '15',
                'url' => 'http://localhost/grocery/public/storage/categories/MjpNVchW8ztAi0EH7OaCuW2cguslMiasFNYylOui.jpeg',
                'position'=>'0'
            ],
            [
                'category_id' => '16',
                'url' => 'http://localhost/grocery/public/storage/categories/wE7CQe4iIrs2aITu505npbBj7VDdlINaAZpJAb3W.jpeg',
                'position'=>'0'
            ],
            [
                'category_id' => '17',
                'url' => 'http://localhost/grocery/public/storage/categories/9byjiTTdnGXqzk52DhHMWJKyWAdwYrRkczOEegQH.jpeg',
                'position'=>'0'
            ],
            [
                'category_id' => '18',
                'url' => 'http://localhost/grocery/public/storage/categories/jGKcLKZ7SJ9cCTAu7IUxuO5dZNioDsp14OSU1Qlz.jpeg',
                'position'=>'0'
            ],
            [
                'category_id' => '19',
                'url' => 'http://localhost/grocery/public/storage/categories/bTgw1TNuviTQfZiff7DpKSCFEsisRRbFf7SROB9W.jpeg',
                'position'=>'0'
            ]
       ]);


 // $Categories = Category::all();
 //        foreach($Categories as $key => $Category){
 //             $Category->products()->detach();
 //             $Category->products()->attach($key+1);   
 //        }


    }
}
