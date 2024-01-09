<div>
    <x-slot name="header">
        <div class="mb-2 row">
            <div class="col-sm-6">
                <h1 class="m-0">Proses Pembayaran</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item">Keuangan</li>
                    <li class="breadcrumb-item">Proses Pembayaran</li>
                    @if (Request::segment(3) == 'rawat-jalan')
                        <li class="breadcrumb-item active">Rawat Jalan</li>
                    @else
                        <li class="breadcrumb-item active">Rawat Inap</li>
                    @endif
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
                            <div class="mt-3 row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-3 col-form-label">No RM</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" wire:model.live='rm'
                                                placeholder="Ketik No RM">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-3 col-form-label">Tanggal</label>
                                        <div class="col-md-9">
                                            <input type="date" class="form-control" wire:model.live='tanggal'>
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
                                    <th>No Kwitansi</th>
                                    <th>Tanggal</th>
                                    <th>Pasien</th>
                                    <th>No RM</th>
                                    <th>Action</th>
                                </thead>
                                <tbody>

                                </tbody>
                                @foreach ($data as $item)
                                    <tr>
                                        <td>{{$item->invoice_no  }}</td>
                                        <td>{{$item->invoice_date }}</td>
                                        <td>{{ $item->pasien->pasien_nm??"" }}</td>
                                        <td>{{ $item->pasien->no_rm??"" }}</td>
                                        <td><a href="{{ route('helper.cetak-invoice', $item->settlement_no) }}" target="_blank" class="btn btn-primary">Cetak</a></td>
                                    </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
                    <!-- /.card -->
                </div>
            </div>

        </div>
    </section>

</div>
