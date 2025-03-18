<?php

namespace App\Models;

use App\Models\IncompleteBenList;
use Illuminate\Database\Eloquent\Model;

class Scheme extends Model
{
    public function mainTables()
    {
        return $this->hasMany(IncompleteBenList::class,'scheme_id','id');
    }
}
