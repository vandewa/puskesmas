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
                                                        <label for=""
                                                            class="col-sm-3 col-form-label">Nama</label>
                                                        <div class="col-md-9">
                                                            <input type="text" class="form-control"
                                                                wire:model="nama">
                                                            @error('nama')
                                                                <span
                                                                    class="form-text text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="row mb-2">
                                                        <label for="" class="col-sm-3 col-form-label">Tempat
                                                            Lahir</label>
                                                        <div class="col-md-9">
                                                            <input type="text" class="form-control"
                                                                wire:model="tempat_lahir">
                                                            @error('tempat_lahir')
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
                                                                wire:model="birth_date">
                                                            @error('birth_date')
                                                                <span
                                                                    class="form-text text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="row mb-2">
                                                        <label for=""
                                                            class="col-sm-3 col-form-label">Status</label>
                                                        <div class="col-md-9">
                                                            <select class="form-control" wire:model.live="sex_tp">
                                                                @foreach ($listStatus ?? [] as $item)
                                                                    <option value="{{ $item['com_cd'] }}">
                                                                        {{ $item['code_nm'] }}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                            @error('form.sex_tp')
                                                                <span
                                                                    class="form-text text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="row mb-2">
                                                        <label for="" class="col-sm-3 col-form-label">Jenis
                                                            Kelamin</label>
                                                        <div class="col-md-9">
                                                            <select class="form-control" wire:model.live="sex_tp">
                                                                @foreach ($listJenisKelamin ?? [] as $item)
                                                                    <option value="{{ $item['com_cd'] }}">
                                                                        {{ $item['code_nm'] }}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                            @error('form.sex_tp')
                                                                <span
                                                                    class="form-text text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="row mb-2">
                                                        <label for=""
                                                            class="col-sm-3 col-form-label">Agama</label>
                                                        <div class="col-md-9">
                                                            <input type="text" class="form-control"
                                                                wire:model="form.agama">
                                                            @error('form.agama')
                                                                <span
                                                                    class="form-text text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="row mb-2">
                                                        <label for="" class="col-sm-3 col-form-label">No
                                                            KTP</label>
                                                        <div class="col-md-9">
                                                            <input type="number" class="form-control"
                                                                wire:model="form.ktp">
                                                            @error('form.ktp')
                                                                <span
                                                                    class="form-text text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="row mb-2">
                                                        <label for=""
                                                            class="col-sm-3 col-form-label">Telepon</label>
                                                        <div class="col-md-9">
                                                            <input type="number" class="form-control"
                                                                wire:model="form.telepon">
                                                            @error('form.telepon')
                                                                <span
                                                                    class="form-text text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="row mb-2">
                                                        <label for="" class="col-sm-3 col-form-label">Telepon
                                                            Wali</label>
                                                        <div class="col-md-9">
                                                            <input type="number" class="form-control"
                                                                wire:model="form.telepon_wali">
                                                            @error('form.telepon_wali')
                                                                <span
                                                                    class="form-text text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="row mb-2">
                                                        <label for="" class="col-sm-3 col-form-label">Golongan
                                                            Darah</label>
                                                        <div class="col-md-9">
                                                            <select class="form-control" wire:model.live="blood_tp">
                                                                @foreach ($listDarah ?? [] as $item)
                                                                    <option value="{{ $item['com_cd'] }}">
                                                                        {{ $item['code_nm'] }}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                            @error('form.blood_tp')
                                                                <span
                                                                    class="form-text text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="col-md-6">
                                                    <div class="row mb-2">
                                                        <label for="" class="col-sm-3 col-form-label">Ukuran
                                                            Sepatu</label>
                                                        <div class="col-md-9">
                                                            <input type="text" class="form-control"
                                                                wire:model="ukuran_sepatu">
                                                            @error('ukuran_sepatu')
                                                                <span
                                                                    class="form-text text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="row mb-2">
                                                        <label for="" class="col-sm-3 col-form-label">Ukuran
                                                            Baju</label>
                                                        <div class="col-md-9">
                                                            <input type="text" class="form-control"
                                                                wire:model="ukuran_baju">
                                                            @error('tempat_lahir')
                                                                <span
                                                                    class="form-text text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="row mb-2">
                                                        <label for="" class="col-sm-3 col-form-label">Alamat
                                                            Sekarang</label>
                                                        <div class="col-md-9">
                                                            <textarea name="" wire:model.live='form.alamat_sekarang' id="" class="form-control" rows="2"></textarea>
                                                            @error('alamat_sekarang')
                                                                <span
                                                                    class="form-text text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="row mb-2">
                                                        <label for="" class="col-sm-3 col-form-label">Alamat
                                                            Orangtua</label>
                                                        <div class="col-md-9">
                                                            <textarea name="" wire:model.live='form.alamat_wali' id="" class="form-control" rows="2"></textarea>
                                                            @error('alamat_sekarang')
                                                                <span
                                                                    class="form-text text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="row mb-2">
                                                        <label for=""
                                                            class="col-sm-3 col-form-label">Pendidikan Terakhir</label>
                                                        <div class="col-md-9">
                                                            <select class="form-control" wire:model.live="sex_tp">
                                                                @foreach ($listPendidikan ?? [] as $item)
                                                                    <option value="{{ $item['com_cd'] }}">
                                                                        {{ $item['code_nm'] }}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                            @error('form.sex_tp')
                                                                <span
                                                                    class="form-text text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="row mb-2">
                                                        <label for="" class="col-sm-3 col-form-label">Keahlian
                                                            Yang Dikuasai</label>
                                                        <div class="col-md-9">
                                                            <input type="text" class="form-control"
                                                                wire:model="keterampilan">
                                                            @error('keterampilan')
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
