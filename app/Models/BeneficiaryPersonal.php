<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BeneficiaryPersonal extends Model
{

    public function beneficiaryPersonal()
    {
        return $this->belongsTo(BeneficiaryIdserial::class);
    }

    protected $guarded = [
        'id',
    ];
}
