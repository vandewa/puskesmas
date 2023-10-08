<div>
    <table class="table table-stripe">
        <thead>
            <th>Poliklinik</th>
            <th>Dokter</th>
            <th>No. RM</th>
            <th>Nama Pasien</th>
            <th>Tanggal Lahir</th>
            <th>No Antrian</th>
            <th>Jenis</th>
            <th>Tindakan</th>
        </thead>
        <tbody>
            @foreach ($posts as $item)
            <tr>
                <td>{{ $item->poli->medunit_nm }}</td>
                <td>{{ $item->dokter->dr_nm }}</td>
                <td>{{ $item->pasien->no_rm }}</td>
                <td>{{ $item->pasien->pasien_nm }}</td>
                <td>{{ $item->pasien->birth_date }}</td>
                <td>{{ $item->queue_no }}</td>
                <td>{{ $item->jenisPasien->code_nm }}</td>
                <td></td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $posts->links() }}
</div>
