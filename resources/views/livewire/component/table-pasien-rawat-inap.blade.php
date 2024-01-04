<div>
    <table class="table table-stripe">
        <thead>
            <th>Kamar</th>
            <th>Dokter</th>
            <th>No. RM</th>
            <th>Nama Pasien</th>
            <th>Tanggal Masuk</th>
            <th>Kelas</th>
            <th>Tindakan</th>
        </thead>
        <tbody>
            @foreach ($posts as $item)
                <tr>
                    <td>{{ $item->ruang->ruang_nm ?? '-' }}</td>
                    <td>{{ $item->dokter->dr_nm ?? '' }}</td>
                    <td>{{ $item->pasien->no_rm ?? '' }}</td>
                    <td>{{ $item->pasien->pasien_nm ?? '' }}</td>
                    <td>{{ substr($item->datetime_in ?? '', 0, 10) }}</td>
                    <td>{{ $item->jenisPasien->code_nm ?? '' }}</td>
                    <td>
                        <div class="btn-group">
                            <button type="button" class="btn btn-info btn-sm btn-flat"><i
                                    class="fa fa-print"></i></button>
                            <button type="button" class="btn btn-info btn-sm btn-flat dropdown-toggle"
                                data-toggle="dropdown">
                                <span class="caret"></span>
                                <span class="sr-only">Toggle Dropdown</span>
                            </button>
                            <ul class="dropdown-menu" role="menu">
                                <li><a id="print-label" onclick="cetakLabel(`230000002`)">Label RM</a></li>
                            </ul>
                        </div><a href="{{ route($url, $item->medical_cd) }}" class="btn btn-success btn-flat btn-sm"
                            data-toggle="tooltip" data-placement="left" title="Detail"><i
                                class="fa fa-stethoscope"></i></button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $posts->links() }}
</div>
