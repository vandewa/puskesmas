<div>
    <div class="col-md-12">
        {{-- <div class="card card-success card-outline"> --}}
        <form class="form-horizontal mt-2" wire:submit='save'>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
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
                        <div class="row mb-2">
                            <label for="" class="col-sm-3 col-form-label">Aktifitas Sehari-hari</label>
                            <div class="col-md-9">
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
                            <label for="" class="col-sm-3 col-form-label">Cara Berjalan</label>
                            <div class="col-md-9">
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
