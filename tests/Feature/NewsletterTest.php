<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class NewsletterTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function a_guest_can_add_email_to_newsletter ()
    {
        $attributes = ['email' => 'testmail@gmail.com'];

        $this->post('newsletter', $attributes);
        $this->assertDatabaseHas('newsletters', $attributes);
    }
}
