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
          Book::insert([
               'created_at' => Carbon\Carbon::now()->toDateTimeString(),
               'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
               'name' => 'Earth',
          ]);

          Book::insert([
               'created_at' => Carbon\Carbon::now()->toDateTimeString(),
               'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
               'name' => 'Mercury',
          ]);
    }
}
