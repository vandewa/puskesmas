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
                    <h3 class="card-title"> <button class="btn btn-primary" wire:click='simpan()'> Lamar Sekarang</button>  </h3>
                    <div class="card-tools">
                        <div class="input-group input-group-sm" style="width: 150px;">
                        <input type="text" name="table_search" class="float-right form-control" placeholder="Search">

                        <div class="input-group-append">
                            <button type="submit" class="btn btn-default">
                            <i class="fas fa-search"></i>
                            </button>
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
                            <th>Tanggal Pendaftaran</th>
                            <th>Status</th>
                            <th>Tahapan</th>
                            <th>Keterangan</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach ( $posts as $item)
                            <tr>
                                <td>{{ $item->no_reg }}</td>
                                <td>{{ $item->user->name??"-" }}</td>
                                <td>{{ $item->created_at }}</td>
                                <td>
                                    @if($item->status == 'Dibatalkan')
                                    <span class="badge rounded-pill bg-danger text-dark">  {{ $item->status }}</span>
                                    @else
                                    <span class="badge rounded-pill bg-info text-dark">  {{ $item->status }}</span>
                                    @endif

                                </td>
                                <td>{{ $item->tahapan->name??"-" }}</td>
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
