<?php

namespace App\Livewire\Component\Cetak;

use Carbon\Carbon;
use Livewire\Component;
use App\Models\His\ComCode;
use App\Models\His\TrxDokter;
use App\Models\His\TrxPasien;
use PhpOffice\PhpWord\TemplateProcessor;

class Kir extends Component
{

    public $medicalcd;

    public $form = [
        'nomor' => '',
        'pasien_nm' => '',
        'age' => '',
        'address' => '',
        'tanggal' => '',
        'pemeriksaan' => '',
        'hasil' => '',
        'keterangan' => '',
        'tensi' => '',
        'weight' => '',
        'height' => '',
        'blood_tp' => '',
        'dokter' => '',
    ];

    public function mount($id)
    {
        $pasien = TrxPasien::with(['darah'])->find($id);

        $this->form['pasien_nm'] = $pasien->pasien_nm;
        $this->form['age'] = $pasien->age;
        $this->form['address'] = $pasien->address . ', ' . $pasien->kelurahan->region_nm . ', ' . $pasien->kecamatan->region_nm . ', ' . $pasien->kabupaten->region_nm;
        $this->form['weight'] = round($pasien->weight);
        $this->form['height'] = round($pasien->height);
        $this->form['blood_tp'] = $pasien->blood_tp;
        $this->form['tanggal'] = date('Y-m-d');

        $this->ambilDarah();

    }

    public function ambilDarah()
    {
        return ComCode::where('code_group', 'BLOOD_TP')->get()->toArray();
    }
    public function ambilDokter()
    {
        return TrxDokter::get()->toArray();
    }

    public function save()
    {
        if ($this->form['blood_tp'] == 'BLOOD_TP_A') {
            $darah = 'A';
        } elseif ($this->form['blood_tp'] == 'BLOOD_TP_AB') {
            $darah = 'AB';
        } elseif ($this->form['blood_tp'] == 'BLOOD_TP_B') {
            $darah = 'B';
        } elseif ($this->form['blood_tp'] == 'BLOOD_TP_0') {
            $darah = 'O';
        }

        $path = public_path('/template/kir.docx');
        $pathSave = storage_path('app/public/' . 'KIR-' . $this->form['pasien_nm'] . '-' . $this->form['tanggal'] . '.docx');
        $templateProcessor = new TemplateProcessor($path);
        $templateProcessor->setValues([
            'nomor' => $this->form['nomor'],
            'nama' => $this->form['pasien_nm'],
            'umur' => $this->form['age'],
            'alamat' => $this->form['address'],
            'tgl' => Carbon::createFromFormat('Y-m-d', $this->form['tanggal'])->isoFormat('DD MMMM Y'),
            'hasil' => $this->form['hasil'],
            'keterangan' => $this->form['keterangan'],
            'tensi' => $this->form['tensi'],
            'bb' => $this->form['weight'],
            'tb' => $this->form['height'],
            'gol_darah' => $darah,
            'nama_dokter' => $this->form['dokter'],
        ]);

        \PhpOffice\PhpWord\Settings::setOutputEscapingEnabled(true);
        $templateProcessor->saveAs($pathSave);

        return response()->download($pathSave)->deleteFileAfterSend(true);

    }

    public function render()
    {
        // $data = TrxPasien::with(['darah'])->find($this->medicalcd);
        // dd($data);
        return view('livewire.component.cetak.kir', [
            'listDarah' => $this->ambilDarah(),
            'listDokter' => $this->ambilDokter(),
        ]);
    }
}
