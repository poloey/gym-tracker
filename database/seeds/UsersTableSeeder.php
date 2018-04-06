<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $users = [
        'helal',
        'sujon',
        'akbar',
        'ashraf',
        'parvez'
      ];

      foreach ($users as $user) {
        User::create([
          'name' => $user,
          'email' => $user . '@gmail.com',
          'password' => bcrypt('secret')
        ]);
      }
    }
}
