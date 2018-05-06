<?php

namespace Tests\Feature;

use App\Thread;
use App\User;
use Illuminate\Auth\AuthenticationException;
use Tests\TestCase;

class CreateThreadsTest extends TestCase
{
    /** @test */
    public function a_guest_may_not_create_thread()
    {
        $this->withoutExceptionHandling();

        $thread = factory(Thread::class)->make();

        $this->expectException(AuthenticationException::class);
        $this->post('/threads', $thread->toArray());
    }

    /** @test */
    public function an_authenticated_user_can_create_forum_threads()
    {
        $this->withoutExceptionHandling();

        $this->actingAs(factory(User::class)->create());

        $thread = factory(Thread::class)->make();

        $this->post('/threads', $thread->toArray());

        $this->get($thread->path())
            ->assertSee($thread->title)
            ->assertSee($thread->body);
    }
}
