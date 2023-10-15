<div>
    <x-slot name="header">
        <div class="row mb-2">
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
                        <livewire:component.link-transaksi :medicalcd="$medik->medical_cd"/>
                        <div class="card-body">
                            <div class="tab-pane fade active show">
                                <div class="tab-pane active show fade" id="custom-tabs-one-resep" role="tabpanel"
                                aria-labelledby="custom-tabs-one-resep-tab">
                                <livewire:component.detail-pasien :medicalcd="$medicalcd">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="card card-success card-tabs">
                                                <div class="card-header p-0 pt-1">
                                                    <ul class="nav nav-tabs" id="custom-tabs-six-transaksi-tab"
                                                        role="tablist">
                                                        <li class="nav-item">
                                                            <a class="nav-link active"
                                                                id="custom-tabs-six-data-resep-tab"
                                                                data-toggle="pill"
                                                                href="#custom-tabs-six-data-resep" role="tab"
                                                                aria-controls="custom-tabs-six-data-resep"
                                                                aria-selected="true">Data Resep</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link"
                                                                id="custom-tabs-six-riwayat-resep-tab"
                                                                data-toggle="pill"
                                                                href="#custom-tabs-six-riwayat-resep"
                                                                role="tab"
                                                                aria-controls="custom-tabs-six-riwayat-resep"
                                                                aria-selected="false">Riwayat Resep</a>
                                                        </li>

                                                        <li class="nav-item"
                                                            style="margin-left: auto; background:yellow;">
                                                            <a class="nav-link"
                                                            data-toggle="pill"
                                                            href="#tambah-resep"
                                                            role="tab"
                                                            aria-controls="tambah-resep"
                                                                href="#custom-tabs-six-template-resep"><i
                                                                    class="fas fa-plus-square mr-2"
                                                                    style="color:black"></i><span
                                                                    style="color:black">Tambah Resep</span></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="card-body">
                                                    <div class="tab-content" id="custom-tabs-six-tabContent">
                                                        <div class="tab-pane fade show active"
                                                            id="custom-tabs-six-data-resep" role="tabpanel"
                                                            aria-labelledby="custom-tabs-six-data-resep-tab">
                                                            <livewire:component.resep.table-resep :medicalcd="$medik->medical_cd" >
                                                        </div>
                                                        <div class="tab-pane fade"
                                                            id="custom-tabs-six-riwayat-resep" role="tabpanel"
                                                            aria-labelledby="custom-tabs-six-riwayat-resep-tab">
                                                            <livewire:component.resep.resep-table-resep-riwayat :medicalcd="$medik->medical_cd" :pasiencd="$medik->pasien_cd" >
                                                        </div>

                                                        <div class="tab-pane fade"
                                                            id="tambah-resep" role="tabpanel"
                                                            aria-labelledby="custom-tabs-six-template-resep-tab">
                                                            <div style="@if(!$racik) display:none @endif">
                                                                <livewire:component.form-resep-racik :dr_cd="$medik->dr_cd" >
                                                            </div>


                                                            <div style=" @if($racik) display:none @endif">
                                                                <livewire:component.form-resep :dr_cd="$medik->dr_cd" :dataMedic="$medik">
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
