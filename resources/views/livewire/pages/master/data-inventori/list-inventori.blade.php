<div>
    <x-slot name="header">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Master Data</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Master</a></li>
                    <li class="breadcrumb-item active">Inventori</li>
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
                            <a href="{{ route('master.inventori') }}" wire:navigate class="btn btn-success mb-4"><i
                                    class="fas fa-plus-square mr-2"></i> Tambah </a>
                            <table class="table">
                                <thead>
                                    <th>Hari</th>
                                    <th>Nama Poli</th>
                                    <th>Waktu</th>
                                    <th>Dokter</th>
                                    <th>Action</th>
                                </thead>
                                <tbody>
                                    @foreach ($post as $item)
                                        <tr wire:key='{{ $item->seq_no }}'>
                                            <td>{{ $item->hari->code_nm ?? '-' }}</td>
                                            <td>{{ $item->poli->medunit_nm ?? '-' }}</td>
                                            <td>{{ \Carbon\Carbon::createFromFormat('H:i:s', $item->time_start)->format('H:i') . ' - ' . \Carbon\Carbon::createFromFormat('H:i:s', $item->time_end)->format('H:i') }}
                                            </td>
                                            <td>{{ $item->dokter->dr_nm ?? '' }}</td>
                                            <td>
                                                <a href="{{ route('master.jadwal-praktek', $item->seq_no) }}"
                                                    wire:navigate class="btn btn-warning btn-flat btn-sm"
                                                    data-toggle="tooltip" data-placement="left" title="Edit"><i
                                                        class="fas fa-pencil-alt"></i></a>
                                                <button type="button" class="btn btn-danger btn-flat btn-sm"
                                                    data-toggle="modal" data-target="#modal-default"
                                                    wire:click="setDelete('{{ $item->seq_no }}')"><i
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
                    <button type="button" class="btn btn-danger" data-dismiss="modal" wire:click='delete'>Ya
                        Hapus</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
</div>
