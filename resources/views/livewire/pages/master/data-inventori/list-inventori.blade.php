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
                            <a href="{{ route('inventori.inventori') }}" wire:navigate class="btn btn-success mb-4"><i
                                    class="fas fa-plus-square mr-2"></i> Tambah </a>

                            <div class="row">
                                <div class="col-md-2">
                                    <input type="text" class="form-control" placeholder="cari"
                                        wire:model.live='cari'>
                                </div>
                            </div>
                            <table class="table">
                                <thead>
                                    <th>Nama Item</th>
                                    <th>Tipe</th>
                                    <th>Unit</th>
                                    <th>Generik</th>
                                    <th>Action</th>
                                </thead>
                                <tbody>
                                    @foreach ($post as $item)
                                        <tr wire:key='{{ $item->item_cd }}'>
                                            <td>{{ $item->item_nm ?? '-' }}</td>
                                            <td>{{ $item->type->type_nm ?? '-' }}</td>
                                            <td>{{ $item->satuan->unit_nm ?? '-' }}</td>
                                            <td>{{ $item->satuan->unit_nm ?? '-' }}</td>
                                            <td>
                                                <a href="{{ route('inventori.inventori', $item->item_cd) }}" wire:navigate
                                                    class="btn btn-warning btn-flat btn-sm" data-toggle="tooltip"
                                                    data-placement="left" title="Edit"><i
                                                        class="fas fa-pencil-alt"></i></a>
                                                <button type="button" class="btn btn-danger btn-flat btn-sm"
                                                    wire:click="delete('{{ $item->item_cd }}')"><i
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
