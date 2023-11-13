<div wire:poll.visible>
    <table class="table">
        <thead>
            <th>Tanggal</th>
            <th>Group</th>
            <th>Dokter</th>
            <th>Tindakan</th>
            <th>Catatan</th>
            <th></th>
        </thead>
        <tbody>
            @foreach ($posts as $item)
            <tr>
                <td>{{ $item->datetime_trx }}</td>
                <td>{{ $item->group_no }}</td>
                <td>{{ $item->drLab->dr_nm??"-" }}</td>
                <td>{{ $item->tindakan->medicalunit_nm }}</td>
                <td>{{ $item->medical_note }}</td>
                <td></td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $posts->links() }}
</div>
