<div>
    <div class="col-md-12">
        {{-- <div class="card card-success card-outline"> --}}
        <form class="form-horizontal mt-2" wire:submit='save'>
            <div class="card-body">
                <div class="row">
                   <form action="" wire.submit='save'>
                    <div class="col-md-6">
                        <div class="row mb-2">
                            <label for="" class="col-sm-3 col-form-label">Nyeri</label>
                            <div class="col-md-9">
                                <div class="input-group mb-3">
                                    <select name="" id="" class="form-control" wire:model.live='form.nyeri'>
                                     <option value="">Pilih Skala Nyeri</option>
                                     <option value="Tidak Sakit">Tidak Sakit</option>
                                     <option value="Sedikit Sakit">Sedikit Sakit</option>
                                     <option value="Agak Menganggu">Agak Menganggu</option>
                                     <option value="Mengganggu Aktivitas">Mengganggu Aktivitas</option>
                                     <option value="Sangat Mengganggu">Sangat Mengganggu</option>
                                     <option value="Tak Tertahankan">Tak Tertahankan</option>
                                    </select>
                                 </div>
                                @error('form.bicara_tp')
                                    <span class="form-text text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="card-footer mt-4">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class=" ">
                                        <button type="button" class="btn btn-warning" wire:click='clear'>Batal</button>
                                        <button type="submit" class="btn btn-info">Simpan</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-6 text-center">
                        @if($form['nyeri'])
                        <img src="{{ asset('gambar/'.$form['nyeri'].".jpg") }}" class="img-thumbnail" alt="{{ $form['nyeri'] }}">
                        <p>{{ $form['nyeri'] }}</p>
                        @endif
                    </div>

                <form>
                </div>
                <div class="row mt-3">

                    <table class="table table-striped">
                        <thead>
                            <th>Waktu</th>
                            <th>Nyeri</th>

                            <th>action</th>
                        </thead>
                        <tbody>
                            @foreach ($posts as $item)
                            <tr @if($this->edit == $item->id) class="bg-secondary" @endif>
                                <td>
                                  {{ date('d/m/Y H:i:s', strtotime($item->created_at)) }}
                                </td>
                                <td>{{ $item->nyeri }}</td>

                                <td>
                                    <button type="button" class="btn btn-sm btn-danger" wire:click='confirmDelete({{ $item->id }})'>Hapus</button>
                                    <button  type="button" class="btn btn-sm btn-warning" wire:click='rubah({{ $item->id }})'>Edit</button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $posts->links() }}
                </div>
            </div>
        </form>
    </div>
</div>
