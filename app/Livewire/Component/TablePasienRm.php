<?php

namespace App\Livewire\Component;

use App\Events\panggilAntrian as Jembut;
use App\Models\His\TrxMedical;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attributes\Reactive;

class TablePasienRm extends Component
{
    use WithPagination;

    #[Reactive]
    public $rm;

    #[Reactive]
    public $poliklinik;

    #[Reactive]
    public $tanggal;

    #[Reactive]
    public $dokter;

    #[Reactive]
    public $kelas;

    #[Reactive]
    public $bangsal;

    public $url;
    public $tipePasien ;

    public function panggilAntrian($id)
    {
        $data = TrxMedical::with(['poli'])->find($id);
        Jembut::dispatch($data->toArray());
    }

    public function cetak($id)
    {
        dd('su');
        $this->js('window.open("' . route('helper.print-antrian-poli', $id) . '", "Print Antrian Poli", "width=200,height=100");');
        session()->flash('status', 'Post successfully updated.');

        $this->js(<<<'JS'
        Swal.fire({
            title: 'Pendaftaran berhasil!',
            type: 'success',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Kembali Ke list pasien',
            cancelButtonText: 'Batal'
          }).then((result) => {
            if (result.isConfirmed) {
                $wire.kembalii()
            }
          })
        JS);
    }


    public function render()
    {
        $data = TrxMedical::with(['poli', 'dokter', 'pasien', 'jenisPasien', 'medicalRuang'])->carirm($this->rm)
            ->caripoliklinik($this->poliklinik)
            ->caritanggal($this->tanggal)
            ->caridokter($this->dokter)
            ->carikelas($this->kelas)
            ->caribangsal($this->bangsal)
            ->CariJenisRawat($this->tipePasien)
            ->orderBy('medunit_cd', 'asc')
            ->paginate(10);

        // dd($data);
        return view('livewire.component.table-pasien-rm', [
            'posts' => $data,
            'tipePasien' => $this->tipePasien
        ]);
    }
}
