<?php

use App\Categories;
use Illuminate\Database\Seeder;

class CategoriasSedeerTable extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    Categories::create([
      'name' => 'Carlos',
    ]);
  }
}
