<?php

use Illuminate\Database\Seeder;
use App\Product;
class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->delete();
        DB::table('products')->insert([
            [
                'name' => 'Apple',
                'shop_id' => 1,
                'description' => 'Apple'
            ],
            [
                'name' => 'Bread & Buns',
                'shop_id' => 1,
                'description' => 'Bread & Buns'
            ],
            [
                'name' => 'Paneer & Cream',
                'shop_id' => 1,
                'description' => 'Paneer & Cream'
            ],
            [
                'name' => 'Detergent & Dishwash',
                'shop_id' => 1,
                'description' => 'Detergent & Dishwash'
            ],
            [
                'name' => 'Apple',
                'shop_id' => 2,
                'description' => 'Apple'
            ],
            [
                'name' => 'Bread & Buns',
                'shop_id' => 2,
                'description' => 'Bread & Buns'
            ],
            [
                'name' => 'Paneer & Cream',
                'shop_id' => 2,
                'description' => 'Paneer & Cream'
            ],
            [
                'name' => 'Detergent & Dishwash',
                'shop_id' => 2,
                'description' => 'Detergent & Dishwash'
            ],
            [
                'name' => 'Apple',
                'shop_id' => 3,
                'description' => 'Apple'
            ],
            [
                'name' => 'Bread & Buns',
                'shop_id' => 3,
                'description' => 'Bread & Buns'
            ],
            [
                'name' => 'Paneer & Cream',
                'shop_id' => 3,
                'description' => 'Paneer & Cream'
            ],
            [
                'name' => 'Detergent & Dishwash',
                'shop_id' => 3,
                'description' => 'Detergent & Dishwash'
            ],
            [
                'name' => 'Apple',
                'shop_id' => 4,
                'description' => 'Apple'
            ],
            [
                'name' => 'Bread & Buns',
                'shop_id' => 4,
                'description' => 'Bread & Buns'
            ],
            [
                'name' => 'Paneer & Cream',
                'shop_id' => 4,
                'description' => 'Paneer & Cream'
            ],
            [
                'name' => 'Detergent & Dishwash',
                'shop_id' => 4,
                'description' => 'Detergent & Dishwash'
            ],
            [
                'name' => 'Apple',
                'shop_id' => 5,
                'description' => 'Apple'
            ],
            [
                'name' => 'Bread & Buns',
                'shop_id' => 5,
                'description' => 'Bread & Buns'
            ],
            [
                'name' => 'Paneer & Cream',
                'shop_id' => 5,
                'description' => 'Paneer & Cream'
            ],
            [
                'name' => 'Detergent & Dishwash',
                'shop_id' => 5,
                'description' => 'Detergent & Dishwash'
            ],
            [
                'name' => 'Soft drink & Juice',
                'shop_id' => 6,
                'description' => 'Soft drink & Juice'
            ],
            [
                'name' => 'Tea & Coffee',
                'shop_id' => 6,
                'description' => 'Tea & Coffee'
            ],
            [
                'name' => 'Hair care',
                'shop_id' => 6,
                'description' => 'Hair care'
            ],
            [
                'name' => 'Skin care',
                'shop_id' => 6,
                'description' => 'Skin care'
            ],
            [
                'name' => 'Crockery',
                'shop_id' => 6,
                'description' => 'Crockery'
            ],
            [
                'name' => 'Gardening',
                'shop_id' => 6,
                'description' => 'Gardening'
            ],
            [
                'name' => 'Pet food & Accessories',
                'shop_id' => 6,
                'description' => 'Pet food & Accessories'
            ],
            [
                'name' => 'Diapers & Wipes',
                'shop_id' => 6,
                'description' => 'Diapers & Wipes'
            ],
            [
                'name' => 'Baby food & Formula',
                'shop_id' => 6,
                'description' => 'Baby food & Formula'
            ]
        ]);

        DB::table('product_images')->delete();
        DB::table('product_images')->insert([
            [
                'product_id' => '1',
                'url' => 'http://localhost/grocery/public/storage/products/R5SW1qJ2D3ETCmYpLyIbP9aWEyOCtgQFUby27Cxq.jpeg',
                'position'=>'0'
            ],
            [
                'product_id' => '1',
                'url' => 'http://localhost/grocery/public/storage/products/k82Axg9Couy9UaOqDnVJsYrpsDRpkX1oszcvlbjx.jpeg',
                'position'=>'1'
            ],
            [
                'product_id' => '2',
                'url' => 'http://localhost/grocery/public/storage/products/LrRrMdcgBdwBPLGIRLBWTrtqUSdUVcaXklkO2klI.jpeg',
                'position'=>'0'
            ],
            [
                'product_id' => '2',
                'url' => 'http://localhost/grocery/public/storage/products/pON7lKo5oYhyotLi0GdDloEu3CV6dGjuHZnrgt4v.jpeg',
                 'position'=>'1'
            ],
            [
                'product_id' => '3',
                'url' => 'http://localhost/grocery/public/storage/products/QquCGNl46gLNXMQclMBJwqdwTKp9uVVaeGsmgeyw.jpeg',
                'position'=>'0'
            ],
            [
                'product_id' => '3',
                'url' => 'http://localhost/grocery/public/storage/products/toEhmeg5IBlYltKnghAoK3wadlQnaTxshTYl1vIb.jpeg',
                'position'=>'1'
            ],
            [
                'product_id' => '4',
                'url' => 'http://localhost/grocery/public/storage/products/HehgFxxZUawFrtzmJ9Mqq1kpLlcjBJYFtGmeprxc.jpeg',
                'position'=>'0'
            ],
            [
                'product_id' => '4',
                'url' => 'http://localhost/grocery/public/storage/products/u2I1pKiP1dE7nui1UshZdWmbP2ALUnNNJVxAEePR.jpeg',
                'position'=>'1'
            ],
            [
                'product_id' => '5',
                'url' => 'http://localhost/grocery/public/storage/products/L2ZKx5a4SQ3CqDCPdCy0mXOlboOqGxwOK8lin6Lu.jpeg',
                'position'=>'0'
            ],
            [
                'product_id' => '5',
                'url' => 'http://localhost/grocery/public/storage/products/rqnZSJeyghuj3mGvvrjnx0gBdOSUhwicBqm949xV.jpeg',
                'position'=>'1'
            ],
            [
                'product_id' => '6',
                'url' => 'http://localhost/grocery/public/storage/products/nm0gd5SF6V8zx6ICr32llS2YLBJiivd2L1wRrrxd.jpeg',
                'position'=>'0'
            ],
            [
                'product_id' => '6',
                'url' => 'http://localhost/grocery/public/storage/products/ab66Wv5gLiytPfZHRF8n6tbiGa7SEbc6DBH8liDG.jpeg',
                'position'=>'1'
            ],
            [
                'product_id' => '7',
                'url' => 'http://localhost/grocery/public/storage/products/ezJnPkuRhSAhESh1DgxM1KMmSHIgsyM32tSnhT4c.jpeg',
                'position'=>'0'
            ],
            [
                'product_id' => '7',
                'url' => 'http://localhost/grocery/public/storage/products/ASdB6BSPCkmZ50Dp518qzUujYY38FpfiDsIyKXgu.jpeg',
                'position'=>'1'
            ],
            [
                'product_id' => '8',
                'url' => 'http://localhost/grocery/public/storage/products/jYdV2NyMHK5PUIsP1G3kRRvv8j6MJgYfkl7BCgUp.jpeg',
                'position'=>'0'
            ],
            [
                'product_id' => '8',
                'url' => 'http://localhost/grocery/public/storage/products/PIAMCHpRCphvuVXtMYpNE0FL5lLbzYIyFoI4eD7m.jpeg',
                'position'=>'1'
            ],
            [
                'product_id' => '9',
                'url' => 'http://localhost/grocery/public/storage/products/u5bQHIQZjBLlaCJSTTKSyOw9PHOLtomTnFi7dWXp.jpeg',
                'position'=>'0'
            ],
            [
                'product_id' => '9',
                'url' => 'http://localhost/grocery/public/storage/products/0MqkYmCSKldU2nSJI1ZDzRR6SurDer7hQWpsDLg6.jpeg',
                'position'=>'1'
            ],
            [
                'product_id' => '10',
                'url' => 'http://localhost/grocery/public/storage/products/ZzKsj4BFpnIU9OcJ0AxGG3C647HHyuO2fOAUUg7M.jpeg',
                'position'=>'0'
            ],
            [
                'product_id' => '10',
                'url' => 'http://localhost/grocery/public/storage/products/acrYACIwwMxhDxRS0gdefdlPEsAwsBpKfHWT4MLh.jpeg',
                'position'=>'1'
            ],
            [
                'product_id' => '11',
                'url' => 'http://localhost/grocery/public/storage/products/jZe97330tHI147eRrmUwY3bBs6YdsLHm3emTz7lL.jpeg',
                'position'=>'0'
            ],
            [
                'product_id' => '11',
                'url' => 'http://localhost/grocery/public/storage/products/yS0fpP4zvNOKbHbuMVUGMrkg1YpeApfelNqyFsUt.jpeg',
                'position'=>'1'
            ],
            [
                'product_id' => '12',
                'url' => 'http://localhost/grocery/public/storage/products/JTJ6v6gTOLBuFW1T2WyrwbbX9TpN1G1XW7nsHORT.jpeg',
                'position'=>'0'
            ],
            [
                'product_id' => '12',
                'url' => 'http://localhost/grocery/public/storage/products/isWfxO4wxyDvUoKza1ciQUBNiAVsXVykawiWOj5i.jpeg',
                'position'=>'1'
            ],
            [
                'product_id' => '13',
                'url' => 'http://localhost/grocery/public/storage/products/eRByleGOO2U8tO5u1TFdIIucOvN3i6CgDM3rqzfK.jpeg',
                'position'=>'0'
            ],
            [
                'product_id' => '13',
                'url' => 'http://localhost/grocery/public/storage/products/icicc5vNDxb7rhlTmmEHCSG3acYzKG10c2KanSt8.jpeg',
                'position'=>'1'
            ],
            [
                'product_id' => '14',
                'url' => 'http://localhost/grocery/public/storage/products/2fad2NCgh8eVDMjTpC4N1WsUWNC63tKJgXKUKOtl.jpeg',
                'position'=>'0'
            ],
            [
                'product_id' => '14',
                'url' => 'http://localhost/grocery/public/storage/products/l64IQGeubPUcZ3eklPeeYiv2uBCxyCEov5ebO3la.jpeg',
                'position'=>'1'
            ],
            [
                'product_id' => '15',
                'url' => 'http://localhost/grocery/public/storage/products/vaCVg83Tbnjeo7jeU37GRsbEOs1MvaFCLgBEcpMy.jpeg',
                'position'=>'0'
            ],
            [
                'product_id' => '15',
                'url' => 'http://localhost/grocery/public/storage/products/jDz7MnMgP0HYnVdv14u2Nlc8FVzyXWSPottr0m8v.jpeg',
                'position'=>'1'
            ],
            [
                'product_id' => '16',
                'url' => 'http://localhost/grocery/public/storage/products/NYIzI7RzMyE9IwNbgaxVuXn8XA0W3UuRiNMtJUVX.jpeg',
                'position'=>'0'
            ],
            [
                'product_id' => '16',
                'url' => 'http://localhost/grocery/public/storage/products/6NJ2ZVV1LR6Lg6kfdZJ2gX76oUw3JW7v6abGxn0z.jpeg',
                'position'=>'1'
            ],
            [
                'product_id' => '17',
                'url' => 'http://localhost/grocery/public/storage/products/5ZBuVbbTm1GeY3BcapFd5fQflvQVW9NIOWzThmBh.jpeg',
                'position'=>'0'
            ],
            [
                'product_id' => '17',
                'url' => 'http://localhost/grocery/public/storage/products/PagOLSlnwYE3UqBxVCd3ePfP9sIu2JPNUzTdlzGX.jpeg',
                'position'=>'1'
            ],
            [
                'product_id' => '18',
                'url' => 'http://localhost/grocery/public/storage/products/hmUmPVI0uFjzzSJYYCtEta6AnR36Dq7GpGpGex0k.jpeg',
                'position'=>'0'
            ],
            [
                'product_id' => '18',
                'url' => 'http://localhost/grocery/public/storage/products/aXArfrsuz9ZYjXUhg98XAn9HRVT9HBWXNDCMe9VQ.jpeg',
                'position'=>'1'
            ],
            [
                'product_id' => '19',
                'url' => 'http://localhost/grocery/public/storage/products/c5Bm9mXmsbMEmXZe1Kob8RVQp40K19RKAoCQsbJ8.jpeg',
                'position'=>'0'
            ],
            [
                'product_id' => '19',
                'url' => 'http://localhost/grocery/public/storage/products/lWIh4JENWlLiWsmEyfTYBmGjPPZ7LfPA3hgcCHl9.jpeg',
                'position'=>'1'
            ],
            [
                'product_id' => '20',
                'url' => 'http://localhost/grocery/public/storage/products/F6W0aVeZ43UHIqXCkkS3rJOR1XTB6Qmr1ROcOwqL.jpeg',
                'position'=>'0'
            ],
            [
                'product_id' => '20',
                'url' => 'http://localhost/grocery/public/storage/products/UHIcCu52suwHhEiyFrlfIluTDVz9Q6KwlyNTsc0o.jpeg',
                'position'=>'1'
            ],
            [
                'product_id' => '21',
                'url' => 'http://localhost/grocery/public/storage/products/BS5gUtwXMGSnNbesms3bOCYcgm1MqiMadrZtOd73.jpeg',
                'position'=>'0'
            ],
            [
                'product_id' => '21',
                'url' => 'http://localhost/grocery/public/storage/products/9BJsNY5MFjubNW5sAOvsP2BilLtuwSTYlWpHSR3I.jpeg',
                'position'=>'1'
            ],
            [
                'product_id' => '22',
                'url' => 'http://localhost/grocery/public/storage/products/XyAZHuelhais8qn8Bqg65SjvaWKv60IPNyxw1YB9.jpeg',
                'position'=>'0'
            ],
            [
                'product_id' => '22',
                'url' => 'http://localhost/grocery/public/storage/products/s76z5fZ5p2sNnd03fg6W5jcry9w8Fevhun8BkHy0.jpeg',
                'position'=>'1'
            ],
            [
                'product_id' => '23',
                'url' => 'http://localhost/grocery/public/storage/products/qY0BZPdDv3AGV0OfDfBYXKC3oaJOnABn4ttK6Rcl.jpeg',
                'position'=>'0'
            ],
            [
                'product_id' => '23',
                'url' => 'http://localhost/grocery/public/storage/products/IN24BeBDGK1bLI6y4R1Rdvz4a3N6MyYMbHHAnqTi.jpeg',
                'position'=>'1'
            ],
            [
                'product_id' => '24',
                'url' => 'http://localhost/grocery/public/storage/products/NtEyhZ1x9iigXU1os8iVsrF9ESwyAeBuRZr23ymz.jpeg',
                'position'=>'0'
            ],
            [
                'product_id' => '24',
                'url' => 'http://localhost/grocery/public/storage/products/6lk6ITjD04PUFk1CJ5pKIbIx8lIzMLNXPr2RcMqt.jpeg',
                'position'=>'1'
            ],
            [
                'product_id' => '25',
                'url' => 'http://localhost/grocery/public/storage/products/4lgq0xj72L3kbg7up5uLJSxvI68brugEAUC9aPAP.jpeg',
                'position'=>'0'
            ],
            [
                'product_id' => '25',
                'url' => 'http://localhost/grocery/public/storage/products/xXo8cdD8jmi7ASHWux4frJ3Q9ADxBGeSsuKVALUX.jpeg',
                'position'=>'1'
            ],
            [
                'product_id' => '26',
                'url' => 'http://localhost/grocery/public/storage/products/ZNHCsHc1PAu7DWOkzOX73V4VUtJ01yPFSUx66ROA.jpeg',
                'position'=>'0'
            ],
            [
                'product_id' => '26',
                'url' => 'http://localhost/grocery/public/storage/products/LqjdriUG1m2BzUxsMlCsHEvKKf2zPPfJGawIVDzb.jpeg',
                'position'=>'1'
            ],
            [
                'product_id' => '27',
                'url' => 'http://localhost/grocery/public/storage/products/iTkNdh4PwKJWr4NmTk0eZiY2NNQW9OP1yP3Phw0F.jpeg',
                'position'=>'0'
            ],
            [
                'product_id' => '27',
                'url' => 'http://localhost/grocery/public/storage/products/WVHUJWQNRaoaRkTyXKigfPXYdOErSfr5lVpxfaIm.png',
                'position'=>'1'
            ],
            [
                'product_id' => '28',
                'url' => 'http://localhost/grocery/public/storage/products/j7Z2yKhXnF0MaZ9gLfhodbHV6Db1eC5k5xhet0xM.jpeg',
                'position'=>'0'
            ],
            [
                'product_id' => '28',
                'url' => 'http://localhost/grocery/public/storage/products/3tlN302blyvjWabGMXvM9YLwtrvtmbDoAJTlxxEO.png',
                'position'=>'1'
            ],
            [
                'product_id' => '29',
                'url' => 'http://localhost/grocery/public/storage/products/MmxzaX7MxPFlyAP7qV8aG4qoNC6QV5JEMPw1cSOc.jpeg',
                'position'=>'0'
            ],
            [
                'product_id' => '29',
                'url' => 'http://localhost/grocery/public/storage/products/4FZlVCerOTGgMmVBVQdGtfbu4v1LIRrW0H0qSN6b.jpeg',
                'position'=>'1'
            ],
            [
                'product_id' => '1',
                'url' => 'http://localhost/grocery/public/storage/products/aAr6xPqPsnJIhDSzuSdxmNSc5r2psxjmcU84FeeS.jpeg',
                'position'=>'0'
            ],
            [
                'product_id' => '2',
                'url' => 'http://localhost/grocery/public/storage/products/wNu986ZE3XDhSqw7W7PpLHRZKKxvimUj3FvMDPTg.jpeg',
                'position'=>'0'
            ],
            [
                'product_id' => '3',
                'url' => 'http://localhost/grocery/public/storage/products/DDRF3Bd9YYZambRjm7otRT6MxmWDGtoBiz6RIeM9.jpeg',
                'position'=>'0'
            ],
            [
                'product_id' => '4',
                'url' => 'http://localhost/grocery/public/storage/products/WkXWWe8coGYYLCk5tSExGxedkxASfSOgjIaHpj0R.jpeg',
                'position'=>'0'
            ],
            [
                'product_id' => '5',
                'url' => 'http://localhost/grocery/public/storage/products/VT5shogObgTxHcEoAtCs3k1qsI7D3O2JmWPTWn5A.jpeg',
                'position'=>'0'
            ],
            [
                'product_id' => '6',
                'url' => 'http://localhost/grocery/public/storage/products/HBfOHOZ54iZshlYQZw150O4Yk0TwvALVBBWgmlzc.jpeg',
                'position'=>'0'
            ],
            [
                'product_id' => '7',
                'url' => 'http://localhost/grocery/public/storage/products/loD1lFzBYf3CAj4TvuHFTSJAEz3xjQqnxRQoPFSo.jpeg',
                'position'=>'0'
            ],
            [
                'product_id' => '8',
                'url' => 'http://localhost/grocery/public/storage/products/gZEbPuQxXKc9J8Lbe1tHsfgaWXl3WgabcZWCczuB.jpeg',
                'position'=>'0'
            ],
            [
                'product_id' => '9',
                'url' => 'http://localhost/grocery/public/storage/products/w1XRkNgYDdQSncoUfuI9D4weAoz7zuBzUsyCGoZY.jpeg',
                'position'=>'0'
            ],
            [
                'product_id' => '10',
                'url' => 'http://localhost/grocery/public/storage/products/1jSVs20oyU8VVMVMzbTfQBD7hDSS8iN4Pj5xFoQf.jpeg',
                'position'=>'0'
            ],
            [
                'product_id' => '11',
                'url' => 'http://localhost/grocery/public/storage/products/dTERpbY2uuMStRx4o7WGhfRt7dj3hXDqbifp8mDR.jpeg',
                'position'=>'0'
            ],
            [
                'product_id' => '12',
                'url' => 'http://localhost/grocery/public/storage/products/HmRX63blQs0CQmbwFTlQ3YHI4YV9zM2CVxgApUVg.jpeg',
                'position'=>'0'
            ],
            [
                'product_id' => '13',
                'url' => 'http://localhost/grocery/public/storage/products/9QTXYTGKTVYJR3XeMlmrsVHKVq4EibU5VZ8K2bZb.jpeg',
                'position'=>'0'
            ],
            [
                'product_id' => '14',
                'url' => 'http://localhost/grocery/public/storage/products/ZHpbw2ENMwIY7U2UcVpLdPUhzJttEuxpEbhjYEIn.jpeg',
                'position'=>'0'
            ],
            [
                'product_id' => '15',
                'url' => 'http://localhost/grocery/public/storage/products/9FapZuzx2QREpC04GtKLp12wRpC2ogakRFVbJZvY.jpeg',
                'position'=>'0'
            ],
            [
                'product_id' => '16',
                'url' => 'http://localhost/grocery/public/storage/products/toHTFIcNOOruEoXvrvu9SBH5SRg1GdPH9jtZW284.jpeg',
                'position'=>'0'
            ],
            [
                'product_id' => '17',
                'url' => 'http://localhost/grocery/public/storage/products/Ziaz6EkjqBJdeYWdpiPGXVVVvGHHulT5WTIK9VZn.jpeg',
                'position'=>'0'
            ],
            [
                'product_id' => '18',
                'url' => 'http://localhost/grocery/public/storage/products/5mufljBE78BSaIxO9ag3DtFLjZWOFkjkt8psjDMX.jpeg',
                'position'=>'0'
            ],
            [
                'product_id' => '19',
                'url' => 'http://localhost/grocery/public/storage/products/y5lNtuMPX4GN0WQTbc4PZxemDcJTYNHC2mjWp47z.jpeg',
                'position'=>'0'
            ],
            [
                'product_id' => '20',
                'url' => 'http://localhost/grocery/public/storage/products/FYNBtbC6CqALv0HXDLnQLRIoVtLBqv6OLuSAjcIN.jpeg',
                'position'=>'0'
            ],
            [
                'product_id' => '21',
                'url' => 'http://localhost/grocery/public/storage/products/ZRc9mx3ykfvfQ15HtaB9LF4h6Fsf0GegOb8ekwxu.jpeg',
                'position'=>'0'
            ],
            [
                'product_id' => '22',
                'url' => 'http://localhost/grocery/public/storage/products/6dcjFp2kVC6qGxgIR4IwQ42WVt1eDi7nKrpMF07Z.jpeg',
                'position'=>'0'
            ],
            [
                'product_id' => '23',
                'url' => 'http://localhost/grocery/public/storage/products/xyvOXPQX7PmkWphgqrzO6wPk8JCNTMC6EBtjEaOA.jpeg',
                'position'=>'0'
            ],
            [
                'product_id' => '24',
                'url' => 'http://localhost/grocery/public/storage/products/hkf3wpudlsc6r6gMVPJOw4N0EAqxGQyuuXoaWrmE.jpeg',
                'position'=>'0'
            ],
            [
                'product_id' => '25',
                'url' => 'http://localhost/grocery/public/storage/products/ldiok9fwCBWNX77JfPPAH8f3woAvmrmLdw9jk7Tt.jpeg',
                'position'=>'0'
            ],
            [
                'product_id' => '26',
                'url' => 'http://localhost/grocery/public/storage/products/5cNmZ4aNPEumTxewIXQoY5C81bq2QuwRn9Bd6E6U.jpeg',
                'position'=>'0'
            ],
            [
                'product_id' => '27',
                'url' => 'http://localhost/grocery/public/storage/products/y0RvxG9vTjJWZaedWnoW1lJ1QOqZKw008HQYtLdz.png',
                'position'=>'0'
            ],
            [
                'product_id' => '28',
                'url' => 'http://localhost/grocery/public/storage/products/eJEIa4HiHgqGKcd6GIuedZjkyq9HR22sW3l524K4.png',
                'position'=>'0'
            ],
            [
                'product_id' => '29',
                'url' => 'http://localhost/grocery/public/storage/products/ZhgK3aaWEQmCD4omUDIe84z76MVrVZGS3ub20e0d.jpeg',
                'position'=>'0'
            ]
           ]); 


        // $Products = Product::all();
        // foreach($Products as $key => $Product){
        //      $Product->categories()->detach();
        //      $Product->categories()->attach($key+1);   
        // }
    }
}
