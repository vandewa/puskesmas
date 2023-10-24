<div>
    <x-slot name="header">
        <div class="row mb-2">
            <div class="col-sm-6">
                @if (Request::segment('4') == 'transaksi.rawat-inap.rekam-medis')
                    <h1 class="m-0">Rekam Medis</h1>
                @elseif (Request::segment('4') == 'transaksi.rawat-inap.tindakan-medis')
                    <h1 class="m-0">Tindakan Medis</h1>
                @elseif (Request::segment('4') == 'transaksi.rawat-inap.resep-obat')
                    <h1 class="m-0">Resep Obat</h1>
                @else
                    <h1 class="m-0">Transaksi Rawat Inap</h1>
                @endif
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Transaksi</a></li>
                    @if (Request::segment('4') == 'transaksi.rawat-inap.rekam-medis')
                        <li class="breadcrumb-item active">Rekam Medis</li>
                    @elseif (Request::segment('4') == 'transaksi.rawat-inap.tindakan-medis')
                        <li class="breadcrumb-item active">Tindakan Medis</li>
                    @elseif (Request::segment('4') == 'transaksi.rawat-inap.resep-obat')
                        <li class="breadcrumb-item active">Resep Obat</li>
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
                            <div class="row mt-3">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-3 col-form-label">No RM</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" wire:model.live='rm'
                                                placeholder="Ketik No RM">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="" class="col-sm-3 col-form-label">Kelas</label>
                                        <div class="col-md-9">
                                            <select name="" class="form-control select2bs4" id="select2"
                                                wire:model.live='kelas'>
                                                @foreach ($listKelas ?? [] as $item)
                                                    <option value="{{ $item['kelas_cd'] }}">{{ $item['kelas_nm'] }}
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
                                        <label for="" class="col-sm-3 col-form-label">Bangsal</label>
                                        <div class="col-md-9">
                                            <select name="" class="form-control select2bs4" id="select3"
                                                wire:model.live='bangsal'>
                                                @foreach ($listBangsal ?? [] as $item)
                                                    <option value="{{ $item['bangsal_cd'] }}">{{ $item['bangsal_nm'] }}
                                                    </option>
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
                            <livewire:component.table-pasien :rm="$rm" :kelas="$kelas" :tanggal="$tanggal"
                                :bangsal="$bangsal" :url="$url" tipePasien="MEDICAL_TP_02">
                        </div>

                    </div>
                    <!-- /.card -->
                </div>
            </div>

        </div>
    </section>

</div>
