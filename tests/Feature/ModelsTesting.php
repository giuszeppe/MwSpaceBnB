<?php

namespace Tests\Feature;

use App\Models\Apartment;
use App\Models\Message;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ModelsTesting extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */

    public function all_created()
    {
        $this->assertEquals(10, User::count());
        $this->assertEquals(10, Message::count());
        $this->assertEquals(10, Apartment::count());
    }
}
