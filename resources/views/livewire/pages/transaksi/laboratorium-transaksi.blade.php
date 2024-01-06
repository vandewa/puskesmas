<div>
    <x-slot name="header">
        <div class="mb-2 row">
            <div class="col-sm-6">
                <h1 class="m-0">Resep Obat</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Transaksi</a></li>
                    <li class="breadcrumb-item active">Resep Obat</li>
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
                                <div class="tab-pane active show fade" id="custom-tabs-one-resep" role="tabpanel"
                                    aria-labelledby="custom-tabs-one-resep-tab">
                                    <livewire:component.detail-pasien :medicalcd="$medicalcd">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="card card-success card-tabs">
                                                    <div class="p-0 pt-1 card-header">
                                                        <ul class="nav nav-tabs" id="custom-tabs-six-transaksi-tab"
                                                            role="tablist">
                                                            <li class="nav-item">
                                                                <a class="nav-link active"
                                                                    id="custom-tabs-six-data-resep-tab"
                                                                    data-toggle="pill"
                                                                    href="#custom-tabs-six-data-resep" role="tab"
                                                                    aria-controls="custom-tabs-six-data-resep"
                                                                    aria-selected="true">Tindakan</a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a class="nav-link"
                                                                    id="custom-tabs-six-riwayat-resep-tab"
                                                                    data-toggle="pill"
                                                                    href="#custom-tabs-six-riwayat-resep" role="tab"
                                                                    aria-controls="custom-tabs-six-riwayat-resep"
                                                                    aria-selected="false">Riwayat Tindakan</a>
                                                            </li>

                                                            <li class="nav-item"
                                                                style="margin-left: auto; background:yellow;">
                                                                <a class="nav-link" data-toggle="pill"
                                                                    href="#tambah-resep" role="tab"
                                                                    aria-controls="tambah-resep"
                                                                    href="#custom-tabs-six-template-resep"><i
                                                                        class="mr-2 fas fa-plus-square"
                                                                        style="color:black"></i><span
                                                                        style="color:black">Tambah Tindakan</span></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="tab-content" id="custom-tabs-six-tabContent">
                                                            <div class="tab-pane fade show active"
                                                                id="custom-tabs-six-data-resep" role="tabpanel"
                                                                aria-labelledby="custom-tabs-six-data-resep-tab">
                                                                <livewire:component.laboratorium.list-proses-lab :medicalcd="$medik->medical_cd">
                                                            </div>
                                                            <div class="tab-pane fade"
                                                                id="custom-tabs-six-riwayat-resep" role="tabpanel"
                                                                aria-labelledby="custom-tabs-six-riwayat-resep-tab">
                                                                <livewire:component.resep.resep-table-resep-riwayat
                                                                    :medicalcd="$medik->medical_cd" :pasiencd="$medik->pasien_cd">
                                                            </div>

                                                            <div class="tab-pane fade" id="tambah-resep" role="tabpanel"
                                                                aria-labelledby="custom-tabs-six-template-resep-tab">
                                                                <livewire:component.laboratorium.list-tindakan-lab :pasiencd="$medik->pasien_cd" :dr='$medik->dr_cd' :medicalcd="$medik->medical_cd">

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
