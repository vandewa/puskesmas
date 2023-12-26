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
                    <td>{{ $item->datetime_trx ?? '' }}</td>
                    <td>{{ $item->group_no ?? '' }}</td>
                    <td>{{ $item->drLab->dr_nm ?? '-' }}</td>
                    <td>{{ $item->tindakan->medicalunit_nm ?? '' }}</td>
                    <td>{{ $item->medical_note ?? '' }}</td>
                    <td>
                        <button type="button" class="btn btn-primary btn-sm"
                            wire:click="$dispatch('show-modal-hasil-tindakan-lab')">
                            <i class="fas fa-file-alt mr-2"></i>Hasil Tindakan
                        </button>
                        <button type="button" class="btn btn-sm btn-danger"
                            wire:click='delete({{ $item->medical_unit_seqno }})'>Hapus</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $posts->links() }}
    <livewire:component.modal-hasil-tindakan-lab wire:key='modal-hasil-tindakan-lab' :medicalcd="$medicalcd">

</div>
