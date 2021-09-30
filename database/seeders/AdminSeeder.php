<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Product;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // data dummy user
        $users = [
            [
                'name' => 'admin',
                'email' => 'admin@seeder.com',
                'email_verified_at' => now(),
                'level' => 'admin',
                'password' => bcrypt('passwordadmin')
            ],
            [
                'name' => 'kasir',
                'email' => 'kasir@seeder.com',
                'email_verified_at' => now(),
                'level' => 'kasir',
                'password' => bcrypt('passwordkasir')
            ]
        ];
        $categories = [
            [
                'name_category' => 'Jacket',
            ],
            [
                'name_category' => 'Sweater',
            ],
            [
                'name_category' => 'Sweetpants',
            ],
        ];
        $products = [
            [
                'name_product' => 'Jacket Valhalla',
                'description' => 'Jacket Valhalla Tokyo Revenger',
                'stock' => 300,
                'price' => 300000,
                'category_id' => 1,
            ],
            [
                'name_product' => 'Sweater Sweet',
                'description' => 'Sweater Merk baru',
                'stock' => 250,
                'price' => 250000,
                'category_id' => 2,
            ],
            [
                'name_product' => 'Faster',
                'description' => 'Celana olahraga',
                'stock' => 400,
                'price' => 10000,
                'category_id' => 3,
            ],
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }

        foreach ($products as $product) {
            Product::create($product);
        }

        foreach($users as $user){
            User::create($user);
        }
    }
}
