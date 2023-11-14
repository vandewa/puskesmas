<div>
    <x-slot name="header">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Data Transaksi</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Transaksi</a></li>
                    <li class="breadcrumb-item active">Data Transaksi</li>
                </ol>
            </div>
        </div>
    </x-slot>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-dark card-tabs">
                        <livewire:component.link-transaksi>
                            <div class="card-body">
                                <div class="col-md-12">
                                    {{-- <div class="card card-success card-outline"> --}}
                                    <form class="form-horizontal mt-2" wire:submit='save'>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="row mb-2">
                                                        <label for="" class="col-sm-3 col-form-label">Tinggi
                                                            Badan</label>
                                                        <div class="col-md-9">
                                                            <input type="text" class="form-control"
                                                                wire:model="tinggi">
                                                            @error('tinggi')
                                                                <span
                                                                    class="form-text text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="row mb-2">
                                                        <label for="" class="col-sm-3 col-form-label">Berat
                                                            Badan</label>
                                                        <div class="col-md-9">
                                                            <input type="text" class="form-control"
                                                                wire:model="berat">
                                                            @error('berat')
                                                                <span
                                                                    class="form-text text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="row mb-2">
                                                        <label for=""
                                                            class="col-sm-3 col-form-label">Hobby</label>
                                                        <div class="col-md-9">
                                                            <input type="text" class="form-control"
                                                                wire:model="hoby">
                                                            @error('hoby')
                                                                <span
                                                                    class="form-text text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="row mb-2">
                                                        <label for="" class="col-sm-3 col-form-label">Macam
                                                            kegiatan olah raga yang dikuasai </label>
                                                        <div class="col-md-9">
                                                            <input type="text" class="form-control"
                                                                wire:model="or_yg_dikuasai">
                                                            @error('or_yg_dikuasai')
                                                                <span
                                                                    class="form-text text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="row mb-2">
                                                        <label for="" class="col-sm-3 col-form-label">Pernah
                                                            sakit keras ?</label>
                                                        <div class="col-md-9">
                                                            <input type="text" class="form-control"
                                                                wire:model="sakit">
                                                            @error('sakit')
                                                                <span
                                                                    class="form-text text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="row mb-2">
                                                        <label for=""
                                                            class="col-sm-3 col-form-label">Kapan</label>
                                                        <div class="col-md-9">
                                                            <input type="text" class="form-control"
                                                                wire:model="sakit_kapan">
                                                            @error('sakit_kapan')
                                                                <span
                                                                    class="form-text text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="row mb-2">
                                                        <label for="" class="col-sm-3 col-form-label">Sakit
                                                            Apa</label>
                                                        <div class="col-md-9">
                                                            <input type="text" class="form-control"
                                                                wire:model="sakit_apa">
                                                            @error('sakit_apa')
                                                                <span
                                                                    class="form-text text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="row mb-2">
                                                        <label for="" class="col-sm-3 col-form-label">Pernah
                                                            mendapat kecelakaan ?</label>
                                                        <div class="col-md-9">
                                                            <input type="text" class="form-control"
                                                                wire:model="kecelakaan">
                                                            @error('kecelakaan')
                                                                <span
                                                                    class="form-text text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="row mb-2">
                                                        <label for=""
                                                            class="col-sm-3 col-form-label">Kapan</label>
                                                        <div class="col-md-9">
                                                            <input type="text" class="form-control"
                                                                wire:model="kecelakaan_kapan">
                                                            @error('kecelakaan_kapan')
                                                                <span
                                                                    class="form-text text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="row mb-2">
                                                        <label for="" class="col-sm-3 col-form-label">Kecelakaan
                                                            Apa</label>
                                                        <div class="col-md-9">
                                                            <input type="text" class="form-control"
                                                                wire:model="kecelakaan_apa">
                                                            @error('kecelakaan_apa')
                                                                <span
                                                                    class="form-text text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="row mb-2">
                                                        <label for="" class="col-sm-3 col-form-label">Akibat
                                                            Kecelakaan
                                                        </label>
                                                        <div class="col-md-9">
                                                            <input type="text" class="form-control"
                                                                wire:model="kecelakaan_akibat">
                                                            @error('kecelakaan_akibat')
                                                                <span
                                                                    class="form-text text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="row mb-2">
                                                        <label for="" class="col-sm-3 col-form-label">Pernah
                                                            terlibat kegiatan terlarang ?</label>
                                                        <div class="col-md-9">
                                                            <input type="text" class="form-control"
                                                                wire:model="kegiatan_terlarang">
                                                            @error('kegiatan_terlarang')
                                                                <span
                                                                    class="form-text text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="row mb-2">
                                                        <label for="" class="col-sm-3 col-form-label">Pernah
                                                            tersangkut urusan dengan pihak kepolisian ?</label>
                                                        <div class="col-md-9">
                                                            <input type="text" class="form-control"
                                                                wire:model="polisi">
                                                            @error('polisi')
                                                                <span
                                                                    class="form-text text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="row mb-2">
                                                        <label for=""
                                                            class="col-sm-3 col-form-label">Jelaskan</label>
                                                        <div class="col-md-9">
                                                            <input type="text" class="form-control"
                                                                wire:model="polisi_ket">
                                                            @error('polisi_ket')
                                                                <span
                                                                    class="form-text text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>


                                                </div>

                                                <div class="col-md-6">
                                                    <div class="row mb-2">
                                                        <label for="" class="col-sm-3 col-form-label">Pernah
                                                            terdaftar sebagai peserta/anggota program ASTEK ?</label>
                                                        <div class="col-md-9">
                                                            <input type="text" class="form-control"
                                                                wire:model="astek">
                                                            @error('astek')
                                                                <span
                                                                    class="form-text text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="row mb-2">
                                                        <label for="" class="col-sm-3 col-form-label">No.
                                                            Peserta/KPA</label>
                                                        <div class="col-md-9">
                                                            <input type="text" class="form-control"
                                                                wire:model="no_kpa">
                                                            @error('no_kpa')
                                                                <span
                                                                    class="form-text text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="row mb-2">
                                                        <label for="" class="col-sm-3 col-form-label">Pernah
                                                            mengikuti Penataran P4</label>
                                                        <div class="col-md-9">
                                                            <input type="text" class="form-control"
                                                                wire:model="penataran">
                                                            @error('penataran')
                                                                <span
                                                                    class="form-text text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="row mb-2">
                                                        <label for=""
                                                            class="col-sm-3 col-form-label">Kapan</label>
                                                        <div class="col-md-9">
                                                            <input type="text" class="form-control"
                                                                wire:model="penataran_kapan">
                                                            @error('penataran_kapan')
                                                                <span
                                                                    class="form-text text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="row mb-2">
                                                        <label for=""
                                                            class="col-sm-3 col-form-label">Pola/Type</label>
                                                        <div class="col-md-9">
                                                            <input type="text" class="form-control"
                                                                wire:model="penataran_pola">
                                                            @error('penataran_pola')
                                                                <span
                                                                    class="form-text text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="row mb-2">
                                                        <label for=""
                                                            class="col-sm-3 col-form-label">Penyelenggara</label>
                                                        <div class="col-md-9">
                                                            <input type="text" class="form-control"
                                                                wire:model="penataran_penyelenggara">
                                                            @error('penataran_penyelenggara')
                                                                <span
                                                                    class="form-text text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="row mb-2">
                                                        <label for=""
                                                            class="col-sm-3 col-form-label">SIM</label>
                                                        <div class="col-md-9">
                                                            <input type="text" class="form-control"
                                                                wire:model="sim">
                                                            @error('sim')
                                                                <span
                                                                    class="form-text text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                </div>

                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <button type="submit" class="btn btn-info">Simpan</button>
                                            <button type="button" class="btn btn-default float-right"
                                                wire:click='batal'>Batal</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
    </section>
</div>
