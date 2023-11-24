<div>
    <x-slot name="header">
        <div class="mb-2 row">
            <div class="col-sm-6">
                <h1 class="m-0">Data Keluarga</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Data Transaksi</a></li>
                    <li class="breadcrumb-item active">Suami Istri</li>
                </ol>
            </div>
        </div>
    </x-slot>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-dark card-tabs">
                        <livewire:component.link-transaksi>
                            <div class="card-body">
                                <div class="tab-pane fade active show">
                                    <div class="tab-pane active show fade" id="custom-tabs-one-rm" role="tabpanel"
                                        aria-labelledby="custom-tabs-one-rm-tab">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="card card-success card-tabs">
                                                    <livewire:demo.data-keluarga.list-transaksi>
                                                        <div class="tab-content" id="custom-tabs-six-tabContent">
                                                            <div class="tab-pane fade show active"
                                                                id="custom-tabs-six-riwayat-rm" role="tabpanel"
                                                                aria-labelledby="custom-tabs-six-riwayat-rm-tab">
                                                                <div class="card-body">
                                                                    <div class="col-md-12">
                                                                        {{-- <div class="card card-success card-outline"> --}}
                                                                        <form class="mt-2 form-horizontal"
                                                                            wire:submit='save'>
                                                                            <div class="card-body">
                                                                                <div class="row">
                                                                                    <div class="col-md-6">
                                                                                        <div class="mb-2 row">
                                                                                            <label for=""
                                                                                                class="col-sm-3 col-form-label">Nama</label>
                                                                                            <div class="col-md-9">
                                                                                                <input type="text"
                                                                                                    class="form-control"
                                                                                                    wire:model="form.nama">
                                                                                                @error('form.nama')
                                                                                                    <span
                                                                                                        class="form-text text-danger">{{ $message }}</span>
                                                                                                @enderror
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="mb-2 row">
                                                                                            <label for=""
                                                                                                class="col-sm-3 col-form-label">Tempat
                                                                                                Lahir</label>
                                                                                            <div class="col-md-9">
                                                                                                <input type="text"
                                                                                                    class="form-control"
                                                                                                    wire:model="form.tempat_lahir">
                                                                                                @error('form.tempat_lahir')
                                                                                                    <span
                                                                                                        class="form-text text-danger">{{ $message }}</span>
                                                                                                @enderror
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="mb-2 row">
                                                                                            <label for=""
                                                                                                class="col-sm-3 col-form-label">Tanggal
                                                                                                Lahir</label>
                                                                                            <div class="col-md-9">
                                                                                                <input type="date"
                                                                                                    class="form-control"
                                                                                                    wire:model="form.tgl_lahir">
                                                                                                @error('form.tgl_lahir')
                                                                                                    <span
                                                                                                        class="form-text text-danger">{{ $message }}</span>
                                                                                                @enderror
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="mb-2 row">
                                                                                            <label for=""
                                                                                                class="col-sm-3 col-form-label">Pendidikan</label>
                                                                                            <div class="col-md-9">
                                                                                                <input type="text"
                                                                                                    class="form-control"
                                                                                                    wire:model="form.pendidikan">
                                                                                                @error('form.pendidikan')
                                                                                                    <span
                                                                                                        class="form-text text-danger">{{ $message }}</span>
                                                                                                @enderror
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="mb-2 row">
                                                                                            <label for=""
                                                                                                class="col-sm-3 col-form-label">Pekerjaan</label>
                                                                                            <div class="col-md-9">
                                                                                                <input type="text"
                                                                                                    class="form-control"
                                                                                                    wire:model="form.pekerjaan">
                                                                                                @error('form.pekerjaan')
                                                                                                    <span
                                                                                                        class="form-text text-danger">{{ $message }}</span>
                                                                                                @enderror
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="card-footer">
                                                                                <button type="submit"
                                                                                    class="btn btn-info">Simpan</button>
                                                                                {{-- <button type="button"
                                                                                    class="float-right btn btn-default"
                                                                                    wire:click='batal'>Batal</button> --}}
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
