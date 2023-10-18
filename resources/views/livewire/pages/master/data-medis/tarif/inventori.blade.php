<div>
    <x-slot name="header">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Master Data</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Master</a></li>
                    <li class="breadcrumb-item active">Tarif Inventori</li>
                </ol>
            </div>
        </div>
    </x-slot>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="card card-success card-outline">
                        <form class="form-horizontal mt-2" wire:submit='save'>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-2 row">
                                            <label for="inputEmail3" class="col-sm-3 col-form-label">Tarif (Rp)</label>
                                            <div class="col-sm-9">
                                                <input type="number" class="form-control" wire:model='form.tarif'>
                                                @error('form.tarif')
                                                    <span class="form-text text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="mb-2 row">
                                            <label for="inputEmail3" class="col-sm-3 col-form-label">Kelas</label>
                                            <div class="col-sm-9">
                                                <select class="form-control" wire:model='form.kelas_cd'>
                                                    <option value="">Pilih Kelas</option>
                                                    @foreach ($listKelas ?? [] as $item)
                                                        <option value="{{ $item['kelas_cd'] }}">
                                                            {{ $item['kelas_nm'] }}</option>
                                                    @endforeach
                                                </select>
                                                @error('form.kelas_cd')
                                                    <span class="form-text text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="mb-2 row">
                                            <label for="inputEmail3" class="col-sm-3 col-form-label">Asuransi</label>
                                            <div class="col-sm-9">
                                                <select class="form-control" wire:model='form.insurance_cd'>
                                                    <option value="">Pilih Asuransi</option>
                                                    @foreach ($listAsuransi ?? [] as $item)
                                                        <option value="{{ $item['insurance_cd'] }}">
                                                            {{ $item['insurance_nm'] }}</option>
                                                    @endforeach
                                                </select>
                                                @error('form.insurance_cd')
                                                    <span class="form-text text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">

                                        <div class="mb-2 row">
                                            <label for="" class="col-sm-3 col-form-label">Account</label>
                                            <div class="col-md-9">
                                                <div class="input-group ">
                                                    <p class="form-control">{{ $account->account_nm ?? '' }}</p>
                                                    <span class="input-group-append">
                                                        <button type="button" class="btn btn-info btn-flat"
                                                            wire:click="$dispatch('show-modal-account')">Cari</button>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-2 row">
                                            <label for="" class="col-sm-3 col-form-label">Inventori</label>
                                            <div class="col-md-9">
                                                <div class="input-group ">
                                                    <p class="form-control">{{ $inventori->item_nm ?? '' }}</p>
                                                    <span class="input-group-append">
                                                        <button type="button" class="btn btn-info btn-flat"
                                                            wire:click="$dispatch('show-modal-master-inventori')">Cari</button>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-info">Simpan</button>
                                <button type="button" class="btn btn-default float-right"
                                    wire:click='batal'>Batal</button>
                            </div>
                            <!-- /.card-footer -->
                        </form>
                        <!-- /.card-header -->
                        <!-- form start -->
                    </div>

                    <!-- /.card -->

                    <div class="card card-success card-outline">
                        <div class="card-header">
                            <div class="card-title">
                                Data Tarif Inventori
                            </div>
                        </div>
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                    <th>Nama Tarif</th>
                                    <th>Kelas</th>
                                    <th>Account</th>
                                    <th>Tarif</th>
                                    <th>Action</th>
                                </thead>
                                <tbody>
                                    @foreach ($post as $item)
                                        <tr wire:key='{{ $item->seq_no }}'>
                                            <td>{{ $item->kelas->kelas_nm ?? '-' }}</td>
                                            <td>{{ $item->kelas->kelas_nm ?? '-' }}</td>
                                            <td>{{ $item->account->account_nm ?? '-' }}</td>
                                            <td>{{ $item->tarif ?? '-' }}</td>
                                            <td>
                                                <button type="button" wire:click="getEdit('{{ $item->seq_no }}')"
                                                    class="btn btn-warning btn-flat btn-sm" data-toggle="tooltip"
                                                    data-placement="left" title="Edit"><i
                                                        class="fas fa-pencil-alt"></i></button>
                                                <button type="button" class="btn btn-danger btn-flat btn-sm"
                                                    wire:click="delete('{{ $item->seq_no }}')"><i
                                                        class="fas fa-trash"></i></button>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{ $post->links() }}
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <livewire:component.modal-account wire:key='modal-account'>
        <livewire:component.modal-master-inventori wire:key='modal-master-inventori'>
</div>
