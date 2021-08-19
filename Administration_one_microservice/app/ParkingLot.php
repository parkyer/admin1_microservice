<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ParkingLot extends Model
{
    //
    protected $table = 'parking';
    protected $id;
    public $incrementing = true;
    public $timestamps = false;
    protected $fillable = [
        'id_owner',
        'id_client',
        'latitude',
        'longitude',
        'location',
        'type'
    ];
}
