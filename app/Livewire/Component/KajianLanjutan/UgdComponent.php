<?php

namespace App\Livewire\Component\KajianLanjutan;

use Carbon\Carbon;
use App\Models\Ugd;
use Livewire\Component;
use App\Models\His\ComCode;
use Illuminate\Support\Arr;
use Livewire\WithPagination;
use App\Models\His\TrxMedical;

class UgdComponent extends Component
{
    use WithPagination;
    public $tab = 1;
    public $edit;
    public $delete;
    public $form = [
        'alasan_datang_tp' => null,
        'tgl_kejadian' => null,
        'tiba' => null,
        'transportasi' => null,
        'kasus_tp' => null,
        'mobilitas_tp' => null,
        'kesadaran_tp' => null,
        'gcs' => null,
        'trauma' => null,
        'triase' => null,
        't_resusitasi' => null,
        'ket_alasan_datang' => null,
        'ket_kasus' => null,
        'ket_transportasi' => null,
    ];

    public $medicalcd;
    public $medik;

    public function mount()
    {
        $this->medik = TrxMedical::find($this->medicalcd);

        // /2023-12-18T09:37
        //2023-12-18 09:38:15.931775 Asia/Jakarta

        # Tanggal awal
        $tanggal_awal = "2023-12-18 09:38:55.231693 Asia/Jakarta (+07:00)";

        // Konversi string ke objek Carbon
        $tanggal_objek = Carbon::createFromFormat('Y-m-d H:i:s.u eP', $tanggal_awal);

        // Ubah format
        $tanggal_hasil = $tanggal_objek->format('Y-m-d\TH:i');

        $this->form['tiba'] = $tanggal_hasil;
        $this->form['tgl_kejadian'] = $tanggal_hasil;

        $this->ambilAlasan();
        $this->ambilKasus();
        $this->ambilMobilitas();
        $this->ambilKesadaran();
    }

    public function ambilAlasan()
    {
        return ComCode::where('code_group', 'ALASAN_DATANG_TP')->get()->toArray();
    }
    public function ambilKasus()
    {
        return ComCode::where('code_group', 'KASUS_TP')->get()->toArray();
    }
    public function ambilMobilitas()
    {
        return ComCode::where('code_group', 'MOBILITAS_TP')->get()->toArray();
    }
    public function ambilKesadaran()
    {
        return ComCode::where('code_group', 'KESADARAN_TP')->get()->toArray();
    }

    public function clear()
    {
        $this->form = [
            'alasan_datang_tp' => null,
            'tgl_kejadian' => null,
            'tiba' => null,
            'transportasi' => null,
            'kasus_tp' => null,
            'kesadaran_tp' => null,
            'gcs' => null,
            'trauma' => null,
            'triase' => null,
            't_resusitasi' => null,
        ];

        $this->edit = null;
        $this->delete = null;
    }

    public function confirmDelete($id)
    {
        $this->delete = $id;
        $this->js(<<<'JS'
        Swal.fire({
            title: 'Anda yakin akan menghapus data ini?',
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Iya!',
            cancelButtonText: 'Tidak'
          }).then((result) => {
            if (result.isConfirmed) {
              $wire.hapus()
            }
        })
        JS);
    }

    public function hapus()
    {
        Ugd::where('id', $this->delete)->delete();
    }

    public function rubah($id)
    {
        $this->edit = $id;
        $data = Ugd::find($id);
        $this->form = Arr::except($data->toArray(), ['created_at', 'updated_at', 'id']);
    }

    public function save()
    {

        dd($this->form['tiba']);
        if ($this->edit) {
            Ugd::where('id', $this->edit)->update($this->form);
            $this->js(<<<'JS'
                Swal.fire({
                title: "Berhasil!",
                text: "Data berhasil diubah!",
                icon: "success"
                });
            JS);
        } else {
            Ugd::create($this->form +
                ['medical_cd' => $this->medik->medical_cd, 'pasien_cd' => $this->medik->pasien_cd]);
            $this->js(<<<'JS'
                Swal.fire({
                title: "Berhasil!",
                text: "Data berhasil disimpan!",
                icon: "success"
                });
            JS);
        }
        $this->clear();
    }
    public function ubahTab($id)
    {
        $this->tab = $id;
    }
    public function render()
    {
        $data = Ugd::with(['alasan', 'kasus', 'mobilitas', 'kesadaran'])->where('pasien_cd', $this->medik->pasien_cd)->where('medical_cd', $this->medik->medical_cd)
            ->orderBy('created_at', 'desc')->paginate(10);
        $riwayat = Ugd::with(['alasan', 'kasus', 'mobilitas', 'kesadaran'])->where('pasien_cd', $this->medik->pasien_cd)->where('medical_cd', '<>', $this->medik->medical_cd)
            ->orderBy('created_at', 'desc')->paginate(10);

        return view('livewire.component.kajian-lanjutan.ugd-component', [
            'posts' => $data,
            'riwayat' => $riwayat,
            'listAlasan' => $this->ambilAlasan(),
            'listKasus' => $this->ambilKasus(),
            'listMobilitas' => $this->ambilMobilitas(),
            'listKesadaran' => $this->ambilKesadaran(),
        ]);
    }
}
