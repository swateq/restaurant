<?php

namespace Tests\Feature;

use App\Reservation;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ReservationsTest extends TestCase
{
    use RefreshDatabase, WithFaker;

    /** @test */
    public function a_user_can_create_reservation ()
    {
        $this->signIn();
        $this->get('/admin/reservations/create')->assertStatus(200);

        $attributes = [
            'title' => $this->faker->sentence,
            'start' => "2019-12-12 20:00"
        ];

        $this->post('admin/reservations', $attributes)->assertRedirect('admin/reservations');
        $this->assertDatabaseHas('reservations', $attributes);
    }

    /** @test */
    public function a_user_can_delete_reservation ()
    {
        $this->signIn();

        $reservation = Reservation::create([
            'title' => $this->faker->sentence,
            'start' => "2019-12-12 20:00"
        ]);

        $this->post('admin/reservations/delete',['id' => $reservation->id])->assertStatus(200);
    }

    /** @test */
    public function a_user_can_update_start_date_for_reservation ()
    {
        $this->signIn();

        $reservation = Reservation::create([
            'title' => $this->faker->sentence,
            'start' => "2019-12-12 20:00"
        ]);

        $attributes = [
            'id' => $reservation->id,
            'title' => $this->faker->sentence,
            'start' => "2019-12-13 20:00"
        ];

        $this->post('admin/reservations/update',$attributes)->assertStatus(200);
        $this->assertDatabaseHas('reservations', $attributes);
    }
}
