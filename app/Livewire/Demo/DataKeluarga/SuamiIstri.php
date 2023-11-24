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


    public function mount()
    {
        $demo_data_keluarga = DataKeluarga::firstOrCreate(
            ['user_id' => auth()->user()->id],
        )->toArray();
        $this->form = $demo_data_keluarga;
    }

    public function save()
    {
        DataKeluarga::where('user_id', auth()->user()->id)->update(Arr::except($this->form, ['created_at', 'updated_at']));

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
        $data = DataKeluarga::where('data_keluarga_tp', 'DATA_KELUARGA_TP_01')->get();

        return view('livewire.demo.data-keluarga.suami-istri', [
            'post' => $data
        ]);
    }
}
