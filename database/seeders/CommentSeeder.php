<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comments')->insert([
            [
                'post_id'    => 1,
                'name'       => 'Firman',
                'email'      => 'firmanvsly@gmail.com',
                'website'    => 'firman.com',
                'comment'    => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus at neque placerat, condimentum tortor ut, faucibus est.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'post_id'    => 1,
                'name'       => 'Syah',
                'email'      => 'syah@gmail.com',
                'website'    => 'syah.com',
                'comment'    => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus at neque placerat, condimentum tortor ut, faucibus est.',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
