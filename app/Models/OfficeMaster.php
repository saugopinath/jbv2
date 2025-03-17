<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OfficeMaster extends Model
{
    protected $fillable = [
        'name',
        'address',
        'zip',
        'office_type',
        'state_id',
        'district_id',
        'block_id',
        'subdivision_id',
        'state_id',
    ];
    
}
