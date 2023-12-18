<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fungsional extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function kognitif()
    {
        return $this->belongsTo(ComCode::class, 'kognitif_tp');
    }

    public function penglihatan()
    {
        return $this->belongsTo(ComCode::class, 'penglihatan_tp');
    }

    public function pendengaran()
    {
        return $this->belongsTo(ComCode::class, 'pendengaran_tp');
    }

    public function aktifitas()
    {
        return $this->belongsTo(ComCode::class, 'aktifitas_tp');
    }

    public function berjalan()
    {
        return $this->belongsTo(ComCode::class, 'berjalan_tp');
    }

}
