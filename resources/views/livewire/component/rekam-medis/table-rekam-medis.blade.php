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
                <tr @if($item->rmGeneral) class="table-info"  @endif>
                    <td    @if($item->rmGeneral) rowspan="2"  @endif>{{ date('Y-m-d', strtotime($item->datetime_record)) }}</td>
                    <td>{{ $item->dokter->dr_nm ?? '-' }}</td>
                    <td>{{ $item->icd->icd_nm ?? '-' }}</td>
                    <td>{{ $item->medical_data ?? '' }}</td>
                    <td>{{ $item->anamnesa ?? '' }}</td>
                    <td>
                        {{ $item->pemeriksaan_fisik ?? '' }}

                    </td>
                    <td>{{ $item->pemeriksaan_penunjang ?? '' }}</td>
                    <td>{{ $item->jenisKasus->code_nm ?? '' }}</td>
                    <td><button class="btn btn-warning">Edit</button></td>
                </tr>
                @if($item->rmGeneral)
                <tr style="text-align: center" class="table-info">

                    <td>Kepala : <br> {{ $item->rmGeneral->kepala??"-" }}</td>
                    <td>Mata: <br> {{ $item->rmGeneral->mata??"-" }}</td>
                    <td>Telinga: <br> {{ $item->rmGeneral->teling??"-" }}</td>
                    <td>Dada: <br> @foreach (json_decode($item->rmGeneral->dada)??[] as $item)
                        <li>{{ $item }}</li>
                        @endforeach

                    </td>
                    <td>Leher: <br> {{ $item->rmGeneral->kepala??"-" }}</td>
                    <td>Abdomen: <br> {{ $item->rmGeneral->kepala??"-" }}</td>
                    <td>Extremistis: <br> {{ $item->rmGeneral->Extremistis??"-" }}</td>
                    <td></td>

                </tr>
                @endif
            @endforeach

        </tbody>
    </table>
    {{ $posts->links() }}
</div>
