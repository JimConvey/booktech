<?php

use Illuminate\Database\Seeder;

class BooksTableSeeder extends Seeder
{
    
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->insert([
        	'id' => 1,
            'isbn' => '978-1491918661',
            'title' => 'Learning PHP, MySQL & JavaScript: With jQuery, CSS & HTML5',
            'author_id' => 1,
            'price' => 9.99,
            'currency' => 'GBP'
        ]);

       DB::table('books')->insert([
       		'id' => 2,
            'isbn'      => '978-0596804848',
            'title'     => "Ubuntu: Up and Running: A Power User's Desktop Guide",
            'author_id' => 1,
            'price'     => 12.99,
            'currency'  => 'GBP'
        ]);

       DB::table('books')->insert([
       		'id' => 3,
            'isbn'      => '978-1118999875',
            'title'     => "Linux Bible",
            'author_id' => 2,
            'price'     => 19.99,
            'currency'  => 'GBP'
        ]);

       DB::table('books')->insert([
       		'id' => 4,
            'isbn'      => '978-0596517748',
            'title'     => "JavaScript: The Good Parts",
            'author_id' => 3,
            'price'     => 8.99,
            'currency'  => 'GBP'
        ]);
    }
}
