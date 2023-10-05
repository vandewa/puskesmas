<div>
    <x-slot name="header">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Master Data</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Master</a></li>
                    <li class="breadcrumb-item active">Dokter</li>
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
                                    <div class="col-md-4">
                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-sm-2 col-form-label">Kode</label>
                                            <div class="col-sm-10">
                                            <input type="text" class="form-control" wire:model='form.dr_cd'  placeholder="Kode Spesialis">
                                                @error('form.dr_cd')
                                                <span class="form-text text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-sm-2 col-form-label">Nama</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" wire:model='form.dr_nm'  placeholder="Kode Spesialis">
                                                @error('form.dr_nm')
                                                <span class="form-text text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-sm-2 col-form-label">Nip</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" wire:model='form.nip'  placeholder="Nama">
                                                @error('form.nip')
                                                <span class="form-text text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-sm-2 col-form-label">Spesialis</label>
                                            <div class="col-sm-10">
                                                <select name="" id="" class="form-control" wire:model='form.spesialis_cd'>
                                                    <option value="">Pilih Spesialis</option>
                                                    @foreach ($listSpesialis??[] as $item)
                                                        <option value="{{ $item['spesialis_cd'] }}">{{ $item['spesialis_nm'] }}</option>
                                                    @endforeach
                                                </select>
                                                @error('form.spesialis_cd')
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
                                <button type="button" class="btn btn-default float-right" wire:click='batal'>Batal</button>
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
                                Data Spesialis
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-2">
                                    <input type="text" class="form-control" placeholder="cari" wire:model.live='cari'>
                                </div>
                            </div>

                            <table class="table">
                                <thead>

                                    <th>No</th>
                                    <th>Kode</th>
                                    <th>Nama</th>
                                    <th>Nip</th>
                                    <th>Spesialis</th>
                                    <th>Action</th>
                                </thead>
                                <tbody>
                                    @foreach ($post as $item)
                                        <tr wire:key='{{ $item->spesialis_cd }}'>

                                            <td>{{ $loop->index + $post->firstItem()}}</td>
                                            <td>{{ $item->dr_cd }}</td>
                                            <td> {{ $item->dr_nm }}</td>
                                            <td> {{ $item->nip }}</td>
                                            <td>{{ $item->spesialis_cd }}</td>
                                            <td>
                                                <button type="button" wire:click="getEdit('{{ $item->dr_cd }}')" class="btn btn-warning btn-flat btn-sm" data-toggle="tooltip" data-placement="left" title="Edit"><i class="fas fa-pencil-alt"></i></button>
                                                <button type="button"  class="btn btn-danger btn-flat btn-sm" data-toggle="modal" data-target="#modal-default" wire:click="setDelete('{{ $item->dr_cd }}')"><i class="fas fa-trash"></i></button>
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
    <div class="modal fade" id="modal-default" wire:ignore>
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header bg-danger">
              <h4 class="modal-title">Konformasi Hapus</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              Data yang dihapus tidak dapat dikembalikan!
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
              <button type="button" class="btn btn-danger" data-dismiss="modal" wire:click='delete'>Ya Hapus</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
</div>
