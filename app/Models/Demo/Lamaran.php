<?php

namespace App\Models\Demo;

use App\Livewire\Demo\Admin\Tes;
use App\Models\TestFisik;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lamaran extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function tahapan() {
        return $this->belongsTo(Tahapan::class, 'tahapan_id', 'no');
    }

    public function user()  {
        return $this->belongsTo(User::class);
    }

    public function tes()  {
        return $this->hasOne(TestFisik::class, 'lamaran_id');
    }
}
