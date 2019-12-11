<?php

use Illuminate\Database\Seeder;
use App\Newsletter;

class NewsletterTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Newsletter::truncate();
        factory(Newsletter::class, 100)->create();
    }
}
