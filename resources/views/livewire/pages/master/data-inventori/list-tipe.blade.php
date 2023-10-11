<div>
    <x-slot name="header">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Master Data</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Master</a></li>
                    <li class="breadcrumb-item active">Principal</li>
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
