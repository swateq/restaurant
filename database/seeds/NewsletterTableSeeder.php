<?php

use App\Newsletter;
use Illuminate\Database\Seeder;

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
