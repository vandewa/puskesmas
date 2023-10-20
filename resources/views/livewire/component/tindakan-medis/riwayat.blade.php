<div>
    <div class="row mb-3">
        <div class="col-md-2">
            <input type="text" class="form-control" placeholder="cari" wire:model.live='cari'>
        </div>
    </div>
    <table class="table">
        <thead>
            <th>Medical</th>
            <th>Tanggal</th>
            <th>Dokter</th>
            <th>Data</th>
        </thead>
        <tbody>
            @foreach ($posts as $item)
                <tr>
                    <td>{{ $item->tindakan->treatment_nm ?? '' }}</td>
                    <td>{{ date('Y-m-d', strtotime($item->datetime_trx)) }}</td>
                    <td>{{ $item->dokter->dr_nm ?? '-' }}</td>
                    <td>{{ $item->medical_note ?? '-' }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $posts->links() }}
</div>
