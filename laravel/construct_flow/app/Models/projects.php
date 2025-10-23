<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class projects extends Model
{
    protected $fillable = ['project_code', 'name', 'status', 'start_date'];
    public $timestamps = false;
}
