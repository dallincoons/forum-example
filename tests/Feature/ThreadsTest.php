<?php

namespace Tests\Feature;

use App\Thread;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ThreadsTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function a_user_can_view_all_threads()
    {
        $thread = factory(Thread::class)->create();

        $response = $this->get('/threads');
        $response->assertSee($thread->title);
    }

    /** @test */
    public function a_user_can_view_a_single_thread()
    {
        $thread = factory(Thread::class)->create();

        $response = $this->get('/thread/' . $thread->getKey());
        $response->assertSee($thread->title);
    }
}
