<?php

use Illuminate\Database\Seeder;
use App\Train;

class TrainTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Train::class, 120)->create();
    }
}
