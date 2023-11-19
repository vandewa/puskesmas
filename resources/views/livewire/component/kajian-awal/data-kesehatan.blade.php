<div>
    <div class="col-md-12">
        {{-- <div class="card card-success card-outline"> --}}
        <form class="form-horizontal mt-2" wire:submit='save'>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="row mb-2">
                            <label for="" class="col-sm-3 col-form-label">Data Subjektif</label>
                            <div class="col-md-9">
                                <select class="form-control" wire:model.defer='form.subyektif_tp'>
                                    <option value="">-- Pilih --</option>
                                    @foreach ($listSubyektif ?? [] as $item)
                                        <option value="{{ $item['com_cd'] }}">
                                            {{ $item['code_nm'] }}</option>
                                    @endforeach
                                </select>
                                @error('form.subyektif_tp')
                                    <span class="form-text text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-2">
                            <label for="" class="col-sm-3 col-form-label">Riwayat Alergi Obat</label>
                            <div class="col-md-9">
                                <select class="form-control" wire:model.defer='form.r_alergi_obat'>
                                    <option value="">-- Pilih --</option>
                                    <option value="0">Tidak</option>
                                    <option value="1">Ya</option>
                                </select>
                                @error('form.r_alergi_obat')
                                    <span class="form-text text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-2">
                            <label for="inputEmail3" class="col-sm-3 col-form-label">Keterangan Alergi Obat</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" wire:model='form.r_alergi_obat_ket'
                                    placeholder="Keterangan Alergi Obat">
                                @error('form.r_alergi_obat_ket')
                                    <span class="form-text text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-2">
                            <label for="" class="col-sm-3 col-form-label">Riwayat Alergi Makanan</label>
                            <div class="col-md-9">
                                <select class="form-control" wire:model.defer='form.r_alergi_makanan'>
                                    <option value="">-- Pilih --</option>
                                    <option value="0">Tidak</option>
                                    <option value="1">Ya</option>
                                </select>
                                @error('form.r_alergi_makanan')
                                    <span class="form-text text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-2">
                            <label for="inputEmail3" class="col-sm-3 col-form-label">Keterangan Alergi Makanan</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" wire:model='form.r_alergi_makanan_ket'
                                    placeholder="Keterangan Alergi Makanan">
                                @error('form.r_alergi_makanan_ket')
                                    <span class="form-text text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-2">
                            <label for="" class="col-sm-3 col-form-label">Riwayat Penyakit Dahulu</label>
                            <div class="col-md-9">
                                <select class="form-control" wire:model.defer='form.r_penyakit_dahulu'>
                                    <option value="">-- Pilih --</option>
                                    <option value="0">Tidak</option>
                                    <option value="1">Ya</option>
                                </select>
                                @error('form.r_penyakit_dahulu')
                                    <span class="form-text text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-2">
                            <label for="inputEmail3" class="col-sm-3 col-form-label">Keterangan Penyakit Dahulu</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" wire:model='form.r_penyakit_dahulu_ket'
                                    placeholder="Keterangan Penyakit Dahulu">
                                @error('form.r_penyakit_dahulu_ket')
                                    <span class="form-text text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-2">
                            <label for="" class="col-sm-3 col-form-label">Riwayat Penyakit Keluarga</label>
                            <div class="col-md-9">
                                <select class="form-control" wire:model.defer='form.r_penyakit_keluarga'>
                                    <option value="">-- Pilih --</option>
                                    <option value="0">Tidak</option>
                                    <option value="1">Ya</option>
                                </select>
                                @error('form.r_penyakit_keluarga')
                                    <span class="form-text text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-2">
                            <label for="inputEmail3" class="col-sm-3 col-form-label">Keterangan Penyakit
                                Keluarga</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" wire:model='form.r_penyakit_keluarga_ket'
                                    placeholder="Keterangan Penyakit Keluarga">
                                @error('form.r_penyakit_keluarga_ket')
                                    <span class="form-text text-danger">{{ $message }}</span>
                                @enderror
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
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
