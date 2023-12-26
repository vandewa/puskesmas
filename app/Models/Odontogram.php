<?php

namespace App\Models;

use App\Models\His\TrxIcd;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Odontogram extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function diagnosa()
    {
        return $this->belongsTo(TrxIcd::class, 'icd_cd');
    }

    public function prosedur()
    {
        return $this->belongsTo(ComCode::class, 'prosedur_tp');
    }
}
