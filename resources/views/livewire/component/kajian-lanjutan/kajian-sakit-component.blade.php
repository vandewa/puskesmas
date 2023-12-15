<div>
    <div class="col-md-12">
        {{-- <div class="card card-success card-outline"> --}}
        <form class="mt-2 form-horizontal" wire:submit='save'>
            <div class="card-body">
                <div class="row">
                    <form action="" wire.submit='save'>
                        <div class="col-md-6">
                            <div class="mb-2 row">
                                <label for="" class="col-sm-3 col-form-label">Nyeri</label>
                                <div class="col-md-9">
                                    <div class="mb-3 input-group">
                                        <select name="" id="" class="form-control"
                                            wire:model.live='form.nyeri'>
                                            <option value="">Pilih Skala Nyeri</option>
                                            <option value="Tidak Sakit">(0) Tidak Sakit</option>
                                            <option value="Sedikit Sakit">(2) Sedikit Sakit</option>
                                            <option value="Agak Menganggu">(4) Agak Menganggu</option>
                                            <option value="Mengganggu Aktivitas">(6) Mengganggu Aktivitas</option>
                                            <option value="Sangat Mengganggu">(8) Sangat Mengganggu</option>
                                            <option value="Tak Tertahankan">(10) Tak Tertahankan</option>
                                        </select>
                                    </div>
                                    @error('form.bicara_tp')
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
                        <div class="text-center col-md-6">
                            @if ($form['nyeri'])
                                <img src="{{ asset('gambar/' . $form['nyeri'] . '.jpg') }}" class="img-thumbnail"
                                    alt="{{ $form['nyeri'] }}">
                                <p>{{ $form['nyeri'] }}</p>
                            @endif
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
                                <th>Nyeri</th>
                                <th>Action</th>
                            </thead>
                            <tbody>
                                @foreach ($posts as $item)
                                    <tr @if ($this->edit == $item->id) class="bg-secondary" @endif>
                                        <td>
                                            {{ date('d/m/Y H:i:s', strtotime($item->created_at)) }}
                                        </td>
                                        <td>{{ $item->nyeri }}</td>

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
                                <th>Nyeri</th>

                                {{-- <th>action</th> --}}
                            </thead>
                            <tbody>
                                @foreach ($riwayat as $item)
                                    <tr @if ($this->edit == $item->id) class="bg-secondary" @endif>
                                        <td>
                                            {{ date('d/m/Y H:i:s', strtotime($item->created_at)) }}
                                        </td>
                                        <td>{{ $item->nyeri }}</td>

                                        {{-- <td>
                                    <button type="button" class="btn btn-sm btn-danger" wire:click='confirmDelete({{ $item->id }})'>Hapus</button>
                                    <button  type="button" class="btn btn-sm btn-warning" wire:click='rubah({{ $item->id }})'>Edit</button>
                                </td> --}}
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
