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
                    <div class="card box-body card-success card-outline">
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
                                                                    aria-selected="true">Semua</a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a class="nav-link"
                                                                    id="custom-tabs-two-data-rekam-medis-tab"
                                                                    data-toggle="pill"
                                                                    href="#custom-tabs-two-data-rekam-medis"
                                                                    role="tab"
                                                                    aria-controls="custom-tabs-two-data-rekam-medis"
                                                                    aria-selected="false">Umum</a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a class="nav-link"
                                                                    id="custom-tabs-two-riwayat-rekam-medis-tab"
                                                                    data-toggle="pill"
                                                                    href="#custom-tabs-two-riwayat-rekam-medis"
                                                                    role="tab"
                                                                    aria-controls="custom-tabs-two-riwayat-rekam-medis"
                                                                    aria-selected="false">Paramedis
                                                                </a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a class="nav-link" id="custom-tabs-two-lab-tab"
                                                                    data-toggle="pill" href="#custom-tabs-two-lab"
                                                                    role="tab" aria-controls="custom-tabs-two-lab"
                                                                    aria-selected="false">Lab/Radiologi
                                                                </a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a class="nav-link" id="custom-tabs-two-kamar-tab"
                                                                    data-toggle="pill" href="#custom-tabs-two-kamar"
                                                                    role="tab" aria-controls="custom-tabs-two-kamar"
                                                                    aria-selected="false">Kamar
                                                                </a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a class="nav-link" id="custom-tabs-two-tindakan-tab"
                                                                    data-toggle="pill" href="#custom-tabs-two-tindakan"
                                                                    role="tab"
                                                                    aria-controls="custom-tabs-two-tindakan"
                                                                    aria-selected="false">Tindakan
                                                                </a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a class="nav-link" id="custom-tabs-two-obat-tab"
                                                                    data-toggle="pill" href="#custom-tabs-two-obat"
                                                                    role="tab" aria-controls="custom-tabs-two-obat"
                                                                    aria-selected="false">Obat
                                                                </a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a class="nav-link" id="custom-tabs-two-bhp-tab"
                                                                    data-toggle="pill" href="#custom-tabs-two-bhp"
                                                                    role="tab" aria-controls="custom-tabs-two-bhp"
                                                                    aria-selected="false">BHP
                                                                </a>
                                                            </li>

                                                        </ul>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="tab-content" id="custom-tabs-six-tabContent">
                                                            <div class="tab-pane fade show active"
                                                                id="custom-tabs-six-riwayat-rm" role="tabpanel"
                                                                aria-labelledby="custom-tabs-six-riwayat-rm-tab">


                                                                <table id="tarif-semua"
                                                                    class="table table-bordered dataTable no-footer"
                                                                    width="100%" role="grid"
                                                                    style="width: 100%;">
                                                                    <thead>
                                                                        <tr role="row">
                                                                            <th class="sorting" tabindex="0"
                                                                                aria-controls="tarif-semua"
                                                                                rowspan="1" colspan="1"
                                                                                style="width: 125px;"
                                                                                aria-label="Tanggal: activate to sort column ascending">
                                                                                Tanggal</th>
                                                                            <th class="sorting" tabindex="0"
                                                                                aria-controls="tarif-semua"
                                                                                rowspan="1" colspan="1"
                                                                                style="width: 273px;"
                                                                                aria-label="Data: activate to sort column ascending">
                                                                                Data</th>
                                                                            <th class="sorting" tabindex="0"
                                                                                aria-controls="tarif-semua"
                                                                                rowspan="1" colspan="1"
                                                                                style="width: 97px;"
                                                                                aria-label="Jumlah: activate to sort column ascending">
                                                                                Jumlah</th>
                                                                            <th class="sorting" tabindex="0"
                                                                                aria-controls="tarif-semua"
                                                                                rowspan="1" colspan="1"
                                                                                style="width: 116px;"
                                                                                aria-label="Harga: activate to sort column ascending">
                                                                                Harga</th>
                                                                            <th class="sorting" tabindex="0"
                                                                                aria-controls="tarif-semua"
                                                                                rowspan="1" colspan="1"
                                                                                style="width: 116px;"
                                                                                aria-label="Total: activate to sort column ascending">
                                                                                Total</th>
                                                                            <th class="sorting" tabindex="0"
                                                                                aria-controls="tarif-semua"
                                                                                rowspan="1" colspan="1"
                                                                                style="width: 266px;"
                                                                                aria-label="Jenis: activate to sort column ascending">
                                                                                Jenis</th>
                                                                            <th id="diskon_button" class="sorting"
                                                                                tabindex="0"
                                                                                aria-controls="tarif-semua"
                                                                                rowspan="1" colspan="1"
                                                                                style="width: 76px;"
                                                                                aria-label=": activate to sort column ascending">
                                                                            </th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr role="row" class="odd">
                                                                            <td>13/10/2023</td>
                                                                            <td>TRIFAMOL</td>
                                                                            <td>4.00</td>
                                                                            <td>Rp 60,00</td>
                                                                            <td>Rp 240,00</td>
                                                                            <td>Tarif Inventori(Obat/BHP)</td>
                                                                            <td><button type="button"
                                                                                    onclick="ubah(`629`)"
                                                                                    class="btn btn-success btn-flat btn-sm"
                                                                                    data-toggle="tooltip"
                                                                                    data-placement="left"
                                                                                    title="Diskon"><i
                                                                                        class="fas fa-money-check-alt"></i></button>
                                                                            </td>
                                                                        </tr>
                                                                        <tr role="row" class="even">
                                                                            <td>16/11/2023</td>
                                                                            <td>JASA SARANA FARMASI</td>
                                                                            <td>1.00</td>
                                                                            <td>Rp 450,00</td>
                                                                            <td>Rp 450,00</td>
                                                                            <td>Tarif Inventori(Obat/BHP)</td>
                                                                            <td><button type="button"
                                                                                    onclick="ubah(`630`)"
                                                                                    class="btn btn-success btn-flat btn-sm"
                                                                                    data-toggle="tooltip"
                                                                                    data-placement="left"
                                                                                    title="Diskon"><i
                                                                                        class="fas fa-money-check-alt"></i></button>
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>

                                                                <div class="row">
                                                                    <div class="col-md-6">

                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <table style="width: 100%">
                                                                            <tbody>
                                                                                <tr style="background-color: #eee;">
                                                                                    <td>
                                                                                        <h3 style="margin-top: 10px;">
                                                                                            <strong>Total Biaya</strong>
                                                                                        </h3>
                                                                                    </td>
                                                                                    <td style="text-align: right;">
                                                                                        <h3 style="margin-top: 10px;">
                                                                                            <strong>
                                                                                                <div id="total">Rp.
                                                                                                    690,00</div>
                                                                                            </strong>
                                                                                        </h3>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>




                                                            </div>
                                                            <div class="tab-pane fade"
                                                                id="custom-tabs-two-data-rekam-medis" role="tabpanel"
                                                                aria-labelledby="custom-tabs-two-data-rekam-medis-tab">
                                                                umum
                                                            </div>
                                                            <div class="tab-pane fade"
                                                                id="custom-tabs-two-riwayat-rekam-medis"
                                                                role="tabpanel"
                                                                aria-labelledby="custom-tabs-two-riwayat-rekam-medis-tab">
                                                                paramedis
                                                            </div>

                                                            <div class="tab-pane fade" id="custom-tabs-two-lab"
                                                                role="tabpanel"
                                                                aria-labelledby="custom-tabs-two-lab-tab">
                                                                <div>
                                                                    Lab/Radiologi
                                                                </div>
                                                            </div>

                                                            <div class="tab-pane fade" id="custom-tabs-two-kamar"
                                                                role="tabpanel"
                                                                aria-labelledby="custom-tabs-two-kamar-tab">
                                                                <div>
                                                                    Kamar
                                                                </div>
                                                            </div>

                                                            <div class="tab-pane fade" id="custom-tabs-two-tindakan"
                                                                role="tabpanel"
                                                                aria-labelledby="custom-tabs-two-tindakan-tab">
                                                                <div>
                                                                    tindakan
                                                                </div>
                                                            </div>

                                                            <div class="tab-pane fade" id="custom-tabs-two-obat"
                                                                role="tabpanel"
                                                                aria-labelledby="custom-tabs-two-obat-tab">
                                                                <div>
                                                                    obat
                                                                </div>
                                                            </div>

                                                            <div class="tab-pane fade" id="custom-tabs-two-bhp"
                                                                role="tabpanel"
                                                                aria-labelledby="custom-tabs-two-bhp-tab">
                                                                <div>
                                                                    bhp
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
