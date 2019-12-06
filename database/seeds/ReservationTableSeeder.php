<?php

use App\Reservation;
use Illuminate\Database\Seeder;

class ReservationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Reservation::truncate();
        factory(Reservation::class, 3)->create();
    }
}
