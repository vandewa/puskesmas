<div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Cari" wire:model.live='search'>
            </div>
            <table class="table">
                <thead>
                    <th colspan="2">Nama Pemeriksaan</th>
                </thead>
                <tbody>
                    @foreach ($list as $item)
                    <tr>
                        <td>{{ $item->medicalunit_nm }}</td> <td><input type="checkbox" value="{{ $item->medicalunit_cd }}" wire:model.live="pilihan"></td>
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
                <div class="col-md-5"><input type="date" class="form-control"></div>
                <div class="col-md-5"><input type="time" class="form-control"></div>
            </div>
            <div class="row">
                <label for="" class="col-form-label col-md-2">Dokter</label>
                <div class="col-md-10">
                    <select name="" id="" class="form-control">
                        <option value=""></option>
                    </select>
                </div>
            </div>
            <div class="row">
                <label for="" class="col-form-label col-md-2">Catatan</label>
                <div class="col-md-10">
                   <textarea name="" id="" class="form-control" rows="3"></textarea>
                </div>
            </div>

        </div>
    </div>
</div>
