<?php

namespace App\Livewire\Demo\DataKeluarga;

use Livewire\Component;
use Illuminate\Support\Arr;
use Livewire\WithPagination;
use App\Models\Demo\DataKeluarga;


class SuamiIstri extends Component
{
    use WithPagination;

    public $form = [
        'nama' => '',
        'tempat_lahir' => '',
        'tgl_lahir' => '',
        'pendidikan' => '',
        'pekerjaan' => '',
        'gender_tp' => '',
        'data_keluarga_tp' => 'DATA_KELUARGA_TP_01',
    ];

    public $idnya, $user_id, $cek;


    public function mount($id = '')
    {
        if (auth()->user()->hasRole('superadministrator')) {
            $demo_data_keluarga = DataKeluarga::firstOrCreate(
                ['data_keluarga_tp' => 'DATA_KELUARGA_TP_01'],
                ['user_id' => $id],
            )->toArray();
        } else {
            $demo_data_keluarga = DataKeluarga::firstOrCreate(
                ['data_keluarga_tp' => 'DATA_KELUARGA_TP_01'],
                ['user_id' => auth()->user()->id],
            )->toArray();
        }
        $this->idnya = $id;
        $this->form = $demo_data_keluarga;
        $this->idnya = $demo_data_keluarga['user_id'];
    }

    public function save()
    {
        DataKeluarga::where('user_id', auth()->user()->id)->where('data_keluarga_tp', 'DATA_KELUARGA_TP_01')->update(Arr::except($this->form, ['created_at', 'updated_at']));

        $this->js(<<<'JS'
        Swal.fire({
            title: 'Good job!',
            text: 'You clicked the button!',
            icon: 'success',
          })
        JS);
    }


    public function render()
    {
        if (auth()->user()->hasRole('superadministrator')) {
            $data = DataKeluarga::where('data_keluarga_tp', 'DATA_KELUARGA_TP_01')->where('user_id', $this->idnya)->get();
        } else {
            $data = DataKeluarga::where('data_keluarga_tp', 'DATA_KELUARGA_TP_01')->where('user_id', auth()->user()->id)->get();
        }


        // dd($data);


        return view('livewire.demo.data-keluarga.suami-istri', [
            'post' => $data
        ]);
    }
}
