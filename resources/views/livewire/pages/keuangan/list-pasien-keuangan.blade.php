<div>
    <x-slot name="header">
        <div class="row mb-2">
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
                                        <label for="" class="col-sm-3 col-form-label">PoliKlinik</label>
                                        <div class="col-md-9">
                                            <select name="" class="form-control select2bs4" id="select2"
                                                wire:model.live='poliklinik'>
                                                @foreach ($poli ?? [] as $item)
                                                    <option value="{{ $item['medunit_cd'] }}">{{ $item['medunit_nm'] }}
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
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- general form elements -->
                    <div class="card card-success card-outline">
                        <div class="card-body">
                            @if($segment == 'rawat-jalan')
                            <livewire:component.table-pasien :rm="$rm" :poliklinik="$poliklinik" :tanggal="$tanggal"
                                :url="$url">
                                @else
                                <livewire:component.table-pasien-rawat-inap :rm="$rm" :poliklinik="$poliklinik" :tanggal="$tanggal"
                                :url="$url">
                            @endif
                        </div>

                    </div>
                    <!-- /.card -->
                </div>
            </div>

        </div>
    </section>

</div>
