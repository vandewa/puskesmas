<div class="modal fade show" id="modal-default"
    @if ($modal) style="display: block;" @else style="display: none;" @endif>
    <div class="modal-dialog modal-lg">
        <form class="form-horizontal mt-2" wire:submit='save'>
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Hasil Tindakan</h4>
                    <button type="button" wire:click='showModal' class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row mb-2">
                                <div class="col-sm-12">
                                    <textarea class="form-control" rows="3" wire:model='form.file_report' placeholder="...."></textarea>
                                    @error('form.file_report')
                                        <span class="form-text text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal"
                        wire:click='showModal'>Close</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
        </form>
    </div>
    <!-- /.modal-content -->
</div>
<!-- /.modal-dialog -->
</div>
