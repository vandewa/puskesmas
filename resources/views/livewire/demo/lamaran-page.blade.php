<div>
    <x-slot name="header">
        <div class="mb-2 row">
            <div class="col-sm-6">
                <h1 class="m-0">Lamar Pekerjaan</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Lamar</a></li>
                    <li class="breadcrumb-item active">Lamar</li>
                </ol>
            </div>
        </div>
    </x-slot>
    <section class="content">
        <div class="container-fluid">
        <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            {{-- @role('user')
                                <h3 class="card-title"> <button class="btn btn-primary" wire:click='simpan()'> Lamar
                                        Sekarang</button> </h3>
                            @endrole --}}
                            <div class="card-tools">
                                <div class="input-group input-group-sm" style="width: 150px;">
                                    <input type="text" name="table_search" class="float-right form-control" wire:model.live='cari'
                                        placeholder="Search">

                                    <div class="input-group-append">
                                        <button type="submit" class="btn btn-default">
                                            <i class="fas fa-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12">


                        <div class="row">
                            @foreach ($layanan??[] as $a )
                            <div class="col-lg-4 col-6" wire:click="simpan('Program Ginoujissusei')">
                                <div class="small-box bg-info">
                                    <div class="inner">
                                        <h4>{{ $a->name }}</h4>
                                        <p>{{ $a->description }}</p>
                                    </div>
                                    <div class="icon">
                                        <i class="ion ion-bag"></i>
                                    </div>
                                    <a href="#" class="small-box-footer">Daftar Sekarang <i class="fas fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                            @endforeach

                            <div class="col-lg-4 col-6" wire:click="simpan('Program Tokuteiginou')">
                                <div class="small-box bg-success">
                                    <div class="inner">
                                        <h4>Program Tokuteiginou</h4>
                                        <p>Visa Kerja</p>
                                    </div>
                                    <div class="icon">
                                        <i class="ion ion-stats-bars"></i>
                                    </div>
                                    <a href="#" class="small-box-footer">Daftar Sekarang <i class="fas fa-arrow-circle-right"></i></a>
                                </div>
                            </div>

                            <div class="col-lg-4 col-6" wire:click="simpan('Nihonggo Gakko')">
                                <div class="small-box bg-warning">
                                    <div class="inner">
                                        <h5>Nihonggo Gakko</h5>
                                        <p>Sekolah Bahasa Jepang Di Negara Jepang</p>
                                    </div>
                                    <div class="icon">
                                        <i class="ion ion-person-add"></i>
                                    </div>
                                    <a href="#" class="small-box-footer">Daftar Sekarang <i class="fas fa-arrow-circle-right"></i></a>
                                </div>
                            </div>


                            </div>
                        </div>
                                                <!-- /.card-header -->

                            <div class="p-0 card-body table-responsive">
                            <table class="table table-hover text-nowrap">
                                <thead>
                                    <tr>
                                        <th>No Pendaftaran</th>
                                        <th>Nama Pendaftar</th>
                                        <th>Jenis Lamaran</th>
                                        <th>Tanggal Pendaftaran</th>
                                        <th>Status</th>
                                        <th>Tahapan</th>
                                        <th>Keterangan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($posts as $item)
                                        <tr>
                                            <td>{{ $item->no_reg }}</td>
                                            <td>{{ $item->user->name ?? '-' }}</td>
                                            <td>{{ $item->lamaran_tp ?? '-' }}</td>
                                            <td>{{ $item->created_at }}</td>
                                            <td>
                                                @if ($item->status == 'Dibatalkan')
                                                    <span class="badge rounded-pill bg-danger text-dark">
                                                        {{ $item->status }}</span>
                                                @else
                                                    <span class="badge rounded-pill bg-info text-dark">
                                                        {{ $item->status }}</span>
                                                @endif

                                            </td>
                                            <td>{{ $item->tahapan->name ?? '-' }}</td>
                                            <td>{{ $item->keterangan }}</td>
                                        </tr>
                                    @endforeach


                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </section>
</div>
