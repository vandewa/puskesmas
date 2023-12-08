<?php
namespace App\Kusus;

use App\Models\His\TrxMedical;
use App\Models\His\TrxSettlement;

class ProsesSettlement {

    public function prosesSetelahSettlemen($data) {

    }

    protected function rubahMedicalSettlemen($data)
    {
        TrxSettlement::where('medical_cd', $data->medical_cd)->update([
            'invoice_no' => $data->invoice_no,
            'pament_st' => 'PAYMENT_ST_1'
        ]);
    }

    protected function rubahTrxMedical($data) {
        TrxMedical::where('medical_cd', $data->medical_cd)->update([
            'medical_trx_st' => 'MEDICAL_TRX_ST_1'
        ]);
    }
}
