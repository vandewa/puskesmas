<div>
    <div class="mb-3 row">
        <div class="col-md-2">
            <input type="text" class="form-control" placeholder="cari" wire:model.live='cari'>
        </div>
    </div>
    <table class="table">
        <thead>
            <th>Tanggal</th>
            <th>Dokter</th>
            <th>Paramedis</th>
            <th>Subject</th>
            <th>Objective</th>
            <th>Assesment</th>
            <th>Plan</th>
            <th>Aksi</th>

        </thead>
        <tbody>
            @foreach ($posts as $item)
                <tr>
                    <td>{{ $item->transaction_date ?? '' }}</td>
                    <td>{{ $item->dr_cd ?? '' }}</td>
                    <td>{{ $item->paramedis_cd ?? '' }}</td>
                    <td>{{ $item->subject ?? '-' }}</td>
                    <td>{{ $item->objective ?? '-' }}</td>
                    <td>{{ $item->assesment ?? '-' }}</td>
                    <td>{{ $item->plan ?? '-' }}</td>
                    <td>
                        {{-- <button class="btn btn-primary">Lihat</button> --}}
                        <button class="btn btn-danger" wire:click='confirmHapus({{ $item->id }})'>Hapus</button>
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>
    {{ $posts->links() }}
</div>
