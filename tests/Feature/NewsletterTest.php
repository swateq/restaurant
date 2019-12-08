<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class NewsletterTest extends TestCase
{
    /** @test */
    public function a_guest_can_add_email_to_newsletter ()
    {
        $this->post('newsletter',['email' => 'testmail@gmail.com'])->assertStatus(200);
    }
}
