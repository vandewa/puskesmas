<div>
    <x-slot name="header">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Data Transaksi</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Transaksi</a></li>
                    <li class="breadcrumb-item active">Data Transaksi</li>
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
                                <div class="col-md-12">
                                    {{-- <div class="card card-success card-outline"> --}}
                                    <form class="form-horizontal mt-2" wire:submit='save'>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="row mb-2">
                                                        <label for="" class="col-sm-3 col-form-label">No
                                                            RM</label>
                                                        <div class="col-md-9">
                                                            <input type="text" class="form-control"
                                                                wire:model="no_rm" disabled>
                                                            @error('no_rm')
                                                                <span
                                                                    class="form-text text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="row mb-2">
                                                        <label for="" class="col-sm-3 col-form-label">Nama
                                                            Pasien</label>
                                                        <div class="col-md-9">
                                                            <input type="text" class="form-control"
                                                                wire:model="pasien_nm" disabled>
                                                            @error('pasien_nm')
                                                                <span
                                                                    class="form-text text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="row mb-2">
                                                        <label for="" class="col-sm-3 col-form-label">Tanggal
                                                            Lahir</label>
                                                        <div class="col-md-9">
                                                            <input type="text" class="form-control"
                                                                wire:model="birth_date" disabled>
                                                            @error('birth_date')
                                                                <span
                                                                    class="form-text text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="row mb-2">
                                                        <label for="" class="col-sm-3 col-form-label">Tanggal
                                                            Masuk</label>
                                                        <div class="col-md-9">
                                                            <input type="date" class="form-control"
                                                                wire:model="form.datetime_in">
                                                            @error('form.datetime_in')
                                                                <span
                                                                    class="form-text text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
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
    </section>
</div>
