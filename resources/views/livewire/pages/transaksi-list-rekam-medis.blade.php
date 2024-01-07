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
                    <li class="breadcrumb-item active">Rekam Medis</li>
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
                                    <div class="form-group row">
                                        <label for="" class="col-sm-3 col-form-label">Jenis Rawat</label>
                                        <div class="col-md-9">
                                            <select name="" class="form-control select2bs4" id="select2"
                                                wire:model.live='jenisRawats'>
                                                <option value="">Piilih Jenis Rawat</option>
                                                @foreach ($listJenisRawat ?? [] as $item)
                                                    <option value="{{ $item['com_cd'] }}">{{ $item['code_nm'] }}
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
                                                <option value="">Pilih Bangsal</option>
                                                @foreach ($listBangsal ?? [] as $item)
                                                    <option value="{{ $item['bangsal_cd'] }}">{{ $item['bangsal_nm'] }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="" class="col-sm-3 col-form-label">Poliklinik</label>
                                        <div class="col-md-9">
                                            <select name="" class="form-control select2bs4" id="select3"
                                                wire:model.live='poli'>
                                                <option value="">Pilih Poliklinik</option>
                                                @foreach ($listPoli ?? [] as $item)
                                                    <option value="{{ $item['medunit_cd'] }}">{{ $item['medunit_nm'] }}
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
                            <livewire:component.table-pasien-rm :rm="$rm" :kelas="$kelas" :tanggal="$tanggal"
                                :bangsal="$bangsal" :url="$url" :tipePasien="$jenisRawat" :poliklinik="$poli">
                        </div>

                    </div>
                    <!-- /.card -->
                </div>
            </div>

        </div>
    </section>

</div>
