<div class="modal fade show" id="modal-default"
    @if ($modal) style="display: block;" @else style="display: none;" @endif>
    <div class="modal-dialog modal-lg">
        <form class="form-horizontal mt-2" wire:submit='save'>
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Tambah Riwayat Kehamilan Persalinan</h4>
                    <button type="button" wire:click='showModal' class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="row mb-2">
                                <label for="inputEmail3" class="col-sm-4 col-form-label">Persalinan</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" wire:model='form.persalinan'
                                        placeholder="....">
                                    @error('form.persalinan')
                                        <span class="form-text text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-2">
                                <label for="inputEmail3" class="col-sm-4 col-form-label">Tahun</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" wire:model='form.tahun'
                                        placeholder="....">
                                    @error('form.tahun')
                                        <span class="form-text text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-2">
                                <label for="" class="col-sm-4 col-form-label">Jenis Kelamin</label>
                                <div class="col-md-8">
                                    <select class="form-control" wire:model.defer='form.jk'>
                                        <option value="">-- Pilih --</option>
                                        <option value="l">Laki-laki</option>
                                        <option value="p">Perempuan</option>
                                    </select>
                                    @error('form.jk')
                                        <span class="form-text text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-2">
                                <label for="inputEmail3" class="col-sm-4 col-form-label">Penolong</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" wire:model='form.penolong'
                                        placeholder="....">
                                    @error('form.penolong')
                                        <span class="form-text text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-2">
                                <label for="inputEmail3" class="col-sm-4 col-form-label">Tempat</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" wire:model='form.tempat'
                                        placeholder="....">
                                    @error('form.tempat')
                                        <span class="form-text text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                        </div>

                        <div class="col-md-6">
                            <div class="row mb-2">
                                <label for="" class="col-sm-4 col-form-label">Hidup / Mati</label>
                                <div class="col-md-8">
                                    <select class="form-control" wire:model.defer='form.hidup_mati'>
                                        <option value="">-- Pilih --</option>
                                        <option value="h">Hidup</option>
                                        <option value="m">Mati</option>
                                    </select>
                                    @error('form.hm')
                                        <span class="form-text text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-2">
                                <label for="inputEmail3" class="col-sm-4 col-form-label">BBL</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" wire:model='form.bb' placeholder="....">
                                    @error('form.bbl')
                                        <span class="form-text text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-2">
                                <label for="inputEmail3" class="col-sm-4 col-form-label">PB</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" wire:model='form.pb' placeholder="....">
                                    @error('form.pb')
                                        <span class="form-text text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-2">
                                <label for="inputEmail3" class="col-sm-4 col-form-label">Komplikasi</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" wire:model='form.komplikasi'
                                        placeholder="....">
                                    @error('form.komplikasi')
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
