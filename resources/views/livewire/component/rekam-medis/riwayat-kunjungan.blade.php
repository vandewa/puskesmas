<div>
    <div class="row mb-3">
        <div class="col-md-2">
            <input type="text" class="form-control" placeholder="cari" wire:model.live='cari'>
        </div>
    </div>
    <table class="table">
        <thead>
            <th>Tanggal</th>
            <th>Jenis</th>
            <th>Poli</th>
            <th>Kamar</th>
            <th>Bangsal</th>
            <th>Tanggal Pulang</th>
        </thead>
        <tbody>
            @foreach ($posts as $item)
                <tr>
                    <td>{{ date('Y-m-d', strtotime($item->datetime_in)) }}</td>
                    <td>{{ $item->jenisRawat->code_nm ?? '-' }}</td>
                    <td>{{ $item->poli->medunit_nm ?? '-' }}</td>
                    <td>{{ $item->ruang->ruang_nm ?? '' }}</td>
                    <td>{{ $item->ruang->bangsal->bangsal_nm ?? '' }}</td>
                    <td>{{ $item->datetime_out ? date('Y-m-d', strtotime($item->datetime_out)) : '' }}</td>
                </tr>
            @endforeach

        </tbody>
    </table>
    {{ $posts->links() }}
</div>
