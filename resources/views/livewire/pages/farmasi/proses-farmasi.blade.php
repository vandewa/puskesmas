<div>
    <x-slot name="header">
        <div class="row mb-2">
            <div class="col-sm-6">

                    <h1 class="m-0">Transaksi Farmasi</h1>

            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Farmasi</a></li>

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
                            <livewire:component.detail-pasien :medicalcd="Request::segment(3)">
                        </div>
                    </div>
                    <!-- general form elements -->
                    <div class="card card-success card-outline">
                        <div class="card-body">
                            <table class="table">
                                <thead>

                                    <th>Data</th>
                                    <th>Jumlah</th>
                                    <th>Info</th>
                                    <th>Action</th>
                                </thead>
                                <tbody>
                                    @php
                                        $no;
                                    @endphp
                                    @foreach ( $resep as $item)
                                        <tr>
                                            <td colspan="5" class="bg-secondary" style="text-align: center">No Resep: {{ $item->resep_no }}</td>
                                        </tr>
                                        @foreach ($item->resepData as $a)

                                        <tr>
                                            <td>{!! $a->data_nm !!}</td>
                                            <td>{{ $a->quantity }}</td>
                                            <td>{{ $a->info_01 }}</td>
                                            <td><div class="btn-group">
                                                <button type="button" class="btn btn-default">Action</button>
                                                <button type="button" class="btn btn-default dropdown-toggle dropdown-icon" data-toggle="dropdown" aria-expanded="false">
                                                  <span class="sr-only">Toggle Dropdown</span>
                                                </button>
                                                <div class="dropdown-menu" role="menu" style="">
                                                  <a class="dropdown-item" target="_blank" href="{{ route('helper.cetak-label-obat', $item->medical_resep_seqno) }}">Cetak Label</a>
                                                  <a class="dropdown-item" href="#">Another action</a>
                                                  <a class="dropdown-item" href="#">Something else here</a>
                                                  <div class="dropdown-divider"></div>
                                                  <a class="dropdown-item" href="#">Separated link</a>
                                                </div>
                                              </div></td>
                                        </tr>

                                        @endforeach
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
