<div>
    <div class="col-md-12">
        {{-- <div class="card card-success card-outline"> --}}
        <form class="form-horizontal mt-2" wire:submit='save'>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <legend>Pertumbuhan </legend>
                        <div class="row mb-2">
                            <label for="inputEmail3" class="col-sm-3 col-form-label">Lahir saat usia kehamilan</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" wire:model='form.r_alergi_obat_ket'
                                    placeholder="....">
                                @error('form.r_alergi_obat_ket')
                                    <span class="form-text text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-2">
                            <label for="inputEmail3" class="col-sm-3 col-form-label">Tempat (di)</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" wire:model='form.r_alergi_obat_ket'
                                    placeholder="....">
                                @error('form.r_alergi_obat_ket')
                                    <span class="form-text text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-2">
                            <label for="inputEmail3" class="col-sm-3 col-form-label">Penolong</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" wire:model='form.r_alergi_obat_ket'
                                    placeholder="....">
                                @error('form.r_alergi_obat_ket')
                                    <span class="form-text text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-2">
                            <label for="inputEmail3" class="col-sm-3 col-form-label">Anak ke</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" wire:model='form.r_alergi_obat_ket'
                                    placeholder="....">
                                @error('form.r_alergi_obat_ket')
                                    <span class="form-text text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-2">
                            <label for="inputEmail3" class="col-sm-3 col-form-label">BB saat lahir</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" wire:model='form.r_alergi_obat_ket'
                                    placeholder="....">
                                @error('form.r_alergi_obat_ket')
                                    <span class="form-text text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-2">
                            <label for="inputEmail3" class="col-sm-3 col-form-label">PB saat lahir</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" wire:model='form.r_alergi_obat_ket'
                                    placeholder="....">
                                @error('form.r_alergi_obat_ket')
                                    <span class="form-text text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-2">
                            <label for="" class="col-sm-3 col-form-label">Kelainan Bawaan</label>
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
                            <label for="" class="col-sm-3 col-form-label">Anak Mendapat</label>
                            <div class="col-md-9">
                                <select class="form-control" wire:model.defer='form.r_alergi_makanan'>
                                    <option value="">-- Pilih --</option>
                                    <option value="0">ASI</option>
                                    <option value="1">Susu Formula</option>
                                    <option value="2">Makanan Tambahan</option>
                                </select>
                                @error('form.r_alergi_makanan')
                                    <span class="form-text text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <legend>Perkembangan</legend>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="row mb-2">
                                    <label for="inputEmail3" class="col-sm-3 col-form-label">Umur membalik badan</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" wire:model='form.r_alergi_obat_ket'
                                            placeholder="bulan">
                                        @error('form.r_alergi_obat_ket')
                                            <span class="form-text text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <label for="inputEmail3" class="col-sm-3 col-form-label">Umur duduk</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" wire:model='form.r_alergi_obat_ket'
                                            placeholder="bulan">
                                        @error('form.r_alergi_obat_ket')
                                            <span class="form-text text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <label for="inputEmail3" class="col-sm-3 col-form-label">Umur berdiri</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control"
                                            wire:model='form.r_alergi_obat_ket' placeholder="bulan">
                                        @error('form.r_alergi_obat_ket')
                                            <span class="form-text text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <label for="inputEmail3" class="col-sm-3 col-form-label">Umur berjalan</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control"
                                            wire:model='form.r_alergi_obat_ket' placeholder="bulan">
                                        @error('form.r_alergi_obat_ket')
                                            <span class="form-text text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row mb-2">
                                    <label for="inputEmail3" class="col-sm-3 col-form-label">Umur mengocel</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control"
                                            wire:model='form.r_alergi_obat_ket' placeholder="bulan">
                                        @error('form.r_alergi_obat_ket')
                                            <span class="form-text text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <label for="inputEmail3" class="col-sm-3 col-form-label">Umur berbicara</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control"
                                            wire:model='form.r_alergi_obat_ket' placeholder="bulan">
                                        @error('form.r_alergi_obat_ket')
                                            <span class="form-text text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <label for="inputEmail3" class="col-sm-3 col-form-label">Riwayat Tumbuh
                                        Kembang</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control"
                                            wire:model='form.r_alergi_obat_ket' placeholder="...">
                                        @error('form.r_alergi_obat_ket')
                                            <span class="form-text text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                        </div>

                        <legend>Riwayat Imunisasi</legend>

                        <div class="row mb-2">
                            <div class="col-md-2">
                                <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                                <label for="vehicle1">HB-0</label><br>
                                <input type="checkbox" id="vehicle2" name="vehicle2" value="Car">
                                <label for="vehicle2">DPT-HB-Hib 1</label><br>
                                <input type="checkbox" id="vehicle3" name="vehicle3" value="Boat">
                                <label for="vehicle3">PCV 1</label><br><br>
                            </div>
                            <div class="col-md-2">
                                <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                                <label for="vehicle1">BCG</label><br>
                                <input type="checkbox" id="vehicle2" name="vehicle2" value="Car">
                                <label for="vehicle2"> DPT-HB-Hib 2</label><br>
                                <input type="checkbox" id="vehicle3" name="vehicle3" value="Boat">
                                <label for="vehicle3"> PCV 2</label><br><br>
                            </div>
                            <div class="col-md-2">
                                <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                                <label for="vehicle1">Polio 1</label><br>
                                <input type="checkbox" id="vehicle2" name="vehicle2" value="Car">
                                <label for="vehicle2"> DPT-HB-Hib 3</label><br>
                                <input type="checkbox" id="vehicle3" name="vehicle3" value="Boat">
                                <label for="vehicle3"> PCV 3</label><br><br>
                            </div>
                            <div class="col-md-3">
                                <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                                <label for="vehicle1">Polio 2</label><br>
                                <input type="checkbox" id="vehicle2" name="vehicle2" value="Car">
                                <label for="vehicle2"> DPT-HB-Hib (lanjutan)</label><br>
                                <input type="checkbox" id="vehicle3" name="vehicle3" value="Boat">
                                <label for="vehicle3"> MR</label><br><br>
                            </div>
                            <div class="col-md-2">
                                <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                                <label for="vehicle1">Polio 3</label><br>
                                <input type="checkbox" id="vehicle2" name="vehicle2" value="Car">
                                <label for="vehicle2"> MR lanjutan</label><br>
                                <input type="checkbox" id="vehicle3" name="vehicle3" value="Boat">
                                <label for="vehicle3"> Polio 4</label><br><br>
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
