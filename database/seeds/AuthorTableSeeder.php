<?php

use Illuminate\Database\Seeder;

class AuthorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('authors')->insert([
        	'id' => 1,
            'first_name' => 'Robin',
            'last_name' => 'Nixon',
           
        ]);
         DB::table('authors')->insert([
        	'id' => 2,
            'first_name' => 'Christopher',
            'last_name' => 'Negus',
           
        ]);
          DB::table('authors')->insert([
        	'id' => 3,
            'first_name' => 'Douglas',
            'last_name' => 'Crockford',
           
        ]);
    }
}
