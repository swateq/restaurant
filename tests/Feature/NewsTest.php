<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class NewsTest extends TestCase
{
    use RefreshDatabase, WithFaker;

    /** @test */
    public function guests_cannot_create_a_news()
    {
        $this->get('/admin/news/create')->assertRedirect('/login');

        $attributes = [
            'title' => $this->faker->sentence,
            'seolink' => $this->faker->sentence,
            'content' => $this->faker->text($maxNbChars = 200),
            'active' => $this->faker->boolean($chanceOfGettingTrue = 50),
            'created_at' => $this->faker->dateTime($max = 'now', $timezone = null)
        ];

        $this->post('/admin/news', $attributes)->assertRedirect('/login');
    }

        /** @test */
        public function a_user_can_create_a_news()
        {
            $this->signIn();
            $this->get('/admin/news/create')->assertStatus(200);

            $attributes = [
                'title' => $this->faker->sentence,
                'content' => $this->faker->text($maxNbChars = 200),
                'active' => '1'
            ];

            $this->post('/admin/news', $attributes)->assertRedirect('/admin/news');
            $this->assertDatabaseHas('news', $attributes);
            $this->get('/admin/news')->assertSee($attributes['title']);
        }
}
