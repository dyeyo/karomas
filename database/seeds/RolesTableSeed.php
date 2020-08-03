<?php

use App\Roles;
use Illuminate\Database\Seeder;

class RolesTableSeed extends Seeder
{
  public function run()
  {
    Roles::create([
      'name'=>'admin'
    ]);
    Roles::create([
      'name'=>'client'
    ]);
  }
}
