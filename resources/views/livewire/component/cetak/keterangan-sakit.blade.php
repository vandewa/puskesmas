<div>
    <x-slot name="header">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Cetak Surat Keterangan Sakit</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Cetak</a></li>
                    <li class="breadcrumb-item active">Surat Keterangan Sakit</li>
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
                                                    placeholder="……">
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
                                            <label for="inputEmail3" class="col-sm-3 col-form-label">Pekerjaan</label>
                                            <div class="col-sm-9">
                                                <select class="form-control" wire:model.defer='form.occupation_cd'
                                                    wire:key="select.occupation_cd">
                                                    <option value="">Pilih Pekerjaan</option>
                                                    @foreach ($listPekerjaan ?? [] as $item)
                                                        <option value="{{ $item['code_nm'] }}">
                                                            {{ $item['code_nm'] }}</option>
                                                    @endforeach
                                                </select>
                                                @error('form.occupation_cd')
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
                                    </div>
                                    <div class="col-md-6">

                                        <div class="row">
                                            <label for="" class="col-sm-3 col-form-label">Istirahat
                                                Selama</label>
                                            <div class="col-md-9">
                                                <div class="mb-3 input-group">
                                                    <input type="number" class="form-control" wire:model='form.hari'>
                                                    <div class="input-group-append">
                                                        <span class="input-group-text">Hari</span>
                                                    </div>
                                                </div>
                                                @error('form.hari')
                                                    <span class="form-text text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="mb-2 row">
                                            <label for="inputEmail3" class="col-sm-3 col-form-label">Dari
                                                Tanggal</label>
                                            <div class="col-sm-9">
                                                <input type="date" class="form-control" wire:model='form.tgl_mulai'>
                                                @error('form.tgl_mulai')
                                                    <span class="form-text text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="mb-2 row">
                                            <label for="inputEmail3" class="col-sm-3 col-form-label">Sampai
                                                Tanggal</label>
                                            <div class="col-sm-9">
                                                <input type="date" class="form-control"
                                                    wire:model='form.tgl_selesai'>
                                                @error('form.tgl_selesai')
                                                    <span class="form-text text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="mb-2 row">
                                            <label for="inputEmail3" class="col-sm-3 col-form-label">Tanggal
                                                Terbit</label>
                                            <div class="col-sm-9">
                                                <input type="date" class="form-control" wire:model='form.tgl_terbit'>
                                                @error('form.tgl_terbit')
                                                    <span class="form-text text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="mb-2 row">
                                            <label for="inputEmail3" class="col-sm-3 col-form-label">Dokter
                                            </label>
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
