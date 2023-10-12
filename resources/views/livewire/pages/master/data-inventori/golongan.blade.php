<div>
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
                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-sm-3 col-form-label">Kode
                                                Golongan</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" wire:model='form.golongan_cd'
                                                    placeholder="Kode Golongan"
                                                    @if ($edit) disabled @endif>
                                                @error('form.golongan_cd')
                                                    <span class="form-text text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-sm-3 col-form-label">Nama
                                                Golongan</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" wire:model='form.golongan_nm'
                                                    placeholder="Nama Golongan">
                                                @error('form.golongan_nm')
                                                    <span class="form-text text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-sm-3 col-form-label">Root</label>
                                            <div class="col-sm-9">
                                                <select class="form-control" wire:model='form.root_cd'
                                                    wire:key="select.root_cd">
                                                    <option value="">-- Pilih Root --</option>
                                                    @foreach ($root ?? [] as $item)
                                                        <option value="{{ $item['golongan_cd'] }}">
                                                            {{ $item['golongan_nm'] }}</option>
                                                    @endforeach
                                                </select>
                                                @error('form.root_cd')
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
                                Data Golongan
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
                                    <th>Kode Golongan</th>
                                    <th>Nama Golongan</th>
                                    <th>Root</th>
                                    <th>Nama Root</th>
                                    <th>Action</th>
                                </thead>
                                <tbody>
                                    @foreach ($post as $item)
                                        <tr wire:key='{{ $item->golongan_cd }}'>
                                            <td>{{ $item->golongan_cd }}</td>
                                            <td> {{ $item->golongan_nm }}</td>
                                            <td> {{ $item->root->golongan_cd ?? '-' }}</td>
                                            <td> {{ $item->root->golongan_nm ?? '-' }}</td>
                                            <td>
                                                <button type="button" wire:click="getEdit('{{ $item->golongan_cd }}')"
                                                    class="btn btn-warning btn-flat btn-sm" data-toggle="tooltip"
                                                    data-placement="left" title="Edit"><i
                                                        class="fas fa-pencil-alt"></i></button>
                                                <button type="button" class="btn btn-danger btn-flat btn-sm"
                                                    data-toggle="modal" data-target="#modal-default"
                                                    wire:click="setDelete('{{ $item->golongan_cd }}')"><i
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
