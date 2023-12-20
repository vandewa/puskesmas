<div>
    <x-slot name="header">
        <div class="row mb-2">
            <div class="col-sm-6">

                    <h1 class="m-0">Transaksi Farmasi</h1>

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
                            <livewire:component.detail-pasien :medicalcd="$medicalcd">
                        </div>
                    </div>
                    <!-- general form elements -->
                    <div class="card card-success card-outline">
                        <div class="card-body">
                            <div class="tab-content" id="custom-tabs-six-tabContent">
                                <div class="tab-pane"
                                    id="custom-tabs-six-data-resep" role="tabpanel"
                                    aria-labelledby="custom-tabs-six-data-resep-tab">

                                </div>
                                <div class="tab-pane fade"
                                    id="custom-tabs-six-riwayat-resep" role="tabpanel"
                                    aria-labelledby="custom-tabs-six-riwayat-resep-tab">

                                </div>

                                <div class="tab-pane fade show active" id="tambah-resep" role="tabpanel"
                                    aria-labelledby="custom-tabs-six-template-resep-tab">
                                    <div
                                        style="@if (!$racik) display:none @endif">
                                        <livewire:component.form-resep-racik
                                            :dr_cd="$medik->dr_cd">
                                    </div>


                                    <div
                                        style=" @if ($racik) display:none @endif">
                                        <livewire:component.form-resep :dr_cd="$medik->dr_cd"
                                            :dataMedic="$medik">
                                    </div>

                                </div>
                            </div>
                            <hr>
                            <div class="row mt-3" wire:poll.60s>
                                <div class="col-md-12 text-center">
                                    <h4>Data Resep</h4>
                                </div>
                            </div>
                            <table class="table">
                                <thead>

                                    <th>Data</th>
                                    <th>Jumlah</th>
                                    <th>Info</th>
                                    <th>Action</th>
                                </thead>
                                <tbody>
                                    @php
                                        $no;
                                    @endphp
                                    @foreach ( $resep as $item)
                                        <tr>
                                            <td colspan="3" class="bg-secondary" style="text-align: center">No Resep: {{ $item->resep_no }}</td><td><div class="btn-group">
                                                <button type="button" class="btn btn-default btn-sm">Action</button>
                                                <button type="button" class="btn btn-default dropdown-toggle dropdown-icon" data-toggle="dropdown" aria-expanded="false">
                                                  <span class="sr-only">Toggle Dropdown</span>
                                                </button>
                                                <div class="dropdown-menu" role="menu" style="">
                                                  <a class="dropdown-item" target="_blank" href="{{ route('helper.cetak-label-obat', $item->medical_resep_seqno) }}">Cetak Label</a>
                                                  <a class="dropdown-item" href="{{ route('helper.cetak-copy-resep', $item->medical_resep_seqno) }}" targer="_blank">Copy Resep</a>
                                                  @if(!$item->proses_st)
                                                    <button class="dropdown-item" wire:click='selesai({{ $item->medical_resep_seqno  }})'>Selesai</button>
                                                  @endif
                                                  <div class="dropdown-divider"></div>
                                                  <button class="dropdown-item" wire:click='edit({{ $item->medical_resep_seqno }})'>Edit</button>
                                                  <a class="dropdown-item" href="#">Hapus</a>
                                                </div>
                                              </div></td>
                                        </tr>
                                        @foreach ($item->resepData as $a)

                                        <tr>
                                            <td>{!! $a->data_nm !!}</td>
                                            <td>{{ $a->quantity }}</td>
                                            <td>{{ $a->info_01 }}</td>

                                        </tr>

                                        @endforeach
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
