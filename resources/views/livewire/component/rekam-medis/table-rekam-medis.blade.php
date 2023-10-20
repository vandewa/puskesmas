<div>
    <div class="row mb-3">
        <div class="col-md-2">
            <input type="text" class="form-control" placeholder="cari" wire:model.live='cari'>
        </div>
    </div>
    <table class="table">
        <thead>
            <th>Tanggal</th>
            <th>Dokter</th>
            <th>ICD</th>
            <th>Diagnosa</th>
            <th>Anamnesa</th>
            <th>P.Fisik</th>
            <th>P.Penunjang</th>
            <th>Kasus</th>
            <th>Aksi</th>
        </thead>
        <tbody>
            @foreach ($posts as $item)
                <tr>
                    <td>{{ date('Y-m-d', strtotime($item->datetime_record)) }}</td>
                    <td>{{ $item->dokter->dr_nm ?? '-' }}</td>
                    <td>{{ $item->icd->icd_nm ?? '-' }}</td>
                    <td>{{ $item->medical_data ?? '' }}</td>
                    <td>{{ $item->anamnesa ?? '' }}</td>
                    <td>{{ $item->pemeriksaan_fisik ?? '' }}</td>
                    <td>{{ $item->pemeriksaan_penunjang ?? '' }}</td>
                    <td>{{ $item->jenisKasus->code_nm ?? '' }}</td>
                    <td></td>
                </tr>
            @endforeach

        </tbody>
    </table>
    {{ $posts->links() }}
</div>
