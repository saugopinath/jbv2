<?php

namespace App\Models;

use App\Models\BeneficiaryIdserial;
use Illuminate\Database\Eloquent\Model;

class BeneficiaryPersonal extends Model
{

    public function beneficiaryIdserial()
    {
        return $this->belongsTo(BeneficiaryIdserial::class,'ben_id','id');
    }


    protected $guarded = [
        'id',
    ];
}
