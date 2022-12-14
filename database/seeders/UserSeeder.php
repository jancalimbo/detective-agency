<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // these are admin users
        $users = [
            [
                'name' => 'Camille Rico',
                'password' => bcrypt('client'),
                'email' => 'camillerico@gmail.com',
                'email_verified_at' => now(),
                'role' => "client",
            ],
            [
                'name' => 'Jodi Lorenzo',
                'password' => bcrypt('client'),
                'email' => 'jlo@yahoo.com',
                'role' => "client",
                'email_verified_at' => now(),
            ],
            [
                'name' => 'Angel Jabal',
                'password' => bcrypt('client'),
                'email' => 'floydgoody@yahoo.com',
                'role' => "client",
                'email_verified_at' => now(),
            ],

        ];

        foreach($users as $user) {
            User::create($user)->assignRole('client');
        }
    }
}
