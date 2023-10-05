<div>
    <x-slot name="header">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Data Pasien</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Data</a></li>
                    <li class="breadcrumb-item active">Pasien</li>
                </ol>
            </div>
        </div>
    </x-slot>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <div class="card card-success card-outline">
                        <div class="card-body">
                            <div class="row mt-3">
                                <div class="col-md-6">
                                    <div class="form-group row margin-bawah">
                                       <label for="" class="col-sm-3 col-form-label">No. RM</label>
                                        <div class="col-md-9">
                                            <div class="input-group ">
                                                <input type="text" class="form-control">
                                                <span class="input-group-append">
                                                  <button type="button" class="btn btn-info btn-flat">Cari!</button>
                                                </span>
                                              </div>
                                        </div>
                                    </div>
                                    <div class="form-group row margin-bawah">
                                       <label for="" class="col-sm-3 col-form-label">Nama</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" wire:model.live='searchPasien'>
                                        </div>
                                    </div>
                                    <div class="form-group row margin-bawah">
                                       <label for="" class="col-sm-3 col-form-label">Alamat</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" wire:model.live='searchAlamat'>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row margin-bawah">
                                        <label for="" class="col-sm-3 col-form-label">Tanggal Lahir</label>
                                         <div class="col-md-9">
                                             <input type="date" class="form-control" wire:model.live='searchTanggal'>
                                         </div>
                                     </div>
                                    <div class="form-group row margin-bawah">
                                        <label for="" class="col-sm-3 col-form-label">NIK</label>
                                         <div class="col-md-9">
                                             <input type="text" class="form-control">
                                         </div>
                                     </div>
                                     <div class="form-group row margin-bawah">
                                        <label for="" class="col-sm-3 col-form-label">No BPJS</label>
                                         <div class="col-md-9">
                                             <input type="text" class="form-control">
                                         </div>
                                     </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">

                                </div>
                                <div class="col-md-6">
                                    <div class="d-flex justify-content-end">
                                        <div>
                                            <button class="btn btn-info">Cetak</button>
                                            <button class="btn btn-primary">Rekam Medis</button>
                                            <a href="{{ route('pendaftaran', $selected) }}" wire:navigate class="btn btn-primary">Ubah Data Pasien</a>
                                            <button class="btn btn-danger">Hapus Data Pasien</button>
                                            <button class="btn btn-primary">Daftar Rawat Jalan</button>
                                            <button class="btn btn-primary">Daftar Rawat Inap</button>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- general form elements -->
                    <div class="card card-success card-outline">
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                    <th>Nama Poli</th>
                                    <th>Waktu</th>
                                    <th>Nama Dokter</th>
                                    <th>Action</th>
                                </thead>
                                <tbody>
                                    @foreach ($posts as $item)
                                    <tr>
                                        <td>{{ $item->poli->medunit_nm }}</td>
                                        <td>{{ $item->time_start }} - {{ $item->time_end }}</td>
                                        <td>{{ $item->dokter->dr_nm }}</td>
                                        <td></td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                    </div>
                    <!-- /.card -->
                </div>
            </div>

        </div>
    </section>

</div>
