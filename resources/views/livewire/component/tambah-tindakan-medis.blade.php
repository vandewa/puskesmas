<div>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    {{-- <div class="card card-success card-outline"> --}}
                    <form class="form-horizontal mt-2" wire:submit='save'>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="row mb-2">
                                        <label for="" class="col-sm-3 col-form-label">Tindakan</label>
                                        <div class="col-md-9">
                                            <div class="input-group ">
                                                <p class="form-control">{{ $tindakan->treatment_nm ?? '' }}</p>
                                                <span class="input-group-append">
                                                    <button type="button" class="btn btn-info btn-flat"
                                                        wire:click="$dispatch('show-modal-master-tindakan-medis')">Cari</button>
                                                </span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-2">
                                        <label for="" class="col-sm-3 col-form-label">Jumlah</label>
                                        <div class="col-md-3">
                                            <input type="text" class="form-control" wire:model='form.quantity'>
                                            @error('form.quantity')
                                                <span class="form-text text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <label for="" class="col-sm-3 col-form-label">Diskon Dokter</label>
                                        <div class="col-md-3">
                                            <div class="input-group">
                                                <input type="text" class="form-control"
                                                    wire:model="form.diskon_percent">
                                                <div class="input-group-append">
                                                    <span class="input-group-text">%</span>
                                                </div>
                                            </div>
                                            @error('form.diskon_percent')
                                                <span class="form-text text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <label for="" class="col-sm-3 col-form-label">Unit</label>
                                        <div class="col-md-9">
                                            <select class="form-control">
                                                <option value="">Pilih Poli</option>
                                                @foreach ($listPoli ?? [] as $item)
                                                    <option value="{{ $item['medunit_cd'] }}">
                                                        {{ $item['medunit_nm'] }}</option>
                                                @endforeach
                                            </select>
                                            {{-- @error('form.spesialis_cd')
                                                    <span class="form-text text-danger">{{ $message }}</span>
                                                @enderror --}}
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="row mb-2">
                                        <label for="" class="col-sm-3 col-form-label">Tgl
                                            Permintaan</label>
                                        <div class="col-md-5">
                                            <input type="date" class="form-control" wire:model='tanggal'>
                                            @error('tanggal')
                                                <span class="form-text text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-md-4">
                                            <input type="time" class="form-control" wire:model='jam'>
                                            @error('jam')
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
                                        <label for="" class="col-sm-3 col-form-label">Catatan</label>
                                        <div class="col-md-9">
                                            <textarea rows="2" class="form-control" wire:model="form.medical_note"></textarea>
                                            @error('form.medical_note')
                                                <span class="form-text text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-info">Simpan</button>
                            <a href="{{ route('master.inventori.index') }}"
                                class="btn btn-default float-right">Kembali</a>
                        </div>
                    </form>
                    {{-- </div> --}}
                </div>
            </div>
        </div>
    </section>
    <livewire:component.modal-master-tindakan-medis wire:key='modal-master-tindakan-medis'>
</div>
