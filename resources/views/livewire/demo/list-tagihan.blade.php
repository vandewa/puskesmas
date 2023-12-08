<div>
    <x-slot name="header">
        <div class="mb-2 row">
            <div class="col-sm-6">
                <h1 class="m-0">Tagihan</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Tagihan</a></li>
                    {{-- <li class="breadcrumb-item active">Tagihan</li> --}}
                </ol>
            </div>
        </div>
    </x-slot>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="tab-pane fade active show">
                        <div class="tab-pane active show fade" id="custom-tabs-one-rm" role="tabpanel"
                            aria-labelledby="custom-tabs-one-rm-tab">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="tab-content" id="custom-tabs-six-tabContent">
                                        <div class="tab-pane fade show active" id="custom-tabs-six-riwayat-rm"
                                            role="tabpanel" aria-labelledby="custom-tabs-six-riwayat-rm-tab">
                                            <div class="card-body">

                                                <div class="card card-success card-outline">
                                                    <div class="card-header">
                                                        <div class="card-title">
                                                            Tagihan
                                                        </div>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col-md-2">
                                                                <input type="text" class="form-control"
                                                                    placeholder="cari" wire:model.live='cari'>
                                                            </div>
                                                        </div>

                                                        <div class="table-responsive">
                                                            <table class="table">
                                                                <thead>
                                                                    <th>Layanan</th>
                                                                    <th>Tgl Tagihan</th>
                                                                    <th>Nama Tagihan</th>
                                                                    <th>Jumlah</th>
                                                                    <th>Status</th>
                                                                    <th>Action</th>
                                                                </thead>
                                                                <tbody>
                                                                    @foreach ($post as $index => $item)
                                                                        <tr wire:key='{{ $item->id }}'>
                                                                            <td>{{ $$index = $index + 1}}</td>
                                                                            <td>{{ $item->tanggal_tagihan }}</td>
                                                                            <td>{{ $item->nama_tagihan }}</td>
                                                                            <td>{{  "Rp " . number_format( $item->jumlah??"0",2,',','.'); }}</td>
                                                                            <td>{{  $item->status  }}</td>
                                                                            <td>
                                                                                <div
                                                                                    class="gap-3 table-actions d-flex align-items-center fs-6">
                                                                                    <div class="mr-2">
                                                                                        <a href="{{ route('pendaftaran.bukti-bayar', $item->id) }}"
                                                                                            class="btn btn-warning btn-flat btn-sm"></i>Upload
                                                                                            Bukti Bayar
                                                                                        </a>
                                                                                    </div>

                                                                                </div>

                                                                            </td>
                                                                        </tr>
                                                                    @endforeach
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                        {{ $post->links() }}
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
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </section>
</div>
