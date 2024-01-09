<div>
    <div class="row mb-3">
        <div class="col-md-2">
            <input type="text" class="form-control" placeholder="cari" wire:model.live='cari'>
        </div>
    </div>
    <table class="table">
        <thead>
            <th>Tanggal</th>
            <th>Jenis Dokumen</th>
            <th>Keterangan Tamnahan</th>
            <th>Aksi</th>

        </thead>
        <tbody>
            @foreach ($posts as $item)
                <tr>
                    <td>{{ $item->created_at ?? '' }}</td>
                    <td>{{ $item->document->code_nm ?? '-' }}</td>
                    <td>{{ $item->keterangan ?? '-' }}</td>
                    <td>
                        <a href="{{ route('helper.preview-dokumen',['path'=> $item->path]) }}" target="_blank" class="btn btn-primary">Lihat</a>
                        <button class="btn btn-danger">Hapus</button>
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>
    {{ $posts->links() }}
</div>
