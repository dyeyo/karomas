<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
  protected $guarded = [];

  public function prodcutos()
  {
    return $this->belongsTo(Products::class);
  }
}
