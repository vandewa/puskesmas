<div>
    <x-slot name="header">
        <div class="mb-2 row">
            <div class="col-sm-6">
                <h1 class="m-0">CPPT</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Transaksi</a></li>
                    <li class="breadcrumb-item active">CPPT</li>
                </ol>
            </div>
        </div>
    </x-slot>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-dark card-tabs">
                        <livewire:component.link-transaksi :medicalcd="$medik->medical_cd" />
                        <div class="card-body">
                            <div class="tab-pane fade active show">
                                <div class="tab-pane active show fade" id="custom-tabs-one-rm" role="tabpanel"
                                    aria-labelledby="custom-tabs-one-rm-tab">
                                    <livewire:component.detail-pasien :medicalcd="$medicalcd">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="card card-success card-tabs">
                                                    <div class="p-0 pt-1 card-header">
                                                        <ul class="nav nav-tabs" id="custom-tabs-two-transaksi-tab"
                                                            role="tablist">
                                                            <li class="nav-item">
                                                                <a class="nav-link active"
                                                                    id="custom-tabs-six-riwayat-rm-tab"
                                                                    data-toggle="pill"
                                                                    href="#custom-tabs-six-riwayat-rm" role="tab"
                                                                    aria-controls="custom-tabs-six-riwayat-rm"
                                                                    aria-selected="true">Data CPPT</a>
                                                            </li>

                                                            <li class="nav-item">
                                                                <a class="nav-link"
                                                                    id="custom-tabs-two-riwayat-rekam-medis-tab"
                                                                    data-toggle="pill"
                                                                    href="#custom-tabs-two-riwayat-rekam-medis"
                                                                    role="tab"
                                                                    aria-controls="custom-tabs-two-riwayat-rekam-medis"
                                                                    aria-selected="false">Riwayat CPPT</a>
                                                            </li>

                                                            <li class="nav-item"
                                                                style="margin-left: auto; background:rgb(255, 255, 49);">
                                                                <a class="nav-link"
                                                                    id="custom-tabs-two-tambah-rekam-medis-tab"
                                                                    data-toggle="pill"
                                                                    href="#custom-tabs-two-tambah-rekam-medis"
                                                                    role="tab"
                                                                    aria-controls="custom-tabs-two-tambah-rekam-medis"
                                                                    aria-selected="false"><i
                                                                        class="mr-2 fas fa-plus-square"
                                                                        style="color:black"></i><span
                                                                        style="color:black">Tambah CPPT</span></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="tab-content" id="custom-tabs-six-tabContent">
                                                            <div class="tab-pane fade show active"
                                                                id="custom-tabs-six-riwayat-rm" role="tabpanel"
                                                                aria-labelledby="custom-tabs-six-riwayat-rm-tab">
                                                                <livewire:component.cppt.table-cppt
                                                                :medicalcd="$medik->medical_cd">
                                                            </div>

                                                            <div class="tab-pane fade"
                                                                id="custom-tabs-two-riwayat-rekam-medis" role="tabpanel"
                                                                aria-labelledby="custom-tabs-two-riwayat-rekam-medis-tab">
                                                                <livewire:component.cppt.table-riwayat-cppt
                                                                    :medicalcd="$medik->medical_cd" :pasiencd="$medik->pasien_cd">
                                                            </div>

                                                            <div class="tab-pane fade"
                                                                id="custom-tabs-two-tambah-rekam-medis" role="tabpanel"
                                                                aria-labelledby="custom-tabs-two-tambah-rekam-medis-tab">
                                                                <div>
                                                                    <form action="" wire:submit='save'>
                                                                        <div class="row">
                                                                            <div class="col-md-6">
                                                                                <div class="mb-3 row">
                                                                                    <div class="col-md-3">Dokter</div>
                                                                                    <div class="col-md-9">
                                                                                        <select name=""
                                                                                            class="form-control"
                                                                                            wire:model='form.dr_cd'
                                                                                            id="">
                                                                                            <option value="">Pilih Dokter</option>
                                                                                            @foreach ($dokter as $item)
                                                                                            <option value="{{ $item->dr_cd }}">{{ $item->dr_nm }}</option>
                                                                                            @endforeach
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="mb-3 row">
                                                                                    <div class=" col-md-3">Paramedis
                                                                                    </div>
                                                                                    <div class="col-md-9">
                                                                                        <select name=""
                                                                                        class="form-control"
                                                                                        wire:model='form.paramedis_cd'
                                                                                        id="">
                                                                                        <option value="">Pilih Paramedis</option>
                                                                                        @foreach ($paramedis as $item)
                                                                                        <option value="{{ $item->paramedis_cd }}">{{ $item->paramedis_nm }}</option>
                                                                                        @endforeach
                                                                                    </select>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="mb-3 row">
                                                                                    <div class=" col-md-3">Tanggal</div>
                                                                                    <div class="col-md-9">
                                                                                        <input type="date" class="form-control" wire:model='form.transaction_date'>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="mb-3 row">
                                                                                    <div class="col-md-3">Subject</div>
                                                                                    <div class="col-md-9">
                                                                                        <textarea name=""  wire:model='form.subject' class="form-control" id="" rows="4"></textarea>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="mb-3 row">
                                                                                    <div class="col-md-3">Objective
                                                                                    </div>
                                                                                    <div class="col-md-9">
                                                                                        <textarea name=""  wire:model='form.objective' class="form-control" id="" rows="4"></textarea>
                                                                                    </div>
                                                                                </div>

                                                                            </div>


                                                                            <div class="col-md-6">
                                                                                <div class="mb-3 row">
                                                                                    <div class="col-md-3">Assesment
                                                                                    </div>
                                                                                    <div class="col-md-9">
                                                                                        <textarea name="" wire:model='form.assesment' class="form-control" id="" rows="4"></textarea>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="mb-3 row">
                                                                                    <div class="col-md-3">Plan</div>
                                                                                    <div class="col-md-9">
                                                                                        <textarea name=""  wire:model='form.plan' class="form-control" id="" rows="4"></textarea>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="text-right col-md-12">
                                                                                    <button type="button" class="btn btn-warning">Batal</button>
                                                                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                    </form>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- /.card -->
                                            </div>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </section>
</div>
