<div>
    <table class="table table-stripe">
        <thead>
            @if ($tipePasien == 'MEDICAL_TP_02')
                <th>Kelas</th>
                <th>Kamar</th>
            @else
                <th>Poliklinik</th>
                <th>Dokter</th>
            @endif
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
                    @if ($tipePasien == 'MEDICAL_TP_02')
                        <th>Kelas</th>
                        <th>Kamar</th>
                    @else
                        <td>{{ $item->poli->medunit_nm ?? '' }}</td>
                        <td>{{ $item->dokter->dr_nm ?? '' }}</td>
                    @endif
                    <td>{{ $item->pasien->no_rm ?? '' }}</td>
                    <td>{{ $item->pasien->pasien_nm ?? '' }}</td>
                    <td>{{ $item->pasien->birth_date ?? '' }}</td>
                    <td>{{ $item->queue_no ?? '' }}</td>
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

                                <li><a id="print-label" onclick="cetakLabel(`180000003`)">Label RM</a></li>
                            </ul>
                        </div>

                        <a href="{{ route($url, $item->medical_cd) }}" class="btn btn-success btn-flat btn-sm"
                            data-toggle="tooltip" data-placement="left" title="Detail"><i class="fa fa-stethoscope"></i>
                        </a>

                        <a href="{{ route($url, $item->medical_cd) }}" class="btn btn-success btn-flat btn-sm"
                            data-toggle="tooltip" data-placement="left" title="Proses"><i class="fas fa-user-md"></i>
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $posts->links() }}
</div>
