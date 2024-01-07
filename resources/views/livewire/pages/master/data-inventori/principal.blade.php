<div>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <div class="card card-success card-outline">
                        <form class="form-horizontal mt-2" wire:submit='save'>
                            @if ($edit)
                                <input type="hidden" value="{{ $form['principal_cd'] }}" wire:model="form.principal_cd">
                            @endif
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label for="" class="col-sm-3 col-form-label">Kode Principal</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control"
                                                    wire:model='form.principal_cd'
                                                    @if ($edit) disabled @endif>
                                                @error('form.principal_cd')
                                                    <span class="form-text text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="" class="col-sm-3 col-form-label">Nama Principal</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control"
                                                    wire:model='form.principal_nm'>
                                                @error('form.principal_nm')
                                                    <span class="form-text text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="" class="col-sm-3 col-form-label">Alamat</label>
                                            <div class="col-md-9">
                                                <textarea rows="2" wire:model="form.address" class="form-control"></textarea>
                                                @error('form.address')
                                                    <span class="form-text text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="" class="col-sm-3 col-form-label">Kota</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" wire:model='form.city'>
                                                @error('form.city')
                                                    <span class="form-text text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="" class="col-sm-3 col-form-label">Provinsi</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" wire:model='form.province'>
                                                @error('form.province')
                                                    <span class="form-text text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label for="" class="col-sm-3 col-form-label">Kode Pos</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" wire:model='form.postcode'>
                                                @error('form.postcode')
                                                    <span class="form-text text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="" class="col-sm-3 col-form-label">No Telp</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" wire:model='form.phone'>
                                                @error('form.phone')
                                                    <span class="form-text text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="" class="col-sm-3 col-form-label">HP</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" wire:model='form.mobile'>
                                                @error('form.mobile')
                                                    <span class="form-text text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="" class="col-sm-3 col-form-label">Fax</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" wire:model='form.fax'>
                                                @error('form.fax')
                                                    <span class="form-text text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="" class="col-sm-3 col-form-label">Email</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" wire:model='form.email'>
                                                @error('form.email')
                                                    <span class="form-text text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-info">Simpan</button>
                                <a href="{{ route('inventori.principal.index') }}"
                                    class="btn btn-default float-right">Kembali</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>
