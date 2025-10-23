<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class sites extends Model
{
    protected $fillable = ['site_code', 'name', 'city', 'country'];
    public $timestamps = false;
}
