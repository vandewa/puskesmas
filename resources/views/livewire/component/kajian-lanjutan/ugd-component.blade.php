<div>
    <div class="col-md-12">
        {{-- <div class="card card-success card-outline"> --}}
        <form class="mt-2 form-horizontal" wire:submit='save'>
            <div class="card-body">
                <div class="row">
                    <form action="" wire.submit='save'>
                        <div class="col-md-6">
                            <div class="row mb-2">
                                <label for="" class="col-sm-3 col-form-label">Alasan Datang</label>
                                <div class="col-md-9">
                                    <select class="form-control" wire:model.live='form.alasan_datang_tp'>
                                        <option value="">Pilih Alasan Datang</option>
                                        @foreach ($listAlasan ?? [] as $item)
                                            <option value="{{ $item['com_cd'] }}">
                                                {{ $item['code_nm'] }}</option>
                                        @endforeach
                                    </select>
                                    @error('form.alasan_datang_tp')
                                        <span class="form-text text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            @if ($form['alasan_datang_tp'] == 'ALASAN_DATANG_TP_06')
                                <div class="row mb-2">
                                    <label for="inputEmail3" class="col-sm-3 col-form-label">Keterangan<small
                                            class="text-danger">* (Alasan Datang)</small> </label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" wire:model='form.ket_alasan_datang'
                                            placeholder="Keterangan Alasan Datang">
                                        @error('form.ket_alasan_datang')
                                            <span class="form-text text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            @endif
                            <div class="row mb-2">
                                <label for="" class="col-sm-3 col-form-label">Tgl Kejadian</label>
                                <div class="col-md-9">
                                    <input type="datetime-local" class="form-control"
                                        wire:model.live='form.tgl_kejadian'>
                                    @error('form.tgl_kejadian')
                                        <span class="form-text text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-2">
                                <label for="" class="col-sm-3 col-form-label">Tiba di Puskesmas</label>
                                <div class="col-md-9">
                                    <input type="datetime-local" class="form-control" wire:model.live='form.tiba'>
                                    @error('form.tiba')
                                        <span class="form-text text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-2">
                                <label for="" class="col-sm-3 col-form-label">Transportasi waktu datang</label>
                                <div class="col-md-9">
                                    <select class="form-control" wire:model.live='form.transportasi'>
                                        <option value="">Pilih Transportasi</option>
                                        <option value="Mobil">Mobil</option>
                                        <option value="Lainnya">Lainnya</option>
                                    </select>
                                    @error('form.transportasi')
                                        <span class="form-text text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            @if ($form['transportasi'] == 'Lainnya')
                                <div class="row mb-2">
                                    <label for="inputEmail3" class="col-sm-3 col-form-label">Keterangan<small
                                            class="text-danger">* (Transportasi)</small> </label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" wire:model='form.ket_transportasi'
                                            placeholder="Keterangan Transportasi">
                                        @error('form.ket_transportasi')
                                            <span class="form-text text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            @endif
                            <div class="row mb-2">
                                <label for="" class="col-sm-3 col-form-label">Jenis Kasus</label>
                                <div class="col-md-9">
                                    <select class="form-control" wire:model.live='form.kasus_tp'>
                                        <option value="">Pilih Jenis Kasus</option>
                                        @foreach ($listKasus ?? [] as $item)
                                            <option value="{{ $item['com_cd'] }}">
                                                {{ $item['code_nm'] }}</option>
                                        @endforeach
                                    </select>
                                    @error('form.kasus_tp')
                                        <span class="form-text text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            @if ($form['kasus_tp'] == 'KASUS_TP_14')
                                <div class="row mb-2">
                                    <label for="inputEmail3" class="col-sm-3 col-form-label">Keterangan<small
                                            class="text-danger">* (Jenis Kasus)</small> </label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" wire:model='form.ket_kasus'
                                            placeholder="Keterangan Jenis Kasus">
                                        @error('form.ket_kasus')
                                            <span class="form-text text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            @endif
                        </div>
                        <div class="col-md-6">
                            <div class="row mb-2">
                                <label for="" class="col-sm-3 col-form-label">Mobilitas</label>
                                <div class="col-md-9">
                                    <select class="form-control" wire:model.live='form.mobilitas_tp'>
                                        <option value="">Pilih Mobilitas</option>
                                        @foreach ($listMobilitas ?? [] as $item)
                                            <option value="{{ $item['com_cd'] }}">
                                                {{ $item['code_nm'] }}</option>
                                        @endforeach
                                    </select>
                                    @error('form.mobilitas_tp')
                                        <span class="form-text text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-2">
                                <label for="" class="col-sm-3 col-form-label">Kesadaran</label>
                                <div class="col-md-9">
                                    <select class="form-control" wire:model.live='form.kesadaran_tp'>
                                        <option value="">Pilih Kesadaran</option>
                                        @foreach ($listKesadaran ?? [] as $item)
                                            <option value="{{ $item['com_cd'] }}">
                                                {{ $item['code_nm'] }}</option>
                                        @endforeach
                                    </select>
                                    @error('form.kesadaran_tp')
                                        <span class="form-text text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-2">
                                <label for="inputEmail3" class="col-sm-3 col-form-label">GCS</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" wire:model='form.gcs'
                                        placeholder="GCS">
                                    @error('form.gcs')
                                        <span class="form-text text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-2">
                                <label for="" class="col-sm-3 col-form-label">Trauma</label>
                                <div class="col-md-9">
                                    <select class="form-control" wire:model.live='form.trauma'>
                                        <option value="">Pilih Trauma</option>
                                        <option value="0">Tidak Ada</option>
                                        <option value="1">Ada</option>
                                    </select>
                                    @error('form.trauma')
                                        <span class="form-text text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-2">
                                <label for="" class="col-sm-3 col-form-label">Triase</label>
                                <div class="col-md-9">
                                    <select class="form-control" wire:model.live='form.triase'>
                                        <option value="">Pilih Triase</option>
                                        <option value="merah">Merah</option>
                                        <option value="kuning">Kuning</option>
                                        <option value="hijau">Hijau</option>
                                        <option value="hitam">Hitam</option>
                                    </select>
                                    @error('form.triase')
                                        <span class="form-text text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-2">
                                <label for="" class="col-sm-3 col-form-label">Tindakan Resusitasi</label>
                                <div class="col-md-9">
                                    <select class="form-control" wire:model.live='form.t_resusitasi'>
                                        <option value="">Pilih Tindakan Resusitasi</option>
                                        <option value="1">Ya</option>
                                        <option value="0">Tidak</option>
                                    </select>
                                    @error('form.t_resusitasi')
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
                                <th>Alasan Datang</th>
                                <th>Tgl Kejadian</th>
                                <th>Tiba</th>
                                <th>Transportasi</th>
                                <th>Jenis Kasus</th>
                                <th>Mobilitas</th>
                                <th>Kesadaran</th>
                                <th>GCS</th>
                                <th>Trauma</th>
                                <th>Triase</th>
                                <th>T. Resusitasi</th>
                            </thead>
                            <tbody>
                                @foreach ($posts as $item)
                                    <tr @if ($this->edit == $item->id) class="bg-secondary" @endif>
                                        <td>
                                            {{ date('d/m/Y H:i:s', strtotime($item->created_at)) }}
                                        </td>
                                        <td>{{ $item->alasan->code_nm ?? '' }}</td>
                                        <td>{{ date('d/m/Y H:i:s', strtotime($item->tgl_kejadian)) ?? '' }}</td>
                                        <td>{{ date('d/m/Y H:i:s', strtotime($item->tiba)) ?? '' }} </td>
                                        <td>{{ $item->transportasi ?? '' }}</td>
                                        <td>{{ $item->kasus->code_nm ?? '' }}</td>
                                        <td>{{ $item->mobilitas->code_nm ?? '' }}</td>
                                        <td>{{ $item->kesadaran->code_nm ?? '' }}</td>
                                        <td>{{ $item->gcs ?? '' }}</td>
                                        <td>{{ $item->trauma ?? '' }}</td>
                                        <td>{{ $item->triase ?? '' }}</td>
                                        <td>{{ $item->t_resusitasi ?? '' }}</td>

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
                                <th>Alasan Datang</th>
                                <th>Tgl Kejadian</th>
                                <th>Tiba</th>
                                <th>Transportasi</th>
                                <th>Jenis Kasus</th>
                                <th>Mobilitas</th>
                                <th>Kesadaran</th>
                                <th>GCS</th>
                                <th>Trauma</th>
                                <th>Triase</th>
                                <th>T. Resusitasi</th>
                            </thead>
                            <tbody>
                                @foreach ($riwayat as $item)
                                    <tr @if ($this->edit == $item->id) class="bg-secondary" @endif>
                                        <td>
                                            {{ date('d/m/Y H:i:s', strtotime($item->created_at)) }}
                                        </td>
                                        <td>{{ $item->alasan->code_nm ?? '' }}</td>
                                        <td>{{ date('d/m/Y H:i:s', strtotime($item->tgl_kejadian)) ?? '' }}</td>
                                        <td>{{ date('d/m/Y H:i:s', strtotime($item->tiba)) ?? '' }} </td>
                                        <td>{{ $item->transportasi ?? '' }}</td>
                                        <td>{{ $item->kasus->code_nm ?? '' }}</td>
                                        <td>{{ $item->mobilitas->code_nm ?? '' }}</td>
                                        <td>{{ $item->kesadaran->code_nm ?? '' }}</td>
                                        <td>{{ $item->gcs ?? '' }}</td>
                                        <td>{{ $item->trauma ?? '' }}</td>
                                        <td>{{ $item->triase ?? '' }}</td>
                                        <td>{{ $item->t_resusitasi ?? '' }}</td>
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
