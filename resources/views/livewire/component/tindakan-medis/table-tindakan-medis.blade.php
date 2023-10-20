<div>
    <div class="row mb-3">
        <div class="col-md-2">
            <input type="text" class="form-control" placeholder="cari" wire:model.live='cari'>
        </div>
    </div>
    <table class="table">
        <thead>
            <th>Tanggal Proses</th>
            <th>Dokter</th>
            <th>Tindakan</th>
            <th>Jumlah</th>
            <th>Unit</th>
            <th>Aksi</th>
        </thead>
        <tbody>
            @foreach ($posts as $item)
                <tr>
                    <td>{{ date('Y-m-d', strtotime($item->datetime_trx)) }}</td>
                    <td>{{ $item->dokter->dr_nm ?? '-' }}</td>
                    <td>{{ $item->tindakan->treatment_nm ?? '' }}</td>
                    <td>{{ $item->quantity ?? '' }}</td>
                    <td>{{ $item->medical->medical_nm ?? '' }}</td>
                    <td></td>
                </tr>
            @endforeach

        </tbody>
    </table>
    {{ $posts->links() }}
</div>
