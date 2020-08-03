<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeed extends Seeder
{
  public function run()
  {
    User::create([
      'name' => 'Carlos',
      'lastname' => 'Vallejo',
      'numIdentification' => '13011366',
      'addrees' => 'Calle 15 a n 5n-50',
      'phone' => '3162259167',
      'email' => 'carlosvallejo4@gmail.com',
      'password' => bcrypt('12345678'),
      'role_id' => 1,
    ]);
    User::create([
      'name' => 'Dyego',
      'lastname' => 'Vallejo',
      'numIdentification' => '1085941918',
      'addrees' => 'Calle 15 a n 5n-50',
      'phone' => '3184690679',
      'email' => 'dyegovallejob@gmail.com',
      'password' => bcrypt('12345678'),
      'role_id' => 2,
    ]);
  }
}
