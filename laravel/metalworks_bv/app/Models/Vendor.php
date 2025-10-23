<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
    protected $table = 'leveranciers_info';
    
    protected $fillable = [
        'bedrijfsnaam',
        'contactpersoon',
        'email',
        'telefoonnummer',
        'adres',
        'postcode',
        'plaats',
        'land',
        'kvk_nummer',
        'btw_nummer',
        'bankrekening',
    ];
    public $timestamps = false;
}
