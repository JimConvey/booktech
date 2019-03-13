<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class APITest1 extends TestCase
{

    //use RefreshDatabase;


    /** @test  */
    public function a_user_can_request_books_by_RN()
    {      
        $response = $this->json('POST', '/api/books/isbn/filter',['apiToken' => 'OverlySimpleToken1', 'author' => 'Robin Nixon' ]);        

        $response->assertStatus(200)
         ->assertJsonCount(2,  $key = null)
         ->assertJsonFragment(['978-0596804848'])
         ->assertJsonFragment(['978-1491918661']);
    }

     /** @test  */
    public function a_user_can_request_books_by_CN()
    {      
        $response = $this->json('POST', '/api/books/isbn/filter',['apiToken' => 'OverlySimpleToken1', 'author' => 'Christopher Negus' ]);        

        $response->assertStatus(200)
         ->assertJsonCount(1,  $key = null)
         ->assertJsonFragment(['978-1118999875']);       
    }

    
}
