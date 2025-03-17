<?php

namespace App\Models;

use App\Models\BeneficiaryIdserial;
use Illuminate\Database\Eloquent\Model;

class BeneficiaryPersonal extends Model
{

    public function beneficiaryPersonal()
    {
        return $this->belongsTo(BeneficiaryIdserial::class,'id','ben_id');
    }

    protected $guarded = [
        'id',
    ];
}
