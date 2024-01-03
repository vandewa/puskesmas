<div>
    <x-slot name="header">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Master Data</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Master</a></li>
                    <li class="breadcrumb-item active">Laboratorium</li>
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
                                        <div class="row mb-2">
                                            <label for="inputEmail3" class="col-sm-3 col-form-label">Kode
                                                Item</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control"
                                                    wire:model='form.medicalunit_cd' placeholder="Kode Item"
                                                    @if ($edit) disabled @endif>
                                                @error('form.medicalunit_cd')
                                                    <span class="form-text text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="row mb-2">
                                            <label for="inputEmail3" class="col-sm-3 col-form-label">Nama Item</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control"
                                                    wire:model='form.medicalunit_nm' placeholder="Nama Item">
                                                @error('form.medicalunit_nm')
                                                    <span class="form-text text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="mb-2 row">
                                            <label for="inputEmail3" class="col-sm-3 col-form-label">Group</label>
                                            <div class="col-sm-9">
                                                <select class="form-control" wire:model='form.medicalunit_root'>
                                                    <option value="">Pilih Group</option>
                                                    @foreach ($listGroup ?? [] as $item)
                                                        <option value="{{ $item['medicalunit_cd'] }}">
                                                            {{ $item['medicalunit_nm'] }}</option>
                                                    @endforeach
                                                </select>
                                                @error('form.medicalunit_root')
                                                    <span class="form-text text-danger">{{ $message }}</span>
                                                @enderror
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
                                Data Laboratorium
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-2">
                                    <input type="text" class="form-control" placeholder="cari"
                                        wire:model.live='cari'>
                                </div>
                            </div>

                            <table class="table">
                                <thead>
                                    <th>Kode Item</th>
                                    <th>Nama Item</th>
                                    <th>Action</th>
                                </thead>
                                <tbody>
                                    @foreach ($post as $item)
                                        <tr wire:key='{{ $item->medicalunit_cd }}'>
                                            <td>{{ $item->medicalunit_cd ?? '' }}</td>
                                            <td> {{ $item->medicalunit_nm ?? '' }}</td>
                                            <td>
                                                <button type="button"
                                                    wire:click="getEdit('{{ $item->medicalunit_cd }}')"
                                                    class="btn btn-warning btn-flat btn-sm" data-toggle="tooltip"
                                                    data-placement="left" title="Edit"><i
                                                        class="fas fa-pencil-alt"></i></button>
                                                <button type="button" class="btn btn-danger btn-flat btn-sm"
                                                    wire:click="delete('{{ $item->medicalunit_cd }}')"><i
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
</div>
