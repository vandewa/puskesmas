<div>
    <table class="table table-stripe">
        <thead>


                <th>Poliklinik / Ruang</th>
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



                        <td>{{ $item->poli->medunit_nm ?? '' }}
                            {{ $item->ruang->kamar->kamar_nm??"" }} -  {{ $item->ruang->ruang_nm??"" }}</td>
                        <td>{{ $item->dokter->dr_nm ?? '' }}</td>

                    <td>{{ $item->pasien->no_rm ?? '' }}</td>
                    <td>{{ $item->pasien->pasien_nm ?? '' }}</td>
                    <td>{{ $item->pasien->birth_date ?? '' }}</td>
                    <td>{{ $item->poli->queue??"" }} {{ $item->queue_no ?? '' }}</td>
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
                            <div class="dropdown-menu" role="menu" style="">
                                <a class="dropdown-item"
                                    href="{{ route('helper.print-antrian-poli', $item->medical_cd) }}"
                                    target="_blank">Cetak Antrian
                                </a>
                            </div>
                        </div>

                        <a href="{{ route($url, $item->medical_cd) }}" class="btn btn-success btn-flat btn-sm"
                            data-toggle="tooltip" data-placement="left" title="Detail"><i class="fa fa-stethoscope"></i>
                        </a>

                        <button wire:click="panggilAntrian({{ $item->medical_cd }})"
                            class="btn btn-warning btn-flat btn-sm" data-toggle="tooltip" data-placement="left"
                            title="Panggil Antrian"><i class="fa fa-volume-up"></i>
                        </button>

                        {{-- <a href="{{ route($url, $item->medical_cd) }}" class="btn btn-success btn-flat btn-sm"
                            data-toggle="tooltip" data-placement="left" title="Proses"><i class="fas fa-user-md"></i>
                        </a> --}}


                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $posts->links() }}
</div>
