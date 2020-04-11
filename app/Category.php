<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\PRoduct;

class Category extends Model
{
    public function products()
    {
      return $this->hasMany(Product::class);
    }
}
