<div>
    <x-slot name="header">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Cetak</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Cetak</a></li>
                    <li class="breadcrumb-item active">KIR</li>
                </ol>
            </div>
        </div>
    </x-slot>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="card card-success card-outline">
                        <form class="form-horizontal mt-2" wire:submit='save'>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-2 row">
                                            <label for="inputEmail3" class="col-sm-3 col-form-label">Nomor</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" wire:model='form.nomor'
                                                    placeholder="……./KIR.01/……/……">
                                                @error('form.nomor')
                                                    <span class="form-text text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="mb-2 row">
                                            <label for="inputEmail3" class="col-sm-3 col-form-label">Nama</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" wire:model='form.pasien_nm'>
                                                @error('form.pasien_nm')
                                                    <span class="form-text text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label for="" class="col-sm-3 col-form-label">Umur</label>
                                            <div class="col-md-9">
                                                <div class="mb-3 input-group">
                                                    <input type="text" class="form-control" wire:model='form.age'>
                                                    <div class="input-group-append">
                                                        <span class="input-group-text">Tahun</span>
                                                    </div>
                                                </div>
                                                @error('form.age')
                                                    <span class="form-text text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="mb-2 row">
                                            <label for="inputEmail3" class="col-sm-3 col-form-label">Alamat</label>
                                            <div class="col-sm-9">
                                                <textarea wire:model='form.address' class="form-control" rows="3"></textarea>
                                                @error('form.address')
                                                    <span class="form-text text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="mb-2 row">
                                            <label for="inputEmail3" class="col-sm-3 col-form-label">Tgl
                                                Pemeriksaan</label>
                                            <div class="col-sm-9">
                                                <input type="date" class="form-control" wire:model='form.tanggal'
                                                    placeholder="Hasil Pemeriksaan">
                                                @error('form.tanggal')
                                                    <span class="form-text text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="mb-2 row">
                                            <label for="inputEmail3" class="col-sm-3 col-form-label">Hasil
                                                Pemeriksaan</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" wire:model='form.hasil'
                                                    placeholder="Hasil Pemeriksaan">
                                                @error('form.hasil')
                                                    <span class="form-text text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>


                                    </div>
                                    <div class="col-md-6">

                                        <div class="mb-2 row">
                                            <label for="inputEmail3" class="col-sm-3 col-form-label">Keterangan</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" wire:model='form.keterangan'
                                                    placeholder="Keterangan">
                                                @error('form.keterangan')
                                                    <span class="form-text text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label for="" class="col-sm-3 col-form-label">Tensi</label>
                                            <div class="col-md-9">
                                                <div class="mb-3 input-group">
                                                    <input type="text" class="form-control" wire:model='form.tensi'>
                                                    <div class="input-group-append">
                                                        <span class="input-group-text">mmHg</span>
                                                    </div>
                                                </div>
                                                @error('form.tensi')
                                                    <span class="form-text text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label for="" class="col-sm-3 col-form-label">Berat Badan</label>
                                            <div class="col-md-9">
                                                <div class="mb-3 input-group">
                                                    <input type="number" class="form-control"
                                                        wire:model='form.weight'>
                                                    <div class="input-group-append">
                                                        <span class="input-group-text">Kg</span>
                                                    </div>
                                                </div>
                                                @error('form.weight')
                                                    <span class="form-text text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label for="" class="col-sm-3 col-form-label">Tinggi Badan</label>
                                            <div class="col-md-9">
                                                <div class="mb-3 input-group">
                                                    <input type="number" class="form-control"
                                                        wire:model='form.height'>
                                                    <div class="input-group-append">
                                                        <span class="input-group-text">Cm</span>
                                                    </div>
                                                </div>
                                                @error('form.height')
                                                    <span class="form-text text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="mb-2 row">
                                            <label for="inputEmail3" class="col-sm-3 col-form-label">Golongan
                                                Darah</label>
                                            <div class="col-sm-9">
                                                <select class="form-control" wire:model.defer='form.blood_tp'
                                                    wire:key="select.dokter">
                                                    <option value="">Pilih Golongan Darah</option>
                                                    @foreach ($listDarah ?? [] as $item)
                                                        <option value="{{ $item['com_cd'] }}">
                                                            {{ $item['code_nm'] }}</option>
                                                    @endforeach
                                                </select>
                                                @error('form.blood_tp')
                                                    <span class="form-text text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="mb-2 row">
                                            <label for="inputEmail3" class="col-sm-3 col-form-label">Dokter
                                                Pemeriksa</label>
                                            <div class="col-sm-9">
                                                <select class="form-control" wire:model.defer='form.dokter'
                                                    wire:key="select.dokter">
                                                    <option value="">Pilih Dokter</option>
                                                    @foreach ($listDokter ?? [] as $item)
                                                        <option value="{{ $item['dr_nm'] }}">
                                                            {{ $item['dr_nm'] }}</option>
                                                    @endforeach
                                                </select>
                                                @error('form.dokter')
                                                    <span class="form-text text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-info">Cetak</button>
                            </div>
                            <!-- /.card-footer -->
                        </form>
                        <!-- /.card-header -->
                        <!-- form start -->
                    </div>

                </div>
            </div>

        </div>
    </section>
</div>
