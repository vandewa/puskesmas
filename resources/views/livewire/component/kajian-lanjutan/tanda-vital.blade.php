<div>
    <div class="col-md-12">
        {{-- <div class="card card-success card-outline"> --}}
        <form class="mt-2 form-horizontal" wire:submit='save'>
            <div class="card-body">
                <div class="row">
                    <form action="" wire.submit='save'>
                        <div class="col-md-6">
                            <div class="row">
                                <label for="" class="col-sm-3 col-form-label">Sistol</label>
                                <div class="col-md-9">
                                    <div class="mb-3 input-group">
                                        <input type="number" class="form-control" wire:model='form.sistol'>
                                        <div class="input-group-append">
                                            <span class="input-group-text">mmHg</span>
                                        </div>
                                    </div>
                                    @error('form.sistol')
                                        <span class="form-text text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row">
                                <label for="" class="col-sm-3 col-form-label">Diastol</label>
                                <div class="col-md-9">
                                    <div class="mb-3 input-group">
                                        <input type="number" class="form-control" wire:model='form.diastol'>
                                        <div class="input-group-append">
                                            <span class="input-group-text">mmHg</span>
                                        </div>
                                    </div>
                                    @error('form.diastol')
                                        <span class="form-text text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row">
                                <label for="" class="col-sm-3 col-form-label">Nadi</label>
                                <div class="col-md-9">
                                    <div class="mb-3 input-group">
                                        <input type="number" class="form-control" wire:model='form.n'>
                                        <div class="input-group-append">
                                            <span class="input-group-text">x/mnt</span>
                                        </div>
                                    </div>
                                    @error('form.n')
                                        <span class="form-text text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row">
                                <label for="" class="col-sm-3 col-form-label">Respirasi</label>
                                <div class="col-md-9">
                                    <div class="mb-3 input-group">
                                        <input type="number" class="form-control" wire:model='form.p'>
                                        <div class="input-group-append">
                                            <span class="input-group-text">x/mnt</span>
                                        </div>
                                    </div>
                                    @error('form.p')
                                        <span class="form-text text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row">
                                <label for="" class="col-sm-3 col-form-label">Suhu</label>
                                <div class="col-md-9">
                                    <div class="mb-3 input-group">
                                        <input type="number" class="form-control" wire:model='form.suhu'>
                                        <div class="input-group-append">
                                            <span class="input-group-text">C</span>
                                        </div>
                                    </div>
                                    @error('form.suhu')
                                        <span class="form-text text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="mt-4 card-footer">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="">
                                            <button type="button" class="btn btn-warning"
                                                wire:click='clear'>Batal</button>
                                            <button type="submit" class="btn btn-info">Simpan</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <form>
                </div>
                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a class="nav-link @if ($tab == 1) active @endif" wire:click='ubahTab(1)'
                            href="#">Pemeriksaan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @if ($tab == 2) active @endif" wire:click='ubahTab(2)'
                            href="#">Riwayat</a>
                    </li>
                </ul>
                <div class="mt-3 row">
                    @if ($tab == 1)
                        <table class="table table-striped">
                            <thead>
                                <th>Waktu</th>
                                <th>Sistol</th>
                                <th>Diastol</th>
                                <th>Nadi</th>
                                <th>Respirasi</th>
                                <th>Suhu</th>
                                <th>Action</th>
                            </thead>
                            <tbody>
                                @foreach ($posts as $item)
                                    <tr @if ($this->edit == $item->id) class="bg-secondary" @endif>
                                        <td>
                                            {{ date('d/m/Y H:i:s', strtotime($item->created_at)) }}
                                        </td>
                                        <td>{{ $item->sistol ?? '' }}</td>
                                        <td>{{ $item->diastol ?? '' }}</td>
                                        <td>{{ $item->n ?? '' }}</td>
                                        <td>{{ $item->p ?? '' }}</td>
                                        <td>{{ $item->suhu ?? '' }}</td>
                                        <td>
                                            <button type="button" class="btn btn-sm btn-danger"
                                                wire:click='confirmDelete({{ $item->id }})'>Hapus</button>
                                            <button type="button" class="btn btn-sm btn-warning"
                                                wire:click='rubah({{ $item->id }})'>Edit</button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{ $posts->links() }}
                    @else
                        <table class="table table-striped">
                            <thead>
                                <th>Waktu</th>
                                <th>Sistol</th>
                                <th>Diastol</th>
                                <th>Nadi</th>
                                <th>Respirasi</th>
                                <th>Suhu</th>
                                <th>Action</th>
                            </thead>
                            <tbody>
                                @foreach ($riwayat as $item)
                                    <tr @if ($this->edit == $item->id) class="bg-secondary" @endif>
                                        <td>
                                            {{ date('d/m/Y H:i:s', strtotime($item->created_at)) }}
                                        </td>
                                        <td>{{ $item->sistol ?? '' }}</td>
                                        <td>{{ $item->diastol ?? '' }}</td>
                                        <td>{{ $item->n ?? '' }}</td>
                                        <td>{{ $item->p ?? '' }}</td>
                                        <td>{{ $item->suhu ?? '' }}</td>
                                        <td>
                                            <button type="button" class="btn btn-sm btn-danger"
                                                wire:click='confirmDelete({{ $item->id }})'>Hapus</button>
                                            <button type="button" class="btn btn-sm btn-warning"
                                                wire:click='rubah({{ $item->id }})'>Edit</button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{ $riwayat->links() }}

                    @endif
                </div>
            </div>
        </form>
    </div>
</div>
