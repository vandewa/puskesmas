<div>
    <div class="col-md-12">
        {{-- <div class="card card-success card-outline"> --}}
        <form class="form-horizontal mt-2" wire:submit='save'>
            <div class="card-body">
                <div class="row">
                   <form action="" wire.submit='save'>
                    <div class="col-md-6">
                        <div class="row mb-2">
                            <label for="" class="col-sm-3 col-form-label">Td</label>
                            <div class="col-md-9">
                                <div class="input-group mb-3">
                                    <input type="number" class="form-control" wire:model='form.td'>
                                    <div class="input-group-append">
                                      <span class="input-group-text">mmHg</span>
                                    </div>
                                </div>
                                @error('form.bicara_tp')
                                    <span class="form-text text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-2">
                            <label for="" class="col-sm-3 col-form-label">N</label>
                            <div class="col-md-9">
                                <div class="input-group mb-3">
                                    <input type="number" class="form-control" wire:model='form.n'>
                                    <div class="input-group-append">
                                      <span class="input-group-text">x/mnt</span>
                                    </div>
                                </div>
                                @error('form.komunikasi_tp')
                                    <span class="form-text text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row mb-2">
                            <label for="" class="col-sm-3 col-form-label">P</label>
                            <div class="col-md-9">
                                <div class="input-group mb-3">
                                    <input type="number" class="form-control" wire:model='form.p'>
                                    <div class="input-group-append">
                                      <span class="input-group-text">x/mnt</span>
                                    </div>
                                </div>
                                @error('form.emosional_st')
                                    <span class="form-text text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-2">
                            <label for="" class="col-sm-3 col-form-label">Suhu</label>
                            <div class="col-md-9">
                                <div class="input-group mb-3">
                                    <input type="number" class="form-control" wire:model='form.suhu'>
                                    <div class="input-group-append">
                                      <span class="input-group-text">C</span>
                                    </div>
                                </div>
                                @error('form.sosiologi_tp')
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
                <form>
                </div>
                <div class="row mt-3">

                    <table class="table table-striped">
                        <thead>
                            <th>Waktu</th>
                            <th>Td</th>
                            <th>N</th>
                            <th>P</th>
                            <th>Suhu</th>
                            <th>action</th>
                        </thead>
                        <tbody>
                            @foreach ($posts as $item)
                            <tr @if($this->edit == $item->id) class="bg-secondary" @endif>
                                <td>
                                  {{ date('d/m/Y H:i:s', strtotime($item->created_at)) }}
                                </td>
                                <td>{{ $item->td }}</td>
                                <td>{{ $item->n }}</td>
                                <td>{{ $item->p }}</td>
                                <td>{{ $item->suhu }}</td>
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
