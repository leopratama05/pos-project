<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

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
        foreach($users as $user){
            User::create($user);
        }
    }
}
