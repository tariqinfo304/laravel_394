<?php

use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('book')->insert([
            'title' => Str::random(10),
            'book_no' => rand(1,10),
            "author_name" => Str::random(10),
            "publisher" => Str::random(10),
            "image_path" => Str::random(100)
        ]);
    }
}
