<?php

use Illuminate\Database\Seeder;

use App\Planet;

class PlanetsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          Planet::insert([
               'created_at' => Carbon\Carbon::now()->toDateTimeString(),
               'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
               'name' => 'Earth',
               'mass' => 2,
          ]);

          Planet::insert([
               'created_at' => Carbon\Carbon::now()->toDateTimeString(),
               'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
               'name' => 'Mars',
               'mass' => 4,
          ]);
    }
}
