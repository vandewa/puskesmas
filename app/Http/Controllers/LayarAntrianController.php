<?php

namespace App\Http\Controllers;

use App\Models\His\TrxMedical;
use App\Models\His\TrxMedicalUnit;
use App\Models\His\TrxUnitMedis;
use Illuminate\Http\Request;

class LayarAntrianController extends Controller
{
    public function index($id)
    {
        $data = TrxUnitMedis::find($id);

        return view('layar', compact('data'));
    }

    public function farmasi() {
        return view('farmasi');
    }

    public function kasir() {
        return view('kasir');
    }
}
