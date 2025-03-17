<?php

namespace App\Models;

use App\Models\IncompleteBenList;
use Illuminate\Database\Eloquent\Model;

class BeneficiaryIdserial extends Model
{

    public function mainTables()
    {
        return $this->hasMany(IncompleteBenList::class);
    }

    protected $guarded = [
        'id',
    ];
}
