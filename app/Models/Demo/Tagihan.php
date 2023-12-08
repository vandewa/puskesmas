<?php

namespace App\Models\Demo;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tagihan extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function layanan() {
       return $this->belongsTo(Layanan::class, 'layanan_id');
    }
}
