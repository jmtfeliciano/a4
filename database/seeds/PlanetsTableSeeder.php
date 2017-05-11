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
               'name' => 'Pluto',
               'galaxies_name' => 'Milky Way'
          ]);

          Planet::insert([
               'created_at' => Carbon\Carbon::now()->toDateTimeString(),
               'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
               'name' => 'Earth',
               'galaxies_name' => 'Milky Way'
          ]);

          Planet::insert([
               'created_at' => Carbon\Carbon::now()->toDateTimeString(),
               'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
               'name' => 'KELT1b',
               'galaxies_name' => 'Andromeda'
          ]);








          }


    }
