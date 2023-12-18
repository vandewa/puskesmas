<div>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    {{-- <div class="card card-success card-outline"> --}}
                    <form class="form-horizontal mt-2" >
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="row mb-2">
                                        <label for="" class="col-sm-3 col-form-label">Anamnesa</label>
                                        <div class="col-md-9">
                                            <textarea wire:model.live="form.anamnesa" class="form-control" rows="2"></textarea>
                                            @error('form.anamnesa')
                                                <span class="form-text text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <label for="" class="col-sm-3 col-form-label">Pencarian ICD</label>
                                        <div class="col-md-9">
                                            <div class="input-group ">
                                                <p class="form-control">{{ $icd->icd_cd ?? '' }}</p>
                                                <span class="input-group-append">
                                                    <button type="button" class="btn btn-info btn-flat"
                                                        wire:click="$dispatch('show-modal-diagnosa')">Cari</button>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <label for="" class="col-sm-3 col-form-label">Diagnosa</label>
                                        <div class="col-md-9">
                                            <textarea wire:model.live="form.medical_data" class="form-control" rows="2"></textarea>
                                            @error('form.medical_data')
                                                <span class="form-text text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <label class="col-sm-3 col-form-label">Jenis Diagnosa</label>
                                        <div class="col-md-9">
                                            <select class="form-control" wire:model.live="form.rm_tp">
                                                @foreach ($diagnosa ?? [] as $item)
                                                    <option value="{{ $item['com_cd'] }}">{{ $item['code_nm'] }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            @error('form.rm_tp')
                                                <span class="form-text text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <label for="" class="col-sm-3 col-form-label">Tanggal</label>
                                        <div class="col-md-9">
                                            <input type="date" class="form-control"
                                                wire:model.live='form.datetime_record'>
                                            @error('form.datetime_record')
                                                <span class="form-text text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                </div>
                                <div class="col-md-6">
                                    <div class="row mb-2">
                                        <label class="col-sm-3 col-form-label">Dokter</label>
                                        <div class="col-md-9">
                                            <select name="" id="" class="form-control"
                                                wire:model.live.live='form.dr_cd'>
                                                <option value="">Pilih Dokter</option>
                                                @foreach ($dokter ?? [] as $item)
                                                    <option value="{{ $item['dr_cd'] }}">{{ $item['dr_nm'] }}</option>
                                                @endforeach
                                            </select>
                                            @error('form.dr_cd')
                                                <span class="form-text text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <label for="" class="col-sm-3 col-form-label">Jenis Kasus</label>
                                        <div class="col-md-9">
                                            <select class="form-control" wire:model.live="form.case_tp">
                                                <option value="">-- Pilih Jenis Diagnosa --</option>
                                                @foreach ($kasus ?? [] as $item)
                                                    <option value="{{ $item['com_cd'] }}">Kasus
                                                        {{ $item['code_nm'] }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            @error('form.case_tp')
                                                <span class="form-text text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <label for="" class="col-sm-3 col-form-label">Pemeriksaan
                                            Fisik</label>
                                        <div class="col-md-9">
                                            <textarea wire:model.live="form.pemeriksaan_fisik" class="form-control" rows="2"></textarea>
                                            @error('form.pemeriksaan_fisik')
                                                <span class="form-text text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <label for="" class="col-sm-3 col-form-label">Selengkapnya
                                            </label>
                                        <div class="col-md-9">
                                            <input type="checkbox" class="form-control" wire:model.live.live='advance'>
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <label for="" class="col-sm-3 col-form-label">Pemeriksaan
                                            Penunjang</label>
                                        <div class="col-md-9">
                                            <textarea wire:model.live="form.pemeriksaan_penunjang" class="form-control" rows="2"></textarea>
                                            @error('form.pemeriksaan_penunjang')
                                                <span class="form-text text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <label for="" class="col-sm-3 col-form-label">Catatan</label>
                                        <div class="col-md-9">
                                            <textarea rows="2" class="form-control" wire:model.live='form.medical_note'></textarea>
                                            @error('form.medical_note')
                                                <span class="form-text text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="">
                                @if($advance)
                                <div class="col-md-12">
                                    <div class="col-md-12 text-center">
                                        <h4>Pemeriksaan Fisik Lengkap</h4>
                                    </div>
                                    {{-- <div class="card card-success card-outline"> --}}

                                        <div class="card-body">
                                            <div class="row">

                                                    <div class="col-md-6">
                                                        <div class="mb-2 row">
                                                            <label for="" class="col-sm-3 col-form-label">Kepala</label>
                                                            <div class="col-md-9">
                                                                <div class="mb-3 input-group">
                                                                    <select name="" id="" class="form-control"
                                                                        wire:model.live='form2.kepala'>
                                                                        <option value="">Pilih</option>
                                                                        <option value="DBN">DBN (Dalam Batas Normal)</option>
                                                                        <option value="Asimetris">Asimetris</option>
                                                                    </select>
                                                                </div>
                                                                @error('form2.kepala')
                                                                    <span class="form-text text-danger">{{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="mb-2 row">
                                                            <label for="" class="col-sm-3 col-form-label">Mata</label>
                                                            <div class="col-md-9">
                                                                <div class="mb-3 input-group">
                                                                    <select name="" id="" class="form-control"
                                                                        wire:model.live='form2.mata'>
                                                                        <option value="">Pilih</option>
                                                                        <option value="DBN">DBN (Dalam Batas Normal)</option>
                                                                        <option value="Anemis">Anemis</option>
                                                                        <option value="Ikterik">Ikterik</option>
                                                                        <option value="Anisokor">Anisokor</option>
                                                                        <option value="Midriasis">Midriasis</option>
                                                                        <option value="Miosis">Miosis</option>
                                                                    </select>
                                                                </div>
                                                                @error('form2.mata')
                                                                    <span class="form-text text-danger">{{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="mb-2 row">
                                                            <label for="" class="col-sm-3 col-form-label">Telinga</label>
                                                            <div class="col-md-9">
                                                                <div class="mb-3 input-group">
                                                                    <select name="" id="" class="form-control"
                                                                        wire:model.live='form2.teling'>
                                                                        <option value="">Pilih</option>
                                                                        <option value="DBN">DBN (Dalam Batas Normal)</option>
                                                                        <option value="Berdengung">Berdengung</option>
                                                                        <option value="Nyeri">Nyeri</option>
                                                                        <option value="Tuli">Tuli</option>
                                                                    </select>
                                                                </div>
                                                                @error('form2.teling')
                                                                    <span class="form-text text-danger">{{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="mb-2 row">
                                                            <label for="" class="col-sm-3 col-form-label">Leher</label>
                                                            <div class="col-md-9">
                                                                <div class="mb-3 input-group">
                                                                    <select name="" id="" class="form-control"
                                                                        wire:model.live='form2.leher'>
                                                                        <option value="">Pilih</option>
                                                                        <option value="DBN">DBN (Dalam Batas Normal)</option>
                                                                        <option value="Pembesaran Tyroid">Pembesaran Tyroid</option>
                                                                        <option value="Pembesaran KGB">Pembesaran KGB</option>
                                                                        <option value="Kaku Duduk">Kaku Duduk</option>

                                                                    </select>
                                                                </div>
                                                                @error('form2.leher')
                                                                    <span class="form-text text-danger">{{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">

                                                        <div class="mb-2 row">
                                                            <label for="" class="col-sm-2 col-form-label">Dada</label>
                                                            <div class="col-md-10">
                                                                <div class="row mb-2">
                                                                    <div class="col-md-6">
                                                                        <input type="checkbox" value="DBN" wire:model.live="updateTypes">
                                                                        <label>DBN (Dalam Batas Normal)</label><br>
                                                                        <input type="checkbox" wire:model.live="updateTypes" value="Asimetris">
                                                                        <label>Asimetris</label><br>
                                                                        <input type="checkbox" wire:model.live="updateTypes" value="Retraksi">
                                                                        <label>Retraksi</label><br>
                                                                        <input type="checkbox" wire:model.live="updateTypes" value="NyeriDada">
                                                                        <label>Nyeri Dada</label><br>

                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <input type="checkbox" wire:model.live="updateTypes" value="Ronkhi">
                                                                        <label>Ronkhi</label><br>
                                                                        <input type="checkbox" wire:model.live="updateTypes" value="Wheezing">
                                                                        <label>Wheezing</label><br>
                                                                        <input type="checkbox" value="Takhikardi" wire:model.live="updateTypes">
                                                                        <label>Takhikardi</label><br>

                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <input type="checkbox" wire:model.live="updateTypes" value="Mur-mur">
                                                                        <label>Mur-mur</label><br>
                                                                        <input type="checkbox" wire:model.live="updateTypes" value="Aritmia">
                                                                        <label>Aritmia</label><br>
                                                                        <input type="checkbox" wire:model.live="updateTypes" value="Palpitasi">
                                                                        <label>Palpitasi</label><br>

                                                                    </div>
                                                                </div>
                                                                @error('form2.dada')
                                                                    <span class="form-text text-danger">{{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="mb-2 row">
                                                            <label for="" class="col-sm-3 col-form-label">Abdomen</label>
                                                            <div class="col-md-9">
                                                                <div class="mb-3 input-group">
                                                                    <select name="" id="" class="form-control"
                                                                        wire:model.live='form2.abdomen'>
                                                                        <option value="">Pilih</option>
                                                                        <option value="DBN">DBN (Dalam Batas Normal)</option>
                                                                        <option value="Kembung">Kembung</option>
                                                                        <option value="Ascites">Ascites</option>
                                                                        <option value="Tegang">Tegang</option>
                                                                        <option value="Nyeri Tekan">Nyeri Tekan</option>

                                                                    </select>
                                                                </div>
                                                                @error('form2.abdomen')
                                                                    <span class="form-text text-danger">{{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="mb-2 row">
                                                            <label for="" class="col-sm-3 col-form-label">Extremitas</label>
                                                            <div class="col-md-9">
                                                                <div class="mb-3 input-group">
                                                                    <select name="" id="" class="form-control"
                                                                        wire:model.live='form2.extremistis'>
                                                                        <option value="">Pilih</option>
                                                                        <option value="DBN">DBN (Dalam Batas Normal)</option>
                                                                        <option value="CRT < 2">CRT < 2</option>
                                                                        <option value="Odem">Odem</option>
                                                                        <option value="Fraktur">Fraktur</option>
                                                                    </select>
                                                                </div>
                                                                @error('form2.extremistis')
                                                                    <span class="form-text text-danger">{{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="mt-4 card-footer">

                                                        </div>
                                                    </div>

                                            </div>


                                        </div>

                                </div>
                                @endif
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="button" wire:click='save' class="btn btn-info">Simpan</button>
                            <a href="{{ route('master.jadwal-praktek.index') }}"
                                class="btn btn-default float-right">Kembali</a>
                        </div>
                    </form>
                    {{-- </div> --}}
                </div>
            </div>
        </div>
    </section>
    <livewire:component.modal-diagnosa wire:key='modal-diagnosa'>
</div>
