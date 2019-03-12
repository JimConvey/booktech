<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
        	'id' => 1,
            'title' => 'PHP',                      
        ]);
        DB::table('categories')->insert([
        	'id' => 2,
            'title' => 'Javascript',                      
        ]);
        DB::table('categories')->insert([
        	'id' => 3,
            'title' => 'Linux',                      
        ]);


        DB::table('book_categories')->insert([
        	'book_id' => 1,
            'category_id' => 1,                      
        ]);
        DB::table('book_categories')->insert([
        	'book_id' => 1,
            'category_id' => 2,                      
        ]);
        DB::table('book_categories')->insert([
        	'book_id' => 2,
            'category_id' => 3,                      
        ]);
        DB::table('book_categories')->insert([
        	'book_id' => 3,
            'category_id' => 3,                      
        ]);
        DB::table('book_categories')->insert([
        	'book_id' => 4,
            'category_id' => 2,                      
        ]);
    }
}
