<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\His\TrxMedical;
use App\Models\His\TrxRs;
use App\Models\His\TrxSettlement;

class HelperController extends Controller
{
    function printAntrianPoli($id ="") {
        return view('helper.print-antrian-poli');
    }

    public function cetakInvoice($id = "")  {
        $data = TrxRs::first();
        $settlemen = TrxSettlement::with(['tindakan', 'pasien', 'medical'])->find($id);
        // return $settlemen;
        return view('helper.print-kwitansi', compact('data', 'settlemen'));
    }
}
