<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
  protected $fillable = [
    'id',
    'first_name',
    'last_name',
    'gender',
    'birthday',
    'address_code',
    'address',
    'tel',
    'email',
  ];
}
