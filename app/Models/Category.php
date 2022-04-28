<?php

namespace App\Models;


use Illuminate\Testing\Constraints\SoftDeletedIn;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
  use SoftDeletes;

  protected $fillable = [
      'name', 'photo', 'slug'
  ];

  protected $hidden = [

  ];
}
