<?php

use Illuminate\Database\Seeder;
use App\Gym;
use Faker\Factory;

class GymsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $gyms = [
        'Push up',
        'Bench',
        'squat',
        'pull up',
        'Crunches',
        'Reverse Crunches',
        'front plank',
        'side plank',
        'running',
        'walking',
      ];
      $faker = Factory::create();
      foreach ($gyms as $gym) {
        Gym::create([
          'name' => $gym,
          'about' => $faker->paragraph(6)
        ]);
      }
    }
}
