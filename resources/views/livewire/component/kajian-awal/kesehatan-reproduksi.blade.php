<div>
    <div class="col-md-12">
        {{-- <div class="card card-success card-outline"> --}}
        <form class="form-horizontal mt-2" wire:submit='save'>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="row mb-2">
                            <label for="inputEmail3" class="col-md-3 col-form-label">Riwayat KB</label>

                            <div class="col-md-2">
                                <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                                <label for="vehicle1">Suntik</label><br>
                                <input type="checkbox" id="vehicle2" name="vehicle2" value="Car">
                                <label for="vehicle2">Implan</label><br><br>
                            </div>
                            <div class="col-md-2">
                                <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                                <label for="vehicle1">IUD</label><br>
                                <input type="checkbox" id="vehicle2" name="vehicle2" value="Car">
                                <label for="vehicle2">MOW</label><br><br>
                            </div>
                            <div class="col-md-2">
                                <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                                <label for="vehicle1">Kondom</label><br>
                                <input type="checkbox" id="vehicle2" name="vehicle2" value="Car">
                                <label for="vehicle2">Menopause</label><br><br>
                            </div>
                            <div class="col-md-2">
                                <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                                <label for="vehicle1">Pil</label><br>
                                <input type="checkbox" id="vehicle2" name="vehicle2" value="Car">
                                <label for="vehicle2">Kalender</label><br><br>
                            </div>

                        </div>
                        <div class="row mb-2">
                            <label for="inputEmail3" class="col-sm-3 col-form-label">Riwayat Menstruasi</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" wire:model='form.r_alergi_obat_ket'
                                    placeholder="....">
                                @error('form.r_alergi_obat_ket')
                                    <span class="form-text text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-2">
                            <label for="inputEmail3" class="col-sm-3 col-form-label">Menerche</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" wire:model='form.r_alergi_obat_ket'
                                    placeholder="tahun">
                                @error('form.r_alergi_obat_ket')
                                    <span class="form-text text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-2">
                            <label for="inputEmail3" class="col-sm-3 col-form-label">Siklus</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" wire:model='form.r_alergi_obat_ket'
                                    placeholder="hari">
                                @error('form.r_alergi_obat_ket')
                                    <span class="form-text text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-2">
                            <label for="inputEmail3" class="col-sm-3 col-form-label">Lama</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" wire:model='form.r_alergi_obat_ket'
                                    placeholder="hari">
                                @error('form.r_alergi_obat_ket')
                                    <span class="form-text text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-2">
                            <label for="" class="col-sm-3 col-form-label">Teratur</label>
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
                            <label for="" class="col-sm-3 col-form-label">Nyeri Haid</label>
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
                            <label for="inputEmail3" class="col-sm-3 col-form-label">HPHT</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" wire:model='form.r_alergi_obat_ket'
                                    placeholder="....">
                                @error('form.r_alergi_obat_ket')
                                    <span class="form-text text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-2">
                            <label for="inputEmail3" class="col-md-3 col-form-label">Riwayat Selama Kehamilan</label>

                            <div class="col-md-2">
                                <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                                <label for="vehicle1">DM</label><br>
                                <input type="checkbox" id="vehicle2" name="vehicle2" value="Car">
                                <label for="vehicle2">ISK</label><br><br>
                            </div>
                            <div class="col-md-2">
                                <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                                <label for="vehicle1">Hipertensi</label><br>
                                <input type="checkbox" id="vehicle2" name="vehicle2" value="Car">
                                <label for="vehicle2">Perdarahan</label><br><br>
                            </div>
                            <div class="col-md-2">
                                <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                                <label for="vehicle1">Hiperemesis</label><br>
                                <input type="checkbox" id="vehicle2" name="vehicle2" value="Car">
                                <label for="vehicle2">Tidak Ada</label><br><br>
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

                        <legend>Riwayat Kehamilan dan Persalinan</legend>
                        <div class="card card-success card-outline">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-2">
                                        <input type="text" class="form-control" placeholder="cari"
                                            wire:model.live='cari'>
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
                                    </thead>
                                    <tbody>

                                    </tbody>
                                </table>
                            </div>
                        </div>



                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
