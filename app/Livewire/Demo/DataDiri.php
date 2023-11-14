<?php

namespace App\Livewire\Demo;

use App\Models\Demo\DataDiri as DemoDataDiri;
use App\Models\His\ComCode;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class DataDiri extends Component
{

    public $form = [
        'nama' => '',
        'user_id' => '',
        'tempat_lahir' => '',
        'tgl_lahir' => '',
        'marital_tp' => '',
        'sex_tp' => '',
        'ktp' => '',
        'telepon' => '',
        'telepon_wali' => '',
        'blod_tp' => '',
        'ukuran_sepatu' => '',
        'ukuran_baju' => '',
        'alamat_sekarang' => '',
        'alamat_wali' => '',
        'education_tp' => '',
        'keterampilan' => '',
        'agama' => '',
    ];

    public $idnya, $user_id;

    public function mount()
    {
        $demo_data_diri = DemoDataDiri::firstOrCreate(
            ['user_id' =>auth()->user()->id],
        )->toArray();
        $this->form = $demo_data_diri;
        // dd(DemoDataDiri::where('user_id', auth()->user()->id)->first());
        $this->ambilJenisKelamin();
        $this->ambilStatus();
    }

    public function ambilJenisKelamin()
    {
        return ComCode::where('code_group', 'GENDER_TP')->get()->toArray();
    }
    public function ambilStatus()
    {
        return ComCode::where('code_group', 'MARITAL_TP')->get()->toArray();
    }
    public function ambilDarah()
    {
        return ComCode::where('code_group', 'BLOOD_TP')->get()->toArray();
    }
    public function ambilPendidikan()
    {
        return ComCode::where('code_group', 'EDUCATION_CD')->get()->toArray();
    }

    public function save()
    {
            // dd($this->form);

        DemoDataDiri::where('user_id', auth()->user()->id)->update(Arr::except($this->form, ['created_at', 'updated_at']));
 
        $this->js(<<<'JS'
        Swal.fire({
            title: 'Good job!',
            text: 'You clicked the button!',
            icon: 'success',
          }).then((result) => {
            if (result.isConfirmed) {
                $wire.kembalii()
            }
          })
        JS);
    }

    public function kembalii()
    {
        $this->redirect(route('pendaftaran.data-diri'));
    }

    public function batal()
    {
        $this->reset();
    }

    public function render()
    {
        return view('livewire.demo.data-diri', [
            'listJenisKelamin' => $this->ambilJenisKelamin(),
            'listStatus' => $this->ambilStatus(),
            'listDarah' => $this->ambilDarah(),
            'listPendidikan' => $this->ambilPendidikan()
        ]);
    }
}
