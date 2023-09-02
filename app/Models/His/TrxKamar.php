<?php

namespace App\Models\His;

use Illuminate\Database\Eloquent\Model;

class TrxKamar extends Model
{
    public $table = 'trx_kamar';
    public $incrementing = false;
    protected $guarded = [];
    protected $primaryKey = 'kamar_cd';

    public function ruang() // bed
    {
        return $this->hasMany(TrxRuang::class,'kamar_cd');
    }
}
