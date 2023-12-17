<div>
    <div class="col-md-12">
        {{-- <div class="card card-success card-outline"> --}}
        <form class="form-horizontal mt-2" wire:submit='save'>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <legend>Pertumbuhan </legend>
                        <hr>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="row mb-2">
                                    <label for="inputEmail3" class="col-md-4 col-form-label">Lahir saat usia
                                        kehamilan</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" wire:model='form.lahir'
                                            placeholder="....">
                                        @error('form.lahir')
                                            <span class="form-text text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <label for="inputEmail3" class="col-md-4 col-form-label">Tempat (di)</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" wire:model='form.tempat'
                                            placeholder="....">
                                        @error('form.tempat')
                                            <span class="form-text text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <label for="inputEmail3" class="col-md-4 col-form-label">Penolong</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" wire:model='form.penolong'
                                            placeholder="....">
                                        @error('form.penolong')
                                            <span class="form-text text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <label for="inputEmail3" class="col-md-4 col-form-label">Anak ke</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" wire:model='form.anak_ke'
                                            placeholder="....">
                                        @error('form.anak_ke')
                                            <span class="form-text text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="row mb-2">
                                    <label for="inputEmail3" class="col-md-4 col-form-label">BB saat lahir</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" wire:model='form.bb'
                                            placeholder="....">
                                        @error('form.bb')
                                            <span class="form-text text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <label for="inputEmail3" class="col-md-4 col-form-label">PB saat lahir</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" wire:model='form.pb'
                                            placeholder="....">
                                        @error('form.pb')
                                            <span class="form-text text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <label for="" class="col-md-4 col-form-label">Kelainan Bawaan</label>
                                    <div class="col-md-8">
                                        <select class="form-control" wire:model.defer='form.kelainan'>
                                            <option value="">-- Pilih --</option>
                                            <option value="0">Tidak</option>
                                            <option value="1">Ya</option>
                                        </select>
                                        @error('form.kelainan')
                                            <span class="form-text text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <label for="" class="col-md-4 col-form-label">Anak Mendapat</label>
                                    <div class="col-md-8">
                                        <select class="form-control" wire:model.defer='form.nutrisi'>
                                            <option value="">-- Pilih --</option>
                                            <option value="0">ASI</option>
                                            <option value="1">Susu Formula</option>
                                            <option value="2">Makanan Tambahan</option>
                                        </select>
                                        @error('form.nutrisi')
                                            <span class="form-text text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                        </div>

                        <br>
                        <legend>Perkembangan</legend>
                        <hr>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="row">
                                    <label for="" class="col-md-4 col-form-label">Umur membalik badan</label>
                                    <div class="col-md-8">
                                        <div class="mb-3 input-group">
                                            <input type="text" class="form-control" wire:model='form.balik_badan'>
                                            <div class="input-group-append">
                                                <span class="input-group-text">bulan</span>
                                            </div>
                                        </div>
                                        @error('form.balik_badan')
                                            <span class="form-text text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row">
                                    <label for="" class="col-md-4 col-form-label">Umur duduk</label>
                                    <div class="col-md-8">
                                        <div class="mb-3 input-group">
                                            <input type="text" class="form-control" wire:model='form.duduk'>
                                            <div class="input-group-append">
                                                <span class="input-group-text">bulan</span>
                                            </div>
                                        </div>
                                        @error('form.duduk')
                                            <span class="form-text text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row">
                                    <label for="" class="col-md-4 col-form-label">Umur berdiri</label>
                                    <div class="col-md-8">
                                        <div class="mb-3 input-group">
                                            <input type="text" class="form-control" wire:model='form.berdiri'>
                                            <div class="input-group-append">
                                                <span class="input-group-text">bulan</span>
                                            </div>
                                        </div>
                                        @error('form.berdiri')
                                            <span class="form-text text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row">
                                    <label for="" class="col-md-4 col-form-label">Umur berjalan</label>
                                    <div class="col-md-8">
                                        <div class="mb-3 input-group">
                                            <input type="text" class="form-control" wire:model='form.berjalan'>
                                            <div class="input-group-append">
                                                <span class="input-group-text">bulan</span>
                                            </div>
                                        </div>
                                        @error('form.berjalan')
                                            <span class="form-text text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <label for="" class="col-md-4 col-form-label">Umur mengocel</label>
                                    <div class="col-md-8">
                                        <div class="mb-3 input-group">
                                            <input type="text" class="form-control" wire:model='form.mengocel'>
                                            <div class="input-group-append">
                                                <span class="input-group-text">bulan</span>
                                            </div>
                                        </div>
                                        @error('form.mengocel')
                                            <span class="form-text text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row">
                                    <label for="" class="col-md-4 col-form-label">Umur berbicara</label>
                                    <div class="col-md-8">
                                        <div class="mb-3 input-group">
                                            <input type="text" class="form-control" wire:model='form.berbicara'>
                                            <div class="input-group-append">
                                                <span class="input-group-text">bulan</span>
                                            </div>
                                        </div>
                                        @error('form.berbicara')
                                            <span class="form-text text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <label for="inputEmail3" class="col-md-4 col-form-label">Riwayat Tumbuh
                                        Kembang</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" wire:model='form.r_tumbuh_kembang'
                                            placeholder="...">
                                        @error('form.r_tumbuh_kembang')
                                            <span class="form-text text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                        </div>

                        <legend>Riwayat Imunisasi</legend>
                        <hr>

                        <div class="row mb-2">
                            <div class="col-md-2">
                                <input type="checkbox" value="HB-0" wire:model="updateTypes">
                                <label>HB-0</label><br>
                                <input type="checkbox" wire:model="updateTypes" value="DPT-HB-Hib 1">
                                <label>DPT-HB-Hib 1</label><br>
                                <input type="checkbox" wire:model="updateTypes" value="PCV 1">
                                <label>PCV 1</label><br><br>
                            </div>
                            <div class="col-md-2">
                                <input type="checkbox" wire:model="updateTypes" value="BCG">
                                <label>BCG</label><br>
                                <input type="checkbox" wire:model="updateTypes" value="DPT-HB-Hib 2">
                                <label> DPT-HB-Hib 2</label><br>
                                <input type="checkbox" wire:model="updateTypes" value="PCV 2">
                                <label> PCV 2</label><br><br>
                            </div>
                            <div class="col-md-2">
                                <input type="checkbox" wire:model="updateTypes" value="Polio 1">
                                <label>Polio 1</label><br>
                                <input type="checkbox" wire:model="updateTypes" value="PT-HB-Hib 3">
                                <label> DPT-HB-Hib 3</label><br>
                                <input type="checkbox" wire:model="updateTypes" value="PCV 3">
                                <label> PCV 3</label><br><br>
                            </div>
                            <div class="col-md-3">
                                <input type="checkbox" wire:model="updateTypes" value="Polio 2">
                                <label>Polio 2</label><br>
                                <input type="checkbox" wire:model="updateTypes" value="DPT-HB-Hib (lanjutan)">
                                <label> DPT-HB-Hib (lanjutan)</label><br>
                                <input type="checkbox" wire:model="updateTypes" value="MR">
                                <label> MR</label><br><br>
                            </div>
                            <div class="col-md-2">
                                <input type="checkbox" wire:model="updateTypes" value="Polio 3">
                                <label>Polio 3</label><br>
                                <input type="checkbox" wire:model="updateTypes" value="MR lanjutan">
                                <label> MR lanjutan</label><br>
                                <input type="checkbox" wire:model="updateTypes" value="Polio 4">
                                <label> Polio 4</label><br><br>
                            </div>
                            <div class="col-md-2">
                                <input type="checkbox" wire:model="updateTypes" value="RV 1">
                                <label>RV 1</label><br>
                                <input type="checkbox" wire:model="updateTypes" value="RV 2">
                                <label>RV 2</label><br>
                                <input type="checkbox" wire:model="updateTypes" value="RV 3">
                                <label>RV 3</label><br><br>
                            </div>
                            <div class="col-md-2">
                                <input type="checkbox" wire:model="updateTypes" value="IPV 1">
                                <label>IPV 1</label><br>
                                <input type="checkbox" wire:model="updateTypes" value="IPV 2">
                                <label>IPV 2</label><br>
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
