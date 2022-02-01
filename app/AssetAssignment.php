<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AssetAssignment extends Model
{
    //
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'asset_id',
        'assignment_date',
        'status', 
        'is_due',  
        'due_date',
        'assigned_user_id',
        'assigned_by', 
        
    ];
}
