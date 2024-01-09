<div>
    <div class="col-md-12">
        {{-- <div class="card card-success card-outline"> --}}
        <form class="form-horizontal mt-2" wire:submit='save'>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="row mb-2">
                            <label for="" class="col-sm-3 col-form-label">No RM</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" wire:model="no_rm" disabled>
                                @error('no_rm')
                                    <span class="form-text text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-2">
                            <label for="" class="col-sm-3 col-form-label">Nama
                                Pasien</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" wire:model="pasien_nm" disabled>
                                @error('pasien_nm')
                                    <span class="form-text text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-2">
                            <label for="" class="col-sm-3 col-form-label">Tanggal
                                Lahir</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" wire:model="birth_date" disabled>
                                @error('birth_date')
                                    <span class="form-text text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-2">
                            <label for="" class="col-sm-3 col-form-label">Tanggal
                                Masuk</label>
                            <div class="col-md-9">
                                <input type="date" class="form-control" wire:model="form.datetime_in">
                                @error('form.datetime_in')
                                    <span class="form-text text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-2">
                            <label for="" class="col-sm-3 col-form-label">Dokter</label>
                            <div class="col-md-9">
                                <select class="form-control" wire:model="form.dr_cd">
                                    <option value="">Pilih Dokter</option>
                                    @foreach ($dokter ?? [] as $item)
                                        <option value="{{ $item['dr_cd'] }}">
                                            {{ $item['dr_nm'] }}</option>
                                    @endforeach
                                </select>
                                @error('form.dr_cd')
                                    <span class="form-text text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-2">
                            <label for="" class="col-sm-3 col-form-label">Poliklinik</label>
                            <div class="col-md-9">
                                <select class="form-control" wire:model="form.medunit_cd">
                                    <option value="">Pilih Poli</option>
                                    @foreach ($poli ?? [] as $item)
                                        <option value="{{ $item['medunit_cd'] }}">
                                            {{ $item['medunit_nm'] }}</option>
                                    @endforeach
                                </select>
                                @error('form.medunit_cd')
                                    <span class="form-text text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-2">
                            <label for="" class="col-sm-3 col-form-label">Status Pulang</label>
                            <div class="col-md-9">
                                <select name="" id="" class="form-control"
                                    wire:model.live='form.pulang_st'>
                                    <option value="">Pilih Status Pulang</option>
                                    @foreach ($pulang ?? [] as $item)
                                        <option value="{{ $item['com_cd'] }}">{{ $item['code_nm'] }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        {{-- <div class="row mb-2">
                        <label for=""
                            class="col-sm-3 col-form-label">Rujukan</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control">
                            @error('form.')
                                <span class="form-text text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div> --}}

                    </div>

                    <div class="col-md-6">

                        <div class="row mb-2">
                            <label class="col-sm-3 control-label">Kronis</label>
                            <div class="col-sm-9">
                                &nbsp;&nbsp;&nbsp;&nbsp;
                                <input class="form-check-input" type="radio" name="kronis" id="genderMale"
                                    value="1" wire:model="form.kronis"
                                    @if ($form['kronis'] == 1) checked @endif>
                                <label class="form-check-label" for="genderMale">
                                    Ya
                                </label>

                                &nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;

                                <input class="form-check-input" type="radio" name="kronis" id="genderFemale"
                                    value="0" wire:model="form.kronis"
                                    @if ($form['kronis'] == 0) checked @endif>
                                <label class="form-check-label" for="genderFemale">
                                    Tidak
                                </label>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <label class="col-sm-3 control-label">Risiko Jatuh</label>
                            <div class="col-sm-9">
                                &nbsp;&nbsp;&nbsp;&nbsp;
                                <input class="form-check-input" type="radio" name="risiko_jatuh" id="Male"
                                    value="1" wire:model.live="form.risiko_jatuh"
                                    @if ($form['risiko_jatuh'] == 0) checked @endif>
                                <label class="form-check-label" for="Male">
                                    Ya
                                </label>

                                &nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;

                                <input class="form-check-input" type="radio" name="risiko_jatuh" id="Female"
                                    value="0" wire:model.live="form.risiko_jatuh"
                                    @if ($form['risiko_jatuh'] == 0) checked @endif>
                                <label class="form-check-label" for="Female">
                                    Tidak
                                </label>
                            </div>
                        </div>

                        <div class="row mb-2">
                            <label class="col-sm-3 control-label">Catatan</label>
                            <div class="col-sm-9">
                                <textarea name="note" class="form-control"></textarea>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <label class="col-sm-3 control-label">Alergi</label>
                            <div class="col-sm-9">
                                <textarea name="alergi" class="form-control"></textarea>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-info">Simpan</button>

                            @if ($medik->medical_tp == 'MEDICAL_TP_01')
                                <a href="{{ route('registrasi.rawat-inap', [$medik->pasien_cd, $medik->medical_cd]) }}"
                                    class="btn btn-warning">Mutasi To Inap</a>
                                <a href="{{ route('registrasi.rawat-jalan', [$medik->pasien_cd, $medik->medical_cd]) }}"
                                    class="btn btn-success">Mutasi Poli</a>
                            @endif

                            <a href="{{ route('transaksi.rawat-jalan.list') }}"
                                class="btn btn-default float-right">Kembali</a>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
