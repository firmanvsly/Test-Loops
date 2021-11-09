<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name'       => 'Firman',
                'email'      => 'firmanvsly@gmail.com',
                'password'   => bcrypt('password'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name'       => 'Firmansyah',
                'email'      => 'firmansyah@gmail.com',
                'password'   => bcrypt('password'),
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
