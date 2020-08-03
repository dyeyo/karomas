<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
  protected $guarded = [];

  public function categories()
  {
    return $this->belongsTo(Categories::class);
  }
}
