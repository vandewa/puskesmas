<div>
    <x-slot name="header">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Kajian Awal</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Transaksi</a></li>
                    <li class="breadcrumb-item active">Kajian Awal</li>
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
                                <div class="tab-pane active show fade" id="custom-tabs-one-tindakan" role="tabpanel"
                                    aria-labelledby="custom-tabs-one-tindakan-tab">
                                    <livewire:component.detail-pasien :medicalcd="$medicalcd">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="card card-success card-tabs">
                                                    <div class="card-header p-0 pt-1">
                                                        <ul class="nav nav-tabs" id="custom-tabs-three-transaksi-tab"
                                                            role="tablist">
                                                            <li class="nav-item">
                                                                <a class="nav-link active"
                                                                    id="custom-tabs-three-permintaan-lab-tab"
                                                                    data-toggle="pill"
                                                                    href="#custom-tabs-three-permintaan-tindakan"
                                                                    role="tab"
                                                                    aria-controls="custom-tabs-three-permintaan-tindakan"
                                                                    aria-selected="true">Data Kesehatan Pasien</a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a class="nav-link"
                                                                    id="custom-tabs-three-proses-lab-tab"
                                                                    data-toggle="pill"
                                                                    href="#custom-tabs-three-tindakan-diproses"
                                                                    role="tab"
                                                                    aria-controls="custom-tabs-three-proses-lab"
                                                                    aria-selected="false">Riwayat Psikologis,
                                                                    Sosiologis,
                                                                    Spiritual</a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a class="nav-link"
                                                                    id="custom-tabs-three-riwayat-tindakan-tab"
                                                                    data-toggle="pill"
                                                                    href="#custom-tabs-three-riwayat-tindakan"
                                                                    role="tab"
                                                                    aria-controls="custom-tabs-three-riwayat-tindakan"
                                                                    aria-selected="false">Kesehatan Reproduksi</a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a class="nav-link"
                                                                    id="custom-tabs-three-pertumbuhan-tab"
                                                                    data-toggle="pill"
                                                                    href="#custom-tabs-three-pertumbuhan" role="tab"
                                                                    aria-controls="custom-tabs-three-pertumbuhan"
                                                                    aria-selected="false">Pertumbuhan dan
                                                                    Perkembangan</a>
                                                            </li>

                                                        </ul>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="tab-content" id="custom-tabs-three-tabContent">
                                                            <div class="tab-pane fade show active"
                                                                id="custom-tabs-three-permintaan-tindakan"
                                                                role="tabpanel"
                                                                aria-labelledby="custom-tabs-three-permintaan-tindakan-tab">
                                                                <livewire:component.kajian-awal.data-kesehatan
                                                                    :medicalcd="$medik->medical_cd" :pasiencd="$medik->pasien_cd">
                                                            </div>
                                                            <div class="tab-pane fade"
                                                                id="custom-tabs-three-tindakan-diproses" role="tabpanel"
                                                                aria-labelledby="custom-tabs-three-tindakan-diproses-tab">
                                                                <livewire:component.kajian-awal.riwayat-psikologis
                                                                    :medicalcd="$medik->medical_cd" :pasiencd="$medik->pasien_cd">
                                                            </div>
                                                            <div class="tab-pane fade"
                                                                id="custom-tabs-three-riwayat-tindakan" role="tabpanel"
                                                                aria-labelledby="custom-tabs-three-riwayat-tindakan-tab">
                                                                <livewire:component.kajian-awal.kesehatan-reproduksi
                                                                    :medicalcd="$medik->medical_cd" :pasiencd="$medik->pasien_cd">
                                                            </div>
                                                            <div class="tab-pane fade"
                                                                id="custom-tabs-three-pertumbuhan" role="tabpanel"
                                                                aria-labelledby="custom-tabs-three-pertumbuhan-tab">
                                                                <livewire:component.kajian-awal.pertumbuhan-perkembangan.pertumbuhan
                                                                    :medicalcd="$medik->medical_cd" :pasiencd="$medik->pasien_cd">
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
