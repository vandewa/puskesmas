<div>
    <div class="col-md-12">
        {{-- <div class="card card-success card-outline"> --}}
        <form class="form-horizontal mt-2" wire:submit='save'>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="row mb-2">
                            <label for="" class="col-sm-3 col-form-label">Bicara</label>
                            <div class="col-md-9">
                                <select class="form-control" wire:model.defer='form.bicara_tp'>
                                    <option value="">-- Pilih --</option>
                                    @foreach ($listBicara ?? [] as $item)
                                        <option value="{{ $item['com_cd'] }}">
                                            {{ $item['code_nm'] }}</option>
                                    @endforeach
                                </select>
                                @error('form.bicara_tp')
                                    <span class="form-text text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-2">
                            <label for="" class="col-sm-3 col-form-label">Komunikasi</label>
                            <div class="col-md-9">
                                <select class="form-control" wire:model.defer='form.komunikasi_tp'>
                                    <option value="">-- Pilih --</option>
                                    @foreach ($listKomunikasi ?? [] as $item)
                                        <option value="{{ $item['com_cd'] }}">
                                            {{ $item['code_nm'] }}</option>
                                    @endforeach
                                </select>
                                @error('form.komunikasi_tp')
                                    <span class="form-text text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-2">
                            <label for="" class="col-sm-3 col-form-label">Status Emosional</label>
                            <div class="col-md-9">
                                <select class="form-control" wire:model.defer='form.emosional_st'>
                                    <option value="">-- Pilih --</option>
                                    @foreach ($listEmosional ?? [] as $item)
                                        <option value="{{ $item['com_cd'] }}">
                                            {{ $item['code_nm'] }}</option>
                                    @endforeach
                                </select>
                                @error('form.emosional_st')
                                    <span class="form-text text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-2">
                            <label for="" class="col-sm-3 col-form-label">Sosiologis</label>
                            <div class="col-md-9">
                                <select class="form-control" wire:model.defer='form.sosiologi_tp'>
                                    <option value="">-- Pilih --</option>
                                    @foreach ($listSosiologi ?? [] as $item)
                                        <option value="{{ $item['com_cd'] }}">
                                            {{ $item['code_nm'] }}</option>
                                    @endforeach
                                </select>
                                @error('form.sosiologi_tp')
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
