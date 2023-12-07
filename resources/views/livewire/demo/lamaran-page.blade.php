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
            <section style="background-color: #eee;">
                <div class="container py-5">
                  <div class="row">
                    @foreach ($lamaran??[] as $a )
                    <div class="col-md-12 col-lg-4 mb-4 mb-lg-0">
                        <div class="card text-black">
                          <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-product-cards/img1.webp"
                            class="card-img-top" alt="iPhone" />
                          <div class="card-body">
                            <div class="text-center mt-1">
                              <h4 class="card-title">iPhone X</h4>
                              <h6 class="text-primary mb-1 pb-3">Starting at $399</h6>
                            </div>

                            <div class="text-center">
                              <div class="p-3 mx-n3 mb-4" style="background-color: #eff1f2;">
                                <h5 class="mb-0">Quick Look</h5>
                              </div>

                              <div class="d-flex flex-column mb-4">
                                <span class="h1 mb-0">5.8″</span>
                                <span>Super Retina HD display1</span>
                              </div>

                              <div class="d-flex flex-column mb-4">
                                <span class="h1 mb-0">
                                  <i class="fas fa-camera-retro"></i>
                                </span>
                                <ul class="list-unstyled mb-0">
                                  <li aria-hidden="true">—</li>
                                  <li>Wide</li>
                                  <li>Telephoto</li>
                                  <li aria-hidden="true">—</li>
                                </ul>
                              </div>

                              <div class="d-flex flex-column mb-4">
                                <span class="h1 mb-0">2x</span>
                                <span>Optical zoom range</span>
                              </div>

                              <div class="p-3 mx-n3 mb-4" style="background-color: #eff1f2;">
                                <h5 class="mb-0">Capacity</h5>
                              </div>

                              <div class="d-flex flex-column mb-4 lead">
                                <span class="mb-2">64GB</span>
                                <span class="mb-2">256GB</span>
                                <span style="color: transparent;">0</span>
                              </div>
                            </div>

                            <div class="d-flex flex-row">
                              <button type="button" class="btn btn-primary flex-fill me-1" data-mdb-ripple-color="dark">
                                Learn more
                              </button>
                              <button type="button" class="btn btn-danger flex-fill ms-1">Buy now</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    @endforeach


                  </div>
                </div>
              </section>
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
                            <div class="col-lg-4 col-6" wire:click="simpan('Program Ginoujissusei')">
                                <div class="small-box bg-info">
                                    <div class="inner">
                                        <h4>Program Ginoujissusei</h4>
                                        <p>Pemagangan</p>
                                    </div>
                                    <div class="icon">
                                        <i class="ion ion-bag"></i>
                                    </div>
                                    <a href="#" class="small-box-footer">Daftar Sekarang <i class="fas fa-arrow-circle-right"></i></a>
                                </div>
                            </div>

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
