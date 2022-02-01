<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Asset extends Model
{
    //
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'type', 
        'serial_number',  
        'description',
        'fixed_or_movable',
        'picture_path',
        'purchase_date',
        'start_use_date',
        'purchase_price',
        'warranty_expiry_date',
        'degradation_in_years',
        'current_value_in_naira',
        'location',
        
    ];
}
