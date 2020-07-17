<?php

use Illuminate\Database\Seeder;
use App\Shop;
class ShopsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('shops')->delete();
        DB::table('shops')->insert([
            [
                'name' => 'Walmart',
                'email' => 'admin@walmart.com',   
                'password' => bcrypt('123456'),
                'address' => 'Ahmedabad, Gujarat, India',
                'maps_address' => 'Ahmedabad, Gujarat, India',
                'latitude' => '23.02250500',
                'longitude' => '72.57136210',
                'estimated_delivery_time' => '30',
                'phone' => '8866884355',
                'avatar'=>'http://localhost/grocery/public/storage/shops/HCzgVPnThRLlmeEjxP9BtVwzPyI4fxcnJe7EPnI9.jpeg',
                'description' => 'Our shop is a retail shop that primarily sells food, either fresh or preserved.'
            ],
            [
                'name' => 'Rancher’s Grocery',
                'email' => 'admin@rancher.com',   
                'password' => bcrypt('123456'),
                'address' => 'Maninagar, Ahmedabad, Gujarat, India',
                'maps_address' => 'Maninagar, Ahmedabad, Gujarat, India',
                'latitude' => '22.99516500',
                'longitude' => '72.60409700',
                'estimated_delivery_time' => '30',
                'phone' => '9768884348',
                'avatar'=>'http://localhost/grocery/public/storage/shops/qyrgTTMXuE6teBsWQEVozMOEO7YGrSFztvUjtrtB.jpeg',
                'description' => 'Our shop is a retail shop that primarily sells food, either fresh or preserved.'
            ],
            [
                'name' => 'Jamboree Marketplace',
                'email' => 'admin@jamboree.com',   
                'password' => bcrypt('123456'),
                'address' => 'Navrangpura, Ahmedabad, Gujarat, India',
                'maps_address' => 'Navrangpura, Ahmedabad, Gujarat, India',
                'latitude' => '23.03654370',
                'longitude' => '72.56113950',
                'estimated_delivery_time' => '30',
                'phone' => '9825895897',
                'avatar'=>'http://localhost/grocery/public/storage/shops/yRfEUDomzFLwYd0g3nNYoYDxYCJdfYjtkugdcFXP.jpeg',
                'description' => 'Our shop is a retail shop that primarily sells food, either fresh or preserved.'
                
            ],
            [
                'name' => 'Nature Cart',
                'email' => 'admin@nature.com',   
                'password' => bcrypt('123456'),
                'address' => 'Usmanpura, Ahmedabad, Gujarat, India',
                'maps_address' => 'Usmanpura, Ahmedabad, Gujarat, India',
                'latitude' => '23.04704870',
                'longitude' => '72.57043620',
                'estimated_delivery_time' => '30',
                'phone' => '9825895897',
                'avatar'=>'http://localhost/grocery/public/storage/shops/d7RA0dCQJW7HcnS0WEKkmwQWyghHqTbAcMr7c4FL.jpeg',
                'description' => 'Our shop is a retail shop that primarily sells food, either fresh or preserved.'
            ],
            [
                'name' => 'Organic Orchard',
                'email' => 'admin@organic.com',   
                'password' => bcrypt('123456'),
                'address' => 'Naroda, Ahmedabad, Gujarat, India',
                'maps_address' => 'Naroda, Ahmedabad, Gujarat, India',
                'latitude' => '23.06858650',
                'longitude' => '72.65359610',
                'estimated_delivery_time' => '30',
                'phone' => '9868884346',
                'avatar'=>'http://localhost/grocery/public/storage/shops/OEZKLMsrKe1BSzeK1ZgHhG5nsuulgl9h1YxCHO4l.jpeg',
                'description' => 'Our shop is a retail shop that primarily sells food, either fresh or preserved.'
            ],
            [
                'name' => 'Fleet Market',
                'email' => 'admin@fleet.com',   
                'password' => bcrypt('123456'),
                'address' => 'Ahmedabad, Gujarat, India',
                'maps_address' => 'Ahmedabad, Gujarat, India',
                'latitude' => '23.02250500',
                'longitude' => '72.57136210',
                'estimated_delivery_time' => '30',
                'phone' => '9868884346',
                'avatar'=>'http://localhost/grocery/public/storage/shops/wEW1lz6S918W71GudakAgmDhGfgN3j7pSITXTZFv.jpeg',
                'description' => 'Our shop is a retail shop that primarily sells food, either fresh or preserved.'
            ],
           
        ]);
        // $Shops = Shop::all();
        // foreach($Shops as $key => $Shop){
        //     $Shop->cuisines()->detach();
        //     $Shop->cuisines()->attach($key+1);   
        // }
        
    }
}
