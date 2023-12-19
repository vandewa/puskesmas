<div>
    <div class="col-md-12">
        {{-- <div class="card card-success card-outline"> --}}
        <form class="form-horizontal mt-2" wire:submit='save'>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="row mb-2">
                                    <label for="" class="col-sm-4 col-form-label">Riwayat KB</label>
                                    <div class="col-md-8">
                                        <select class="form-control" wire:model.live='form.riwayat_kb_tp'>
                                            <option value="">-- Pilih --</option>
                                            @foreach ($listRiwayat ?? [] as $item)
                                                <option value="{{ $item['com_cd'] }}">
                                                    {{ $item['code_nm'] }}</option>
                                            @endforeach
                                        </select>
                                        @error('form.riwayat_kb_tp')
                                            <span class="form-text text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                @if ($form != null)
                                    @if ($form['riwayat_kb_tp'] == 'RIWAYAT_KB_TP_09')
                                        <div class="row mb-2">
                                            <label for="inputEmail3" class="col-sm-4 col-form-label">Keterangan Riwayat
                                                KB</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" wire:model='form.ket_kb'
                                                    placeholder="....">
                                                @error('form.ket_kb')
                                                    <span class="form-text text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    @endif
                                @endif
                                <div class="row mb-2">
                                    <label for="inputEmail3" class="col-sm-4 col-form-label">Riwayat Menstruasi</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" wire:model='form.r_mens'
                                            placeholder="....">
                                        @error('form.r_mens')
                                            <span class="form-text text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row">
                                    <label for="" class="col-sm-4 col-form-label">Menerche</label>
                                    <div class="col-md-8">
                                        <div class="mb-3 input-group">
                                            <input type="text" class="form-control" wire:model='form.menerche'>
                                            <div class="input-group-append">
                                                <span class="input-group-text">tahun</span>
                                            </div>
                                        </div>
                                        @error('form.menerche')
                                            <span class="form-text text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row">
                                    <label for="" class="col-sm-4 col-form-label">Siklus</label>
                                    <div class="col-md-8">
                                        <div class="mb-3 input-group">
                                            <input type="text" class="form-control" wire:model='form.siklus'>
                                            <div class="input-group-append">
                                                <span class="input-group-text">hari</span>
                                            </div>
                                        </div>
                                        @error('form.siklus')
                                            <span class="form-text text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row">
                                    <label for="" class="col-sm-4 col-form-label">Lama</label>
                                    <div class="col-md-8">
                                        <div class="mb-3 input-group">
                                            <input type="text" class="form-control" wire:model='form.lama'>
                                            <div class="input-group-append">
                                                <span class="input-group-text">hari</span>
                                            </div>
                                        </div>
                                        @error('form.lama')
                                            <span class="form-text text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="row mb-2">
                                    <label for="" class="col-sm-4 col-form-label">Teratur</label>
                                    <div class="col-md-8">
                                        <select class="form-control" wire:model.defer='form.teratur'>
                                            <option value="">-- Pilih --</option>
                                            <option value="0">Tidak</option>
                                            <option value="1">Ya</option>
                                        </select>
                                        @error('form.teratur')
                                            <span class="form-text text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <label for="" class="col-sm-4 col-form-label">Nyeri Haid</label>
                                    <div class="col-md-8">
                                        <select class="form-control" wire:model.defer='form.nyeri_haid'>
                                            <option value="">-- Pilih --</option>
                                            <option value="0">Tidak</option>
                                            <option value="1">Ya</option>
                                        </select>
                                        @error('form.nyeri_haid')
                                            <span class="form-text text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <label for="inputEmail3" class="col-sm-4 col-form-label">HPHT</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" wire:model='form.hpht'
                                            placeholder="....">
                                        @error('form.hpht')
                                            <span class="form-text text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-2">
                                    <label for="" class="col-sm-4 col-form-label">Riwayat Selama
                                        Kehamilan</label>
                                    <div class="col-md-8">
                                        <select class="form-control" wire:model.live='form.kehamilan_tp'>
                                            <option value="">-- Pilih --</option>
                                            @foreach ($listRiwayatHamil ?? [] as $item)
                                                <option value="{{ $item['com_cd'] }}">
                                                    {{ $item['code_nm'] }}</option>
                                            @endforeach
                                        </select>
                                        @error('form.kehamilan_tp')
                                            <span class="form-text text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card-footer mt-4">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="d-flex justify-content-end">
                                        <button type="submit" class="btn btn-info">Simpan</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <legend>Riwayat Kehamilan dan Persalinan</legend>
                        <div class="card card-success card-outline">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-2">
                                        <button type="button" class="btn btn-primary btn-flat"
                                            wire:click="$dispatch('show-modal-riwayat-kehamilan-persalinan')">
                                            <i class="fas fa-plus mr-2"></i>Tambah Riwayat
                                        </button>
                                    </div>
                                </div>

                                <table class="table">
                                    <thead>
                                        <th>No</th>
                                        <th>Persalinan</th>
                                        <th>Tahun</th>
                                        <th>L/P</th>
                                        <th>Penolong</th>
                                        <th>Tempat</th>
                                        <th>H/M</th>
                                        <th>BBL</th>
                                        <th>PB</th>
                                        <th>Komplikasi</th>
                                        <th>Aksi</th>
                                    </thead>
                                    <tbody>
                                        @foreach ($posts as $item)
                                            <tr>
                                                <td>{{ $loop->index + $posts->firstItem() }}</td>
                                                <td>{{ $item->persalinan ?? '' }}</td>
                                                <td>{{ $item->tahun ?? '' }}</td>
                                                @if ($item->jk == 'l')
                                                    <td>Laki-laki</td>
                                                @elseif ($item->hidup_mati == 'p')
                                                    <td>Perempuan</td>
                                                @else
                                                    <td></td>
                                                @endif
                                                <td>{{ $item->penolong ?? '' }}</td>
                                                <td>{{ $item->tempat ?? '' }}</td>
                                                @if ($item->hidup_mati == 'h')
                                                    <td>Hidup</td>
                                                @elseif ($item->hidup_mati == 'm')
                                                    <td>Mati</td>
                                                @else
                                                    <td></td>
                                                @endif
                                                <td>{{ $item->bb ?? '' }}</td>
                                                <td>{{ $item->pb ?? '' }}</td>
                                                <td>{{ $item->komplikasi ?? '' }}</td>
                                                <td>
                                                    <button type="button" class="btn btn-sm btn-danger"
                                                        wire:click='delete({{ $item->id }})'>Hapus</button>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                {{ $posts->links() }}

                            </div>
                        </div>



                    </div>
                </div>
            </div>
        </form>
    </div>

    <livewire:component.modal-riwayat-kehamilan-persalinan wire:key='modal-riwayat-kehamilan-persalinan'
        :medicalcd="$medicalcd" :pasiencd="$pasiencd">
</div>
