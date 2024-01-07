<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\His\TrxMedical;
use App\Models\His\TrxMedicalResep;
use App\Models\His\TrxPasien;
use App\Models\His\TrxResepData;
use App\Models\His\TrxRs;
use App\Models\His\TrxSettlement;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Illuminate\Support\Facades\Storage;


class HelperController extends Controller
{
    public function previewDokumen(Request $request) {
        if (Storage::exists($request->path)) {
            return Storage::response($request->path);
        }
        return "opps sepertinya ada yagng salah";

    }
    function printAntrianPoli($id = "")
    {
        $data = TrxMedical::with(['poli', 'pasien'])->find($id);
        $puskesmas = TrxRs::first();
        $qr = QrCode::generate($data->pasien->no_rm);

        return view('helper.print-antrian-poli', compact('data', 'puskesmas', 'qr'));
    }

    public function cetakInvoice($id = "")
    {
        $data = TrxRs::first();
        $settlemen = TrxSettlement::with(['tindakan', 'pasien', 'medical'])->find($id);
        // return $settlemen;
        return view('helper.print-kwitansi', compact('data', 'settlemen'));
    }

    public function cetakLabelObat($id)
    {
        $data = TrxMedicalResep::with(['resepData'])->find($id);

        return view('helper.print-label-obat', compact('data'));
    }

    public function cetakCopyResep($id)
    {
        $rs = TrxRs::first();
        // dd($rs);
        $data = TrxMedicalResep::with(['resepData', 'medical.pasien', 'dokter'])->find($id);
        return view('helper.print-copy-resep', compact('data', 'rs'));
    }

    function printLabelRm($id = "")
    {
        $data = TrxMedical::with(['poli', 'pasien', 'ruang', 'dokter'])->find($id);

        return view('helper.print-label-rm', compact('data'));
    }

    function printKartuPasien($id = "")
    {
        $data = TrxPasien::with(['jenisKelamin'])->find($id);

        if ($data->jenisKelamin->com_cd == 'GENDER_TP_01') {
            $jk = 'L';
        } else {
            $jk = 'P';
        }

        return view('helper.print-kartu-pasien', compact('data', 'jk'));
    }
}
