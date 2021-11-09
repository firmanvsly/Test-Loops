<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            'user_id'    => 1,
            'title'      => 'Lorem ipsum dolor sit amet',
            'slug'       => Str::slug(''),
            'content'    => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus at neque placerat, condimentum tortor ut, faucibus est. Sed non aliquet metus, nec porta massa. Nullam semper ligula odio. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis eget turpis erat. Curabitur hendrerit nec elit eget dictum. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Quisque congue erat at urna pulvinar, non posuere quam pellentesque. Pellentesque eros ex, molestie vitae lectus non, mollis placerat arcu. Cras nec porta neque, et porttitor augue.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
