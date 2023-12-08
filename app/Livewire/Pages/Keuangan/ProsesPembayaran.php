<?php

namespace App\Livewire\Pages\Keuangan;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\His\TrxMedical;
use App\Kusus\PrerhitunganBiaya;
use App\Kusus\ProsesSettlement;
use App\Models\His\ComAccount;
use App\Models\His\ComCode;
use App\Models\His\TrxMedicalSettlement;
use App\Models\His\TrxSettlement;

class ProsesPembayaran extends Component
{
    public $modal = false;
    use WithPagination;

    public $medicalcd;

    public $medik;

    public $nilaiTotal;

    public $caraBayar;

    public $potongan = 0;

    public $harusBayar;

    public $sebelumPotongan;

    public function mount($id)
    {
        $this->medicalcd = $id;

        $this->medik = TrxMedical::with(['pasien'])->find($id);
        if($this->medik->pasien_tp == 'PASIEN_TP_02') {
            $this->caraBayar = 'PAYMENT_TP_21';
        }
    }

    public function confirmHitung()
    {
        $this->js(<<<'JS'
        Swal.fire({
            title: 'Anda yaking akan melakukan perhitungan?',
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Iya!',
            cancelButtonText: 'Tidak'
          }).then((result) => {
            if (result.isConfirmed) {
              $wire.hitung()
            }
        })
        JS);

    }

    public function tampilkanPembayaran() {
        $this->modal = ! $this->modal;
    }

    public function hitung() {
        $data = new PrerhitunganBiaya;
        $data->hitungBiaya($this->medicalcd);
    }

    public function bayar()  {
// dd(gen_no_kwitansi());
        $data = TrxSettlement::create([
            'medical_cd' => $this->medik->medical_cd,
            'pasien_cd' =>  $this->medik->pasien_cd,
            'invoice_no' => gen_no_kwitansi(),
            'invoice_date' => date('Y-m-d'),
            'payment_tp' => $this->caraBayar,
            'insurance_cd' => $this->medik->insurance_cd,
            'entry_nm' => auth()->user()->name,
            'entry_date' => date('Y-m-d'),
            'pay_nm' => $this->medik->pasien->pasien_nm,
            'payment_st' => 'PAYMENT_ST_1',
            'amount_asuransi' =>  $this->potongan,
            'amount_pasien' =>  $this->nilaiTotal,
            'amount_tunai' => $this->nilaiTotal,
            'ext_amount' => $this->sebelumPotongan
        ]);

        $a = new ProsesSettlement;
        $a->prosesSetelahSettlemen($data);
    }

    public function render()
    {
        $jenisPayment = ComCode::whereIn('com_cd', ['PAYMENT_TP_11', 'PAYMENT_TP_21'])->get();
        $data = TrxMedicalSettlement::with(['account'])->where('medical_cd', $this->medicalcd)->paginate(10);
        $total = TrxMedicalSettlement::where('medical_cd', $this->medicalcd)->sum('amount');
        $this->sebelumPotongan =  $total ;
        $this->nilaiTotal = $total;


        if($this->caraBayar == 'PAYMENT_TP_21') {
            $this->potongan = $total;
            $this->nilaiTotal = $this->nilaiTotal -  $this->potongan;
        } else {
            $this->potongan = 0;
        }
        return view('livewire.pages.keuangan.proses-pembayaran', [
            'posts' => $data,
            'total' => $total,
            'jenisPayment' => $jenisPayment,
            'nilaiTotal' =>  $this->nilaiTotal
        ]);
    }
}
