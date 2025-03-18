<?php

namespace App\Models;

use App\Models\IncompleteBenList;
use Illuminate\Database\Eloquent\Model;

class BeneficiaryIdserial extends Model
{

    public function incompletList()
    {
        return $this->hasMany(IncompleteBenList::class,'ben_id','id');
    }

    public function beneficiaryPersonal()
    {
        return $this->belongsTo(BeneficiaryPersonal::class,'ben_id','id');
    }

    protected $guarded = [
        'id',
    ];
}
