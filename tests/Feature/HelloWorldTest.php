<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Symfony\Component\HttpFoundation\Response;
use Tests\TestCase;

class HelloWorldTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testHelloWorldCommand()
    {
        $this->json('GET', '/hello-world-command')
            ->assertStatus(Response::HTTP_OK)
            ->assertSee('I printed Hello World');
    }

    public function testHelloWorldEvent()
    {
        $this->json('GET', '/hello-world-event')
            ->assertStatus(Response::HTTP_OK)
            ->assertSee('I printed Hello World');
    }
}
