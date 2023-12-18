<?php

namespace App\Livewire\Component\Cetak;

use Carbon\Carbon;
use Livewire\Component;
use App\Models\His\ComCode;
use App\Models\His\TrxDokter;
use App\Models\His\TrxPasien;
use PhpOffice\PhpWord\TemplateProcessor;

class KeteranganSakit extends Component
{

    public $medicalcd;

    public $form = [
        'nomor' => '',
        'pasien_nm' => '',
        'age' => '',
        'address' => '',
        'tanggal' => '',
        'occupation_cd' => '',
        'dokter' => '',
        'hari' => '',
        'terbilang' => '',
        'tgl_mulai' => '',
        'tgl_selesai' => '',
        'tgl_terbit' => '',
    ];

    public function mount($id)
    {
        $pasien = TrxPasien::find($id);

        $this->form['pasien_nm'] = $pasien->pasien_nm;
        $this->form['age'] = $pasien->age;
        $this->form['address'] = $pasien->address ?? '-' . ', ' . $pasien->kelurahan->region_nm . ', ' . $pasien->kecamatan->region_nm . ', ' . $pasien->kabupaten->region_nm;
        $this->form['occupation_cd'] = $pasien->occupation_cd;
        $this->form['tgl_mulai'] = date('Y-m-d');
        $this->form['tgl_selesai'] = date('Y-m-d');
        $this->form['tgl_terbit'] = date('Y-m-d');


        $this->ambilPekerjaan();
        $this->ambilDokter();

    }

    public function ambilPekerjaan()
    {
        return ComCode::where('code_group', 'OCCUPATION_CD')->get()->toArray();
    }

    public function ambilDokter()
    {
        return TrxDokter::get()->toArray();
    }

    public function terbilang($number)
    {
        $terbilang = [
            1 => 'satu',
            2 => 'dua',
            3 => 'tiga',
            4 => 'empat',
            5 => 'lima',
            6 => 'enam',
            7 => 'tujuh',
            8 => 'delapan',
            9 => 'sembilan',
            10 => 'sepuluh',
            11 => 'sebelas',
            12 => 'dua belas',
            13 => 'tiga belas',
            14 => 'empat belas',
            15 => 'lima belas',
            16 => 'enam belas',
            17 => 'tujuh belas',
            18 => 'delapan belas',
            19 => 'sembilan belas',
            20 => 'dua puluh',
            30 => 'tiga puluh',
            40 => 'empat puluh',
            50 => 'lima puluh',
            60 => 'enam puluh',
            70 => 'tujuh puluh',
            80 => 'delapan puluh',
            90 => 'sembilan puluh',
        ];

        if ($number < 21) {
            return $terbilang[$number];
        } elseif ($number < 100) {
            $tens = (int) ($number / 10) * 10;
            $ones = $number % 10;
            return $terbilang[$tens] . ($ones ? ' ' . $terbilang[$ones] : '');
        } elseif ($number === 100) {
            return 'seratus';
        }

        return 'Angka diluar jangkauan';
    }

    public function save()
    {
        $path = public_path('/template/sakit.docx');
        $pathSave = storage_path('app/public/' . 'Surat Keterangan Sakit-' . $this->form['pasien_nm'] . '-' . $this->form['tanggal'] . '.docx');
        $templateProcessor = new TemplateProcessor($path);
        $templateProcessor->setValues([
            'nomor' => $this->form['nomor'],
            'nama' => $this->form['pasien_nm'],
            'umur' => $this->form['age'],
            'pekerjaan' => $this->form['occupation_cd'],
            'alamat' => $this->form['address'],
            'hari' => $this->form['hari'],
            'bil_hari' => $this->terbilang($this->form['hari']),
            'tgl_mulai' => Carbon::createFromFormat('Y-m-d', $this->form['tgl_mulai'])->isoFormat('DD MMMM Y'),
            'tgl_selesai' => Carbon::createFromFormat('Y-m-d', $this->form['tgl_selesai'])->isoFormat('DD MMMM Y'),
            'tgl_terbit' => Carbon::createFromFormat('Y-m-d', $this->form['tgl_terbit'])->isoFormat('DD MMMM Y'),
            'nama_dokter' => $this->form['dokter'],
        ]);

        \PhpOffice\PhpWord\Settings::setOutputEscapingEnabled(true);
        $templateProcessor->saveAs($pathSave);

        return response()->download($pathSave)->deleteFileAfterSend(true);

    }

    public function render()
    {
        return view('livewire.component.cetak.keterangan-sakit', [
            'listPekerjaan' => $this->ambilPekerjaan(),
            'listDokter' => $this->ambilDokter(),
        ]);
    }
}
