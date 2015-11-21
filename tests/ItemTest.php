<?php

use App\Item;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ItemTest extends TestCase
{
    use DatabaseMigrations;
    use WithoutMiddleware;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testCRUD()
    {
//        $body = "";
        $response = $this->call('GET', '/items/search');
        var_dump($response->content());
//        $response = $this->call('POST', '/items', array(), array(),array('CONTENT_TYPE'=>'application/json'),$body);
    }
}
