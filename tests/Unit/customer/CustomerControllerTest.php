<?php

namespace Tests\Feature\Http\Controllers;

use Tests\TestCase;
use Illuminate\Support\Str;
use App\Http\Controllers\CustomerController;

// global $randomId;


/**
 * Class CustomerControllerTest.
 *
 * @covers \App\Http\Controllers\CustomerController
 */
final class CustomerControllerTest extends TestCase
{
    private CustomerController $clientController;

    /**
     * {@inheritdoc}
     */
    protected function setUp(): void
    {
        parent::setUp();
        
        $this->clientController = new CustomerController();
        $this->app->instance(CustomerController::class, $this->clientController);
    }

    /**
     * {@inheritdoc}
     */
    protected function tearDown(): void
    {
        parent::tearDown();

        unset($this->clientController);
    }

    public function testIndex(): void
    {
        $this->get('/index')
            ->assertStatus(200);
    }

    public function testShow(): void
    {
        $randomId = rand(0,10);
        $this->get('/show/'.$randomId)
            ->assertStatus(200);
    }

    public function testCreate(): void
    {
        $this->get('/user/new')
            ->assertStatus(200);
    }
    
    public function testStore(): void
    {
        $data = [
            'firstname' => fake()->name(),
            'lastname' => fake()->name(),
            'username' => fake()->username(),
            'email' => fake()->unique()->safeEmail(),
            'password' => bcrypt('secret'),
        ];

        $this->post('/store', $data)
        ->assertStatus(302);
    }


    public function testEdit(): void
    {
        $randomId = rand(0,10);
        $this->get('/user/edit/'.$randomId)
            ->assertStatus(200);
    }

    public function testUpdate(): void
    {
        $randomId = rand(0,10);
        $this->put('/user/edit/submit/'.$randomId, [ /* data */ ])
            ->assertStatus(302);
    }

    public function testDelete(): void
    {
        $randomId = rand(0,10);
        $this->delete('/user/delete/submit/'.$randomId)
            ->assertStatus(302);
    }

}
