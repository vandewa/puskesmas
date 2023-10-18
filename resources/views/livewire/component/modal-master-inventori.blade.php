<div class="modal fade show" id="modal-default"
    @if ($modal) style="display: block;" @else style="display: none;" @endif>
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Inventori</h4>
                <button type="button" wire:click='showModal' class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <input type="text" id="search-master-inventori" class="form-control" wire:model.live='search'
                    autofocus>
                <table class="table">
                    <thead>
                        <th>Kode</th>
                        <th>Nama</th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                        @foreach ($posts as $item)
                            <tr wire:key='{{ $item->item_cd }}'>
                                <td>{{ $item->item_cd }}</td>
                                <td>{{ $item->item_nm }}</td>
                                <td>
                                    <button type="button" wire:click='pilih("{{ $item->item_cd }}")'
                                        class="btn btn-warning btn-flat btn-sm" data-toggle="tooltip"
                                        data-placement="left" title="Edit"><i class="fas fa-plus"></i>
                                    </button>

                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $posts->links() }}
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal"
                    wire:click='showModal'>Close</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
