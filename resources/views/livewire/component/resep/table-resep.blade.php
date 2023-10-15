<div>
    <div class="row mb-3">
        <div class="col-md-2">
            <input type="text" class="form-control" placeholder="cari"
                wire:model.live='cari'>
        </div>
    </div>
   <table class="table">
    <thead>
        <th>Tanggal</th>
        <th>No Resep</th>
        <th>Dokter</th>
        <th>Obat</th>
        <th>Jumlah</th>
        <th>Satuan</th>
        <th>Aksi</th>
    </thead>
    <tbody>
        @foreach ($posts as $item)
        <tr>
            <td>{{ date('Y-m-d', strtotime($item->resepHeader->resep_date??"")) }}</td>
            <td>{{ $item->resepheader->resep_no??"-"}}</td>
            <td>{{ $item->resepheader->dokter->dr_nm??"-" }}</td>
            <td>{!! $item->data_nm !!}</td>
            <td>{{ $item->quantity }}</td>
            <td>{{ $item->info_02 }}</td>
            <td></td>
        </tr>
        @endforeach

    </tbody>
   </table>
   {{ $posts->links() }}
</div>
