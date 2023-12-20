<div>
    <x-slot name="header">
        <div class="row mb-2">
            <div class="col-sm-6">
                @if (Request::segment('4') == 'transaksi.rawat-jalan.rekam-medis')
                    <h1 class="m-0">Rekam Medis</h1>
                @elseif (Request::segment('4') == 'transaksi.rawat-jalan.tindakan-medis')
                    <h1 class="m-0">Tindakan Medis</h1>
                @elseif (Request::segment('4') == 'transaksi.rawat-jalan.resep-obat')
                    <h1 class="m-0">Resep Obat</h1>
                @else
                    <h1 class="m-0">Transaksi Farmasi</h1>
                @endif
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
                            <div class="row mt-3">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-3 col-form-label">No RM</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" wire:model.live='norm'
                                                placeholder="Ketik No RM">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="" class="col-sm-3 col-form-label">Jenis Rawat</label>
                                        <div class="col-md-9">
                                            <select name="" class="form-control" wire:model.live='rawat'>
                                                <option value="">Pilih Jenis Rawat</option>
                                                @foreach ($jenisRawat as $item)
                                                    <option value="{{ $item->com_cd}}">{{ $item->code_nm}}
                                                    </option>
                                                @endforeach
                                            </select>
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
                                    <div class="form-group row">
                                        <label for="" class="col-sm-3 col-form-label">Dokter</label>
                                        <div class="col-md-9">
                                            <select name="" class="form-control select2bs4" id="select3"
                                                wire:model.live='dokter'>
                                                <option value="">Pilih Dokter</option>
                                                @foreach ($listDokter ?? [] as $item)
                                                    <option value="{{ $item['dr_cd'] }}">{{ $item['dr_nm'] }}</option>
                                                @endforeach
                                            </select>
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
                                    <th>Poli / Kamar</th>
                                    <th>Dokter</th>
                                    <th>No Rm</th>
                                    <th>Nama Pasien</th>
                                    <th>Tgl Lahir</th>
                                    <th>No Antrian</th>
                                    <th>Action</th>
                                </thead>
                                <tbody>
                                    @foreach ( $posts as $item )
                                    <tr>
                                        <td>
                                            {{ $item->poli->medunit_nm??$item->ruang->ruang_nm }}
                                        </td>
                                        <td>{{ $item->dokter->dr_nm??"-" }}</td>
                                        <td>{{ $item->pasien->no_rm??"-" }}</td>
                                        <td>{{ $item->pasien->pasien_nm??"-" }}</td>
                                        <td>{{ $item->pasien->birth_date??"-" }}</td>
                                        <td>{{ $item->queue_no??"-"}}</td>
                                        <td>
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-info btn-sm btn-flat"><i class="fas fa-cog"></i></button>
                                                <button type="button" class="btn btn-info btn-sm btn-flat dropdown-toggle" data-toggle="dropdown">
                                                    <span class="caret"></span>
                                                    <span class="sr-only">Toggle Dropdown</span>
                                                </button>
                                                <ul class="dropdown-menu" role="menu">

                                                    <li><button id="print-label" class="dropdown-item" >Ambil Obat</button></li>
                                                </ul>
                                            </div>

                                            <a href="http://localhost:8000/transaksi/rawat-jalan/data-transaksi/2300000003" class="btn btn-success btn-flat btn-sm" data-toggle="tooltip" data-placement="left" title="Panggil Antrian"><i class="fas fa-volume-up"></i>
                                            </a>

                                            <a href="{{ route('farmasi.proses', $item->medical_cd) }}" class="btn btn-success btn-flat btn-sm" data-toggle="tooltip" data-placement="left" title="Proses"><i class="fas fa-user-md"></i>
                                            </a>
                                        </td>

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
