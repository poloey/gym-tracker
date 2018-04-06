<?php

use Illuminate\Database\Seeder;
use App\Gym;
use App\Exercise;

class ExercisesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $enum = ['by time', 'by number'];
      $gyms = Gym::all()->pluck('id');
      for ($i=0; $i < 20; $i++) { 

        Exercise::create([
          'type' => $enum[0],
          'rep' => rand(10, 100) . ' minutes',
          'gym_id' => $gyms[rand(0, (count($gyms) - 1))]
         ]);
        Exercise::create([
          'type' => $enum[1],
          'rep' => rand(5, 30) . 'X' . rand(1, 10) .' sets',
          'gym_id' => $gyms[rand(0, (count($gyms) - 1))]
         ]);



      }
    }
}
