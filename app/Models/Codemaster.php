<?php

namespace App\Models;

use App\Models\IncompleteBenList;
use Illuminate\Database\Eloquent\Model;

class Codemaster extends Model
{
    protected $fillable = [
        'name',
        'short_name',
        'parent_id',
    ];
    public function parent()
    {
        return $this->belongsTo(Codemaster::class, 'parent_id');
    }

    public function mainTables()
    {
        return $this->belongsTo(Codemaster::class, 'incomplete_type', 'id');
    }
}
