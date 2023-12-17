<div>
    <div class="col-md-12">
        {{-- <div class="card card-success card-outline"> --}}
        <form class="mt-2 form-horizontal" wire:submit='save'>
            <div class="card-body">
                <div class="row">
                    <form action="" wire.submit='save'>
                        <div class="col-md-6">
                            <div class="row mb-2">
                                <label for="" class="col-sm-3 col-form-label">Kognitif</label>
                                <div class="col-md-9">
                                    <select class="form-control" wire:model.defer='form.kognitif_tp'>
                                        <option value="">Pilih Jenis Kognitif</option>
                                        @foreach ($listKognitif ?? [] as $item)
                                            <option value="{{ $item['com_cd'] }}">
                                                {{ $item['code_nm'] }}</option>
                                        @endforeach
                                    </select>
                                    @error('form.kognitif_tp')
                                        <span class="form-text text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-2">
                                <label for="" class="col-sm-3 col-form-label">Penglihatan</label>
                                <div class="col-md-9">
                                    <select class="form-control" wire:model.defer='form.penglihatan_tp'>
                                        <option value="">Pilih Jenis Penglihatan</option>
                                        @foreach ($listPenglihatan ?? [] as $item)
                                            <option value="{{ $item['com_cd'] }}">
                                                {{ $item['code_nm'] }}</option>
                                        @endforeach
                                    </select>
                                    @error('form.penglihatan_tp')
                                        <span class="form-text text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-2">
                                <label for="" class="col-sm-3 col-form-label">Pendengaran</label>
                                <div class="col-md-9">
                                    <select class="form-control" wire:model.defer='form.pendengaran_tp'>
                                        <option value="">Pilih Jenis Pendengaran</option>
                                        @foreach ($listPendengaran ?? [] as $item)
                                            <option value="{{ $item['com_cd'] }}">
                                                {{ $item['code_nm'] }}</option>
                                        @endforeach
                                    </select>
                                    @error('form.pendengaran_tp')
                                        <span class="form-text text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row mb-2">
                                <label for="" class="col-sm-4 col-form-label">Aktifitas Sehari-hari</label>
                                <div class="col-md-8">
                                    <select class="form-control" wire:model.defer='form.aktifitas_tp'>
                                        <option value="">Pilih Jenis Aktifitas</option>
                                        @foreach ($listAktifitas ?? [] as $item)
                                            <option value="{{ $item['com_cd'] }}">
                                                {{ $item['code_nm'] }}</option>
                                        @endforeach
                                    </select>
                                    @error('form.aktifitas_tp')
                                        <span class="form-text text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-2">
                                <label for="" class="col-sm-4 col-form-label">Cara Berjalan</label>
                                <div class="col-md-8">
                                    <select class="form-control" wire:model.defer='form.berjalan_tp'>
                                        <option value="">Pilih Cara Berjalan</option>
                                        @foreach ($listBerjalan ?? [] as $item)
                                            <option value="{{ $item['com_cd'] }}">
                                                {{ $item['code_nm'] }}</option>
                                        @endforeach
                                    </select>
                                    @error('form.berjalan_tp')
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
                                <th>Kognitif</th>
                                <th>Penglihatan</th>
                                <th>Pendengaran</th>
                                <th>Aktifitas</th>
                                <th>Cara Berjalan</th>
                            </thead>
                            <tbody>
                                @foreach ($posts as $item)
                                    <tr @if ($this->edit == $item->id) class="bg-secondary" @endif>
                                        <td>
                                            {{ date('d/m/Y H:i:s', strtotime($item->created_at)) }}
                                        </td>
                                        <td>{{ $item->kognitif->code_nm ?? '' }}</td>
                                        <td>{{ $item->penglihatan->code_nm ?? '' }}</td>
                                        <td>{{ $item->pendengaran->code_nm ?? '' }}</td>
                                        <td>{{ $item->aktifitas->code_nm ?? '' }}</td>
                                        <td>{{ $item->berjalan->code_nm ?? '' }}</td>
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
                                <th>Kognitif</th>
                                <th>Penglihatan</th>
                                <th>Pendengaran</th>
                                <th>Aktifitas</th>
                                <th>Cara Berjalan</th>
                            </thead>
                            <tbody>
                                @foreach ($riwayat as $item)
                                    <tr @if ($this->edit == $item->id) class="bg-secondary" @endif>
                                        <td>
                                            {{ date('d/m/Y H:i:s', strtotime($item->created_at)) }}
                                        </td>
                                        <td>{{ $item->kognitif->code_nm ?? '' }}</td>
                                        <td>{{ $item->penglihatan->code_nm ?? '' }}</td>
                                        <td>{{ $item->pendengaran->code_nm ?? '' }}</td>
                                        <td>{{ $item->aktifitas->code_nm ?? '' }}</td>
                                        <td>{{ $item->berjalan->code_nm ?? '' }}</td>
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
