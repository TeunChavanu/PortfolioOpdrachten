<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employees extends Model
{
    protected $fillable = ['first_name', 'last_name'];
    public $timestamps = false;
}
