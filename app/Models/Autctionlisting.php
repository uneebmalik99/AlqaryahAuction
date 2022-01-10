<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Autctionlisting extends Model
{
    use HasFactory;
    public $table = 'auctionlisting';
    protected $fillable = [
        'car_condition',
        'car_type',
        'car_vin',
        'car_year',
        'car_make',
        'car_model',
        'car_interior',
        'car_exterior',
        'car_drive_type',
        'car_transmission',
        'car_fuel',
        'car_mileage',
        'car_specification',
        'car_engine',
        'car_cylender',
        'car_doors',
        'car_drive_status',
        'car_primary_damage',
        'car_secondary_damage',
        'car_keys',
        'vehicle_type',
        'car_buy_price',
        'car_bid',
        'auction_id',
        'description',
        'video'
    ];
}
