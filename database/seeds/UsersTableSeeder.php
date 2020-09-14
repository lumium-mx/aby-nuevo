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
      // Usuarios
      $user = new user();
      $user->name = "Horacio Morales";
      $user->email = "horacio.e.morales@hotmail.com";
      $user->password = "$2y$10$1he3mnw45tlbadeVPwXqhOf1epabAv05xfz7ngeLp4P//F4RRFz1K";
      $user->save();
      $user = new user();
      $user->name = "Lumium";
      $user->email = "lumium.mx@outlook.com";
      $user->password = "$2y$10$/IQhJiBu4qBxrj3B63jDl.NnbonLh1xiU9LpOTKJR3Ie0KB5LKjOO";
      $user->save();
      $user = new user();
      $user->name = "Aby";
      $user->email = "aby.mx@outlook.com";
      $user->password = "$2y$10$3PlGwmBWDenb/hDBlcjuW.nYbB9wuF6UTCqLMFuPXAc8KbFB0Vb8O";
      $user->save();
    }
}
