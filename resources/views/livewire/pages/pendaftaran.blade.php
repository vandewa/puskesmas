<div>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="card card-success card-outline">
                        <form class="form-horizontal mt-2">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group row margin-bawah">
                                            <label for="inputEmail3" class="col-sm-3 col-form-label empatbelas">No.
                                                RM</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" wire:model.lazy="no_rm">
                                                @error('no_rm')
                                                    <span class="form-text text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row margin-bawah">
                                            <label for="inputPassword3" class="col-sm-3 col-form-label empatbelas">Nama
                                                Pasien</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" wire:model.lazy="pasien_cd">
                                                @error('pasien_cd')
                                                    <span class="form-text text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row margin-bawah">
                                            <label for="inputPassword3"
                                                class="col-sm-3 col-form-label empatbelas">Tanggal Lahir</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control"
                                                    wire:model.lazy="tanggal_lahir">
                                                @error('tanggal_lahir')
                                                    <span class="form-text text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row margin-bawah">
                                            <label for="inputPassword3"
                                                class="col-sm-3 col-form-label empatbelas">Umur</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" wire:model.lazy="umur">
                                                @error('umur')
                                                    <span class="form-text text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row margin-bawah">
                                            <label for="inputPassword3" class="col-sm-3 col-form-label empatbelas">Jenis
                                                Kelamin</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control"
                                                    wire:model.lazy="jenis_kelamin">
                                                @error('jenis_kelamin')
                                                    <span class="form-text text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row margin-bawah">
                                            <label for="inputPassword3"
                                                class="col-sm-3 col-form-label empatbelas">Alamat</label>
                                            <div class="col-sm-9">
                                                <textarea class="form-control" rows="2" wire.model="alamat" id="alamat"></textarea>
                                                @error('alamat')
                                                    <span class="form-text text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row margin-bawah">
                                            <label for="inputPassword3" class="col-sm-3 col-form-label empatbelas">Cari
                                                Kelurahan</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control"
                                                    wire:model.lazy="cari_kelurahan">
                                                @error('cari_kelurahan')
                                                    <span class="form-text text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row margin-bawah">
                                            <label for="inputPassword3"
                                                class="col-sm-3 col-form-label empatbelas">Provinsi</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" wire:model.lazy="propinsi">
                                                @error('propinsi')
                                                    <span class="form-text text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row margin-bawah">
                                            <label for="inputPassword3"
                                                class="col-sm-3 col-form-label empatbelas">Kabupaten</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" wire:model.lazy="kabupaten">
                                                @error('kabupaten')
                                                    <span class="form-text text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row margin-bawah">
                                            <label for="inputPassword3"
                                                class="col-sm-3 col-form-label empatbelas">Kecamatan</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" wire:model.lazy="kecamatan">
                                                @error('kecamatan')
                                                    <span class="form-text text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row margin-bawah">
                                            <label for="inputPassword3"
                                                class="col-sm-3 col-form-label empatbelas">Kelurahan</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" wire:model.lazy="kelurahan">
                                                @error('kelurahan')
                                                    <span class="form-text text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row margin-bawah">
                                            <label for="inputPassword3"
                                                class="col-sm-3 col-form-label empatbelas">Telepon</label>
                                            <div class="col-sm-9">
                                                <input type="number" class="form-control" wire:model.lazy="telepon">
                                                @error('telepon')
                                                    <span class="form-text text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row margin-bawah">
                                            <label for="inputPassword3"
                                                class="col-sm-3 col-form-label empatbelas">HP</label>
                                            <div class="col-sm-9">
                                                <input type="number" class="form-control" wire:model.lazy="hp">
                                                @error('hp')
                                                    <span class="form-text text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group row margin-bawah">
                                            <label for="inputEmail3" class="col-sm-3 col-form-label empatbelas">Tipe
                                                Pasien</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control"
                                                    wire:model.lazy="tipe_pasien">
                                                @error('tipe_pasien')
                                                    <span class="form-text text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row margin-bawah">
                                            <label for="inputPassword3"
                                                class="col-sm-3 col-form-label empatbelas">Status</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" wire:model.lazy="status">
                                                @error('status')
                                                    <span class="form-text text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row margin-bawah">
                                            <label for="inputPassword3"
                                                class="col-sm-3 col-form-label empatbelas">Pendidikan</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control"
                                                    wire:model.lazy="pendidikan">
                                                @error('pendidikan')
                                                    <span class="form-text text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row margin-bawah">
                                            <label for="inputPassword3"
                                                class="col-sm-3 col-form-label empatbelas">Pekerjaan</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control"
                                                    wire:model.lazy="pekerjaan">
                                                @error('pekerjaan')
                                                    <span class="form-text text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row margin-bawah">
                                            <label for="inputPassword3"
                                                class="col-sm-3 col-form-label empatbelas">Suku</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" wire:model.lazy="suku">
                                                @error('suku')
                                                    <span class="form-text text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row margin-bawah">
                                            <label for="inputPassword3"
                                                class="col-sm-3 col-form-label empatbelas">Agama</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" wire:model.lazy="agama">
                                                @error('agama')
                                                    <span class="form-text text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row margin-bawah">
                                            <label for="inputPassword3"
                                                class="col-sm-3 col-form-label empatbelas">Identitas</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control"
                                                    wire:model.lazy="identitas">
                                                @error('identitas')
                                                    <span class="form-text text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row margin-bawah">
                                            <label for="inputPassword3" class="col-sm-3 col-form-label empatbelas">No.
                                                Identitas</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control"
                                                    wire:model.lazy="no_identitas">
                                                @error('no_identitas')
                                                    <span class="form-text text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row margin-bawah">
                                            <label for="inputPassword3"
                                                class="col-sm-3 col-form-label empatbelas">Warga Negara</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" wire:model.lazy="nation">
                                                @error('nation')
                                                    <span class="form-text text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group row margin-bawah">
                                            <label for="inputEmail3" class="col-sm-3 col-form-label empatbelas">Gol.
                                                Darah</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control"
                                                    wire:model.lazy="gol_darah">
                                                @error('gol_darah')
                                                    <span class="form-text text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row margin-bawah">
                                            <label for="inputEmail3"
                                                class="col-sm-3 col-form-label empatbelas">Berat</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" wire:model.lazy="berat">
                                                @error('berat')
                                                    <span class="form-text text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row margin-bawah">
                                            <label for="inputEmail3"
                                                class="col-sm-3 col-form-label empatbelas">Tinggi</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" wire:model.lazy="tinggi">
                                                @error('tinggi')
                                                    <span class="form-text text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row margin-bawah">
                                            <label for="inputEmail3"
                                                class="col-sm-3 col-form-label empatbelas">Email</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" wire:model.lazy="email">
                                                @error('email')
                                                    <span class="form-text text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row margin-bawah">
                                            <label for="inputEmail3" class="col-sm-3 col-form-label empatbelas">Kode
                                                Pos</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control"
                                                    wire:model.lazy="kode_pos">
                                                @error('kode_pos')
                                                    <span class="form-text text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row margin-bawah">
                                            <label for="inputEmail3" class="col-sm-3 col-form-label empatbelas">Nama
                                                Ayah</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control"
                                                    wire:model.lazy="nama_ayah">
                                                @error('nama_ayah')
                                                    <span class="form-text text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row margin-bawah">
                                            <label for="inputEmail3" class="col-sm-3 col-form-label empatbelas">Nama
                                                Ibu</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control"
                                                    wire:model.lazy="nama_ibu">
                                                @error('nama_ibu')
                                                    <span class="form-text text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row margin-bawah">
                                            <label for="inputEmail3"
                                                class="col-sm-3 col-form-label empatbelas">Nama</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control"
                                                    wire:model.lazy="nama_keluarga">
                                                @error('nama_keluarga')
                                                    <span class="form-text text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row margin-bawah">
                                            <label for="inputEmail3"
                                                class="col-sm-3 col-form-label empatbelas">Hubungan</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control"
                                                    wire:model.lazy="hubungan">
                                                @error('hubungan')
                                                    <span class="form-text text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row margin-bawah">
                                            <label for="inputPassword3"
                                                class="col-sm-3 col-form-label empatbelas">Alamat</label>
                                            <div class="col-sm-9">
                                                <textarea class="form-control" rows="2" wire.model="alamat_keluarga" id="alamat_keluarga"></textarea>
                                                @error('alamat_keluarga')
                                                    <span class="form-text text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row margin-bawah">
                                            <label for="inputPassword3"
                                                class="col-sm-3 col-form-label empatbelas">Telepon</label>
                                            <div class="col-sm-9">
                                                <input type="number" class="form-control"
                                                    wire:model.lazy="telepon_keluarga">
                                                @error('telepon_keluarga')
                                                    <span class="form-text text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row margin-bawah">
                                            <label for="inputPassword3"
                                                class="col-sm-3 col-form-label empatbelas">Tanggal Lahir</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control"
                                                    wire:model.lazy="tanggal_lahir_keluarga">
                                                @error('tanggal_lahir_keluarga')
                                                    <span class="form-text text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                    </div>

                                </div>

                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-info">Simpan</button>
                                <button type="submit" class="btn btn-default float-right">Batalkan</button>
                            </div>
                            <!-- /.card-footer -->
                        </form>
                        <!-- /.card-header -->
                        <!-- form start -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>

        </div>
    </section>

</div>

@push('css')
    <style>
        .margin-bawah {
            margin-bottom: 0.5rem;
        }

        .empatbelas {
            font-size: 14px;
        }
    </style>
@endpush
