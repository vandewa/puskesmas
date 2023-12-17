<?php

namespace App\Livewire\Component\KajianAwal;

use App\Models\RiwayatKehamilan;
use Livewire\Component;
use App\Models\His\ComCode;
use App\Models\KesehatanReproduksi as ModelsKesehatanReproduksi;
use Livewire\WithPagination;
use Illuminate\Support\Arr;
use Livewire\Attributes\On;


class KesehatanReproduksi extends Component
{

    use WithPagination;

    public $medicalcd, $pasiencd, $idHapus;

    public $form = [
        'riwayat_kb_tp' => null,
        'ket_kb' => null,
        'r_mens' => null,
        'menerche' => null,
        'siklus' => null,
        'lama' => null,
        'teratur' => null,
        'nyeri_haid' => null,
        'hpht' => null,
        'kehamilan_tp' => null,
    ];

    public function mount()
    {
        $reproduksi = ModelsKesehatanReproduksi::firstOrCreate(
            ['medical_cd' => $this->medicalcd],
        )->toArray();

        $this->form = $reproduksi;
        $this->ambilRiwayatKB();
        $this->ambilRiwayatKehamilan();
    }

    // #[On('pilih-riwayat-kehamilan-persalinan')]
    // public function pilihRiwayatKehamilanPersalinan($id = "")
    // {
    //     dd('asu');
    // }

    public function updated($property)
    {

        if ($property === 'form.riwayat_kb_tp') {
            if ($this->form['riwayat_kb_tp'] != 'RIWAYAT_KB_TP_09') {
                $this->form['ket_kb'] = null;
            }
        }
    }

    public function ambilRiwayatKB()
    {
        return ComCode::where('code_group', 'RIWAYAT_KB_TP')->get()->toArray();
    }

    public function ambilRiwayatKehamilan()
    {
        return ComCode::where('code_group', 'KEHAMILAN_TP')->get()->toArray();
    }

    public function save()
    {
        $this->form['pasien_cd'] = $this->pasiencd;

        ModelsKesehatanReproduksi::where('medical_cd', $this->medicalcd)->update(Arr::except($this->form, ['created_at', 'updated_at']));

        $this->js(<<<'JS'
        Swal.fire({
            title: 'Berhasil!',
            text: 'Data berhasil disimpan.',
            icon: 'success',
          })
        JS);
    }

    public function delete($id)
    {
        $this->idHapus = $id;
        $this->js(<<<'JS'
        Swal.fire({
            title: 'Apakah Anda yakin?',
                text: "Apakah kamu ingin menghapus data ini? proses ini tidak dapat dikembalikan.",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Hapus!',
                cancelButtonText: 'Batal'
          }).then((result) => {
            if (result.isConfirmed) {
                $wire.hapus()
            }
          })
        JS);
    }

    public function hapus()
    {
        RiwayatKehamilan::destroy($this->idHapus);

        $this->js(<<<'JS'
        Swal.fire({
            title: 'Berhasil!',
            text: 'Data berhasil dihapus.',
            icon: 'success',
          })
        JS);
    }

    public function render()
    {
        $data = RiwayatKehamilan::where('medical_cd', $this->medicalcd)->paginate(10);

        return view('livewire.component.kajian-awal.kesehatan-reproduksi', [
            'posts' => $data,
            'listRiwayat' => $this->ambilRiwayatKB(),
            'listRiwayatHamil' => $this->ambilRiwayatKehamilan(),
            'medicalcd' => $this->medicalcd,
            'pasiencd' => $this->pasiencd,
        ]);
    }
}
