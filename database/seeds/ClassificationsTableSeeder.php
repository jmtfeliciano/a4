<?php

use Illuminate\Database\Seeder;
use App\Classification;


class ClassificationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $classifications =[
             'Below 0 Celcius',
             'Has 1 or more moon',
             'Has disks/rings around it',
             'Has Global Magnetic Field'
        ];

        foreach ($classifications as $classificationName) {
             $classification = new Classification();
             $classification->name = $classificationName;
             $classification->save();
        }
    }
}
