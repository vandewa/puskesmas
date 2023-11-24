<?php

namespace App\Livewire\Demo;

use Livewire\Component;
use App\Models\Demo\Dokumen as Document;
use Livewire\WithFileUploads;


class Dokumen extends Component
{

    use WithFileUploads;

    public $kk, $ktp, $akta, $mcu, $info;

    public function mount()
    {
        $dokumen = Document::firstOrCreate(
            ['user_id' => auth()->user()->id],
        )->toArray();
        $this->info = $dokumen;
    }


    public function save()
    {
        if ($this->kk) {
            $this->validate([
                'kk' => 'image|max:1024', // 1MB Max
            ]);
            $kk = $this->kk->store('public/photos');
            Document::where('user_id', auth()->user()->id)->update([
                'kk' => $kk
            ]);
        }


        if ($this->ktp) {
            $this->validate([
                'ktp' => 'image|max:1024', // 1MB Max
            ]);
            $ktp = $this->ktp->store('public/photos');
            Document::where('user_id', auth()->user()->id)->update([
                'ktp' => $ktp
            ]);
        }

        if ($this->akta) {
            $this->validate([
                'akta' => 'image|max:1024', // 1MB Max
            ]);
            $akta = $this->akta->store('public/photos');
            Document::where('user_id', auth()->user()->id)->update([
                'akta' => $akta
            ]);
        }

        if ($this->mcu) {
            $this->validate([
                'mcu' => 'image|max:1024', // 1MB Max
            ]);
            $mcu = $this->mcu->store('public/photos');
            Document::where('user_id', auth()->user()->id)->update([
                'mcu' => $mcu
            ]);
        }

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
        $data = Document::where('user_id', auth()->user()->id)->first();

        return view('livewire.demo.dokumen', [
            'post' => $data
        ]);
    }

}
