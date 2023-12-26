<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrxDocument extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function document() {
        return $this->belongsTo(ComCode::class, 'document_tp');
    }
}
