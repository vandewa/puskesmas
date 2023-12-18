<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ugd extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function alasan()
    {
        return $this->belongsTo(ComCode::class, 'alasan_datang_tp');
    }
    public function kasus()
    {
        return $this->belongsTo(ComCode::class, 'kasus_tp');
    }
    public function mobilitas()
    {
        return $this->belongsTo(ComCode::class, 'mobilitas_tp');
    }
    public function kesadaran()
    {
        return $this->belongsTo(ComCode::class, 'kesadaran_tp');
    }

}
