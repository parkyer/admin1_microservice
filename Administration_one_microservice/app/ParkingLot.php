<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ParkingLot extends Model
{
    //
    protected $table = 'parking';
    public $timestamps = false;
    protected $fillable = [
        'id',
        'id_owner',
        'id_client',
        'latitude',
        'longitude',
        'location',
        'type'
    ];
}
