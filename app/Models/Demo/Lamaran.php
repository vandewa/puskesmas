<?php

namespace App\Models\Demo;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lamaran extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function tahapan() {
        return $this->belongsTo(Tahapan::class, 'tahapan_id', 'no');
    }
}
