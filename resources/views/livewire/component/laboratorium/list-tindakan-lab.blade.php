<div>
    <form wire:submit="simpan">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Cari" wire:model.live='search'>
                </div>
                <table class="table table-striped @error('pilihan') text-danger @enderror">
                    <thead>
                        <th class=" " colspan="2">Nama Pemeriksaan @error('pilihan')
                                <span class="form-text text-danger">{{ $message }}</span>
                            @enderror
                        </th>
                    </thead>
                    <tbody>
                        @foreach ($list as $item)
                            <tr>
                                <td>{{ $item->medicalunit_nm }}</td>
                                <td>

                                    @if($item->root_st != 1)
                                    <input type="checkbox" value="{{ $item->medicalunit_cd }}"
                                        wire:model.live="pilihan">
                                    @endif
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
                {{ $list->links() }}
            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-2">
                        <label for="" class="col-form-label">Permintaan Tindakan</label>
                    </div>
                    <div class="col-md-10"><input type="datetime-local" class="form-control"
                            wire:model.live='form.datetime_trx'></div>

                </div>
                <div class="row">
                    <label for="" class="col-form-label col-md-2">Dokter</label>
                    <div class="col-md-10">
                        <select name="" id="" class="form-control" wire:model.live='form.dr2_cd'>
                            <option value="">Pilih Dokter</option>
                            @foreach ($dokter as $item)
                                <option value="{{ $item->dr_cd }}">{{ $item->dr_nm }}</option>
                            @endforeach

                        </select>
                        @error('form.dr_cd')
                            <span class="form-text text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <label for="" class="col-form-label col-md-2">Catatan</label>
                    <div class="col-md-10">
                        <textarea name="" id="" class="form-control" rows="3" wire:model.live='form.medical_note'></textarea>
                    </div>
                </div>
                <div class="row mt-3">
                    <label for="" class="col-form-label col-md-2"></label>
                    <div class="col-md-10">
                        <button class="btn btn-primary" type="submit">Simpan</button>
                    </div>
                </div>

            </div>
        </div>
    </form>
</div>
