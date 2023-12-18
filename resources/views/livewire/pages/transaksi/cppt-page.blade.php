<div>
    <x-slot name="header">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Rekam Medis</h1>
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
                                                    <div class="card-header p-0 pt-1">
                                                        <ul class="nav nav-tabs" id="custom-tabs-two-transaksi-tab"
                                                            role="tablist">
                                                            <li class="nav-item">
                                                                <a class="nav-link active"
                                                                    id="custom-tabs-six-riwayat-rm-tab"
                                                                    data-toggle="pill"
                                                                    href="#custom-tabs-six-riwayat-rm" role="tab"
                                                                    aria-controls="custom-tabs-six-riwayat-rm"
                                                                    aria-selected="true">Riwayat Kunjungan</a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a class="nav-link"
                                                                    id="custom-tabs-two-data-rekam-medis-tab"
                                                                    data-toggle="pill"
                                                                    href="#custom-tabs-two-data-rekam-medis"
                                                                    role="tab"
                                                                    aria-controls="custom-tabs-two-data-rekam-medis"
                                                                    aria-selected="false">Data Rekam Medis</a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a class="nav-link"
                                                                    id="custom-tabs-two-riwayat-rekam-medis-tab"
                                                                    data-toggle="pill"
                                                                    href="#custom-tabs-two-riwayat-rekam-medis"
                                                                    role="tab"
                                                                    aria-controls="custom-tabs-two-riwayat-rekam-medis"
                                                                    aria-selected="false">Riwayat Rekam
                                                                    Medis</a>
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
                                                                        class="fas fa-plus-square mr-2"
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
                                                                <livewire:component.rekam-medis.riwayat-kunjungan
                                                                    :medicalcd="$medik->medical_cd" :pasiencd="$medik->pasien_cd">
                                                            </div>
                                                            <div class="tab-pane fade"
                                                                id="custom-tabs-two-data-rekam-medis" role="tabpanel"
                                                                aria-labelledby="custom-tabs-two-data-rekam-medis-tab">
                                                                <livewire:component.rekam-medis.table-rekam-medis
                                                                    :medicalcd="$medik->medical_cd">
                                                            </div>
                                                            <div class="tab-pane fade"
                                                                id="custom-tabs-two-riwayat-rekam-medis" role="tabpanel"
                                                                aria-labelledby="custom-tabs-two-riwayat-rekam-medis-tab">
                                                                <livewire:component.rekam-medis.riwayat-rekam-medis
                                                                    :medicalcd="$medik->medical_cd" :pasiencd="$medik->pasien_cd">
                                                            </div>

                                                            <div class="tab-pane fade"
                                                                id="custom-tabs-two-tambah-rekam-medis" role="tabpanel"
                                                                aria-labelledby="custom-tabs-two-tambah-rekam-medis-tab">
                                                                <div>
                                                                    <form action="">
                                                                        <div class="row">
                                                                            <div class="col-md-6">
                                                                                <div class="row mb-3">

                                                                                        <div class="col-md-3">Dokter</div>
                                                                                        <div class="col-md-9">
                                                                                            <select name="" class="form-control" id=""></select>
                                                                                        </div>


                                                                                        <div class="col-md-3">Paramedis</div>
                                                                                        <div class="col-md-9">
                                                                                            <select name="" class="form-control" id=""></select>
                                                                                        </div>

                                                                                </div>
                                                                                <div class="row mb-3">
                                                                                    <div class="col-md-3">Subject</div>
                                                                                    <div class="col-md-9">
                                                                                        <textarea name="" class="form-control" id="" rows="4"></textarea>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row mb-3">
                                                                                    <div class="col-md-3">Objective</div>
                                                                                    <div class="col-md-9">
                                                                                        <textarea name="" class="form-control" id="" rows="4"></textarea>
                                                                                    </div>
                                                                                </div>

                                                                            </div>


                                                                            <div class="col-md-6">
                                                                                <div class="row mb-3">
                                                                                    <div class="col-md-3">Assesment</div>
                                                                                    <div class="col-md-9">
                                                                                        <textarea name="" class="form-control" id="" rows="4"></textarea>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row mb-3">
                                                                                    <div class="col-md-3">Plan</div>
                                                                                    <div class="col-md-9">
                                                                                        <textarea name="" class="form-control" id="" rows="4"></textarea>
                                                                                    </div>
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
