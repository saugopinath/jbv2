<?php

namespace App\Models;

use App\Models\Scheme;
use App\Models\Codemaster;
use App\Models\BeneficiaryIdserial;
use Illuminate\Database\Eloquent\Model;

class IncompleteBenList extends Model
{
    public function beneficiaryIdserial()
    {
        return $this->belongsTo(BeneficiaryIdserial::class);
    }

    public function scheme()
    {
        return $this->belongsTo(Scheme::class);
    }

    public function codemaster()
    {
        return $this->belongsTo(Codemaster::class);
    }
}
