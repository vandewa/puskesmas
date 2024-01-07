<div class="card-header p-0 pt-1">
    @if($item->medical_tp == 'MEDICAL_TP_01')
    <ul class="nav nav-tabs" id="custom-tabs-one-transaksi-tab" role="tablist">
        @permission('data_transaksi-create')
        <li class="nav-item {{ Request::segment(3) == 'data-transaksi' ? 'active' : '' }}">
            <a class="nav-link {{ Request::segment(3) == 'data-transaksi' ? 'active' : '' }}"
                id="custom-tabs-one-transaksi-tab"
                href="{{ route('transaksi.rawat-jalan.data-transaksi', $medicalcd ?? '') }}" wire:navigate>Data
                Transaksi</a>
        </li>
        @endpermission
        @permission('kajian_awal-create')
        <li class="nav-item {{ Request::segment(2) == 'kajian-awal' ? 'active' : '' }}">
            <a class="nav-link {{ Request::segment(2) == 'kajian-awal' ? 'active' : '' }}" id="custom-tabs-one-rm-tab"
                href="{{ route('transaksi.kajian-awal', $medicalcd ?? '') }}" wire:navigate>Kajian Awal</a>
        </li>
        @endpermission
        @permission('kajian_lanjutan-create')
        <li class="nav-item {{ Request::segment(2) == 'kajian-awal' ? 'active' : '' }}">
            <a class="nav-link {{ Request::segment(2) == 'kajian-lanjutan' ? 'active' : '' }}"
                id="custom-tabs-one-rm-tab" href="{{ route('transaksi.kajian-lanjutan', $medicalcd ?? '') }}"
                wire:navigate>Kajian
                Lanjutan</a>
        </li>
        @endpermission
        @permission('rekam_medis-create')
        <li class="nav-item {{ Request::segment(3) == 'rekam-medis' ? 'active' : '' }}">
            <a class="nav-link {{ Request::segment(3) == 'rekam-medis' ? 'active' : '' }}" id="custom-tabs-one-rm-tab"
                @if ($item->medical_tp == 'MEDICAL_TP_01') href="{{ route('transaksi.rawat-jalan.rekam-medis', $medicalcd ?? '') }}"
                @else
                href="{{ route('transaksi.rawat-inap.rekam-medis', $medicalcd ?? '') }}" @endif
                wire:navigate>Rekam Medis</a>
        </li>
        @endpermission
        @permission('tindakan_medis-create')
        <li class="nav-item {{ Request::segment(3) == 'tindakan-medis' ? 'active' : '' }}">
            <a class="nav-link {{ Request::segment(3) == 'tindakan-medis' ? 'active' : '' }}"
                id="custom-tabs-one-tindakan-tab"
                @if ($item->medical_tp == 'MEDICAL_TP_01') href="{{ route('transaksi.rawat-jalan.tindakan-medis', $medicalcd ?? '') }}"
                @else
                href="{{ route('transaksi.rawat-inap.tindakan-medis', $medicalcd ?? '') }}" @endif
                wire:navigate>Tindakan
                Medis</a>
        </li>
        @endpermission
        @permission('cppt-create')
        <li class="nav-item {{ Request::segment(3) == 'cppt' ? 'active' : '' }}">
            <a class="nav-link {{ Request::segment(3) == 'cppt' ? 'active' : '' }}" id="custom-tabs-one-tindakan-tab"
                @if ($item->medical_tp == 'MEDICAL_TP_01') href="{{ route('transaksi.rawat-jalan.cppt', $medicalcd ?? '') }}"
            @else
            href="{{ route('transaksi.rawat-inap.cppt', $medicalcd ?? '') }}" @endif
                wire:navigate>CPPT</a>
        </li>
        @endpermission
        @permission('laboratorium-create')
        <li class="nav-item {{ Request::segment(3) == 'laboratorium' ? 'active' : '' }}">
            <a @if ($item->medical_tp == 'MEDICAL_TP_01') href="{{ route('transaksi.rawat-jalan.laboratorium', $medicalcd ?? '') }}"
                @else
                href="{{ route('transaksi.rawat-inap.laboratorium', $medicalcd ?? '') }}" @endif
                class="nav-link {{ Request::segment(3) == 'laboratorium' ? 'active' : '' }}"
                id="custom-tabs-one-lab-tab" href="#custom-tabs-one-lab" wire:navigate>Laboratorium</a>
        </li>
        @endpermission
        @permission('resep-create')
        {{-- <li class="nav-item">
            <a class="nav-link" id="custom-tabs-one-radiologi-tab" href="#custom-tabs-one-radiologi">Radiologi</a>
        </li> --}}
        <li class="nav-item {{ Request::segment(3) == 'resep-obat' ? 'active' : '' }}">
            <a class="nav-link {{ Request::segment(3) == 'resep-obat' ? 'active' : '' }}"
                id="custom-tabs-one-resep-tab"
                @if ($item->medical_tp == 'MEDICAL_TP_01') href="{{ route('transaksi.rawat-jalan.resep-obat', $medicalcd ?? '') }}"
                @else
                href="{{ route('transaksi.rawat-inap.resep-obat', $medicalcd ?? '') }}" @endif
                wire:navigate>Resep/Obat</a>
        </li>
        @endpermission
        @permission('odontogram-create')
        <li class="nav-item {{ Request::segment(3) == 'odontogram' ? 'active' : '' }}">
            <a class="nav-link {{ Request::segment(3) == 'odontogram' ? 'active' : '' }}"
                id="custom-tabs-one-resep-tab"
                @if ($item->medical_tp == 'MEDICAL_TP_01') href="{{ route('transaksi.rawat-jalan.odontogram', $medicalcd ?? '') }}"
                @else
                href="{{ route('transaksi.rawat-inap.odontogram', $medicalcd ?? '') }}" @endif
                wire:navigate>Odontogram</a>
        </li>
        @endpermission
        @permission('dokumen_pasien-create')
            <li class="nav-item {{ Request::segment(3) == 'document' ? 'active' : '' }}">
                <a class="nav-link {{ Request::segment(3) == 'document' ? 'active' : '' }}" id="custom-tabs-one-resep-tab"
                    @if ($item->medical_tp == 'MEDICAL_TP_01') href="{{ route('transaksi.rawat-jalan.document', $medicalcd ?? '') }}"
                    @else
                    href="{{ route('transaksi.rawat-inap.document', $medicalcd ?? '') }}" @endif
                    wire:navigate>Dokumen Pasien</a>
            </li>
        @endpermission
        @permission('hhp-create')
            <li class="nav-item {{ Request::segment(3) == 'bhp' ? 'active' : '' }}">
                <a class="nav-link {{ Request::segment(3) == 'bhp' ? 'active' : '' }}" id="custom-tabs-one-resep-tab"
                    @if ($item->medical_tp == 'MEDICAL_TP_01') href="#"
                    @else
                    href="#" @endif
                    wire:navigate>BHP</a>
            </li>
        @endpermission
    </ul>
    @else
    <ul class="nav nav-tabs" id="custom-tabs-one-transaksi-tab" role="tablist">
        @permission('data_transaksi-create')
        <li class="nav-item {{ Request::segment(3) == 'data-transaksi' ? 'active' : '' }}">
            <a class="nav-link {{ Request::segment(3) == 'data-transaksi' ? 'active' : '' }}"
                id="custom-tabs-one-transaksi-tab"
                href="{{ route('transaksi.rawat-inap.data-transaksi', $medicalcd ?? '') }}" wire:navigate>Data
                Transaksi</a>
        </li>
        @endpermission
        @permission('kajian_awal-create')
        <li class="nav-item {{ Request::segment(2) == 'kajian-awal' ? 'active' : '' }}">
            <a class="nav-link {{ Request::segment(2) == 'kajian-awal' ? 'active' : '' }}" id="custom-tabs-one-rm-tab"
                href="{{ route('transaksi.kajian-awal', $medicalcd ?? '') }}" wire:navigate>Kajian Awal</a>
        </li>
        @endpermission
        @permission('kajian_lanjutan-create')
        <li class="nav-item {{ Request::segment(2) == 'kajian-awal' ? 'active' : '' }}">
            <a class="nav-link {{ Request::segment(2) == 'kajian-lanjutan' ? 'active' : '' }}"
                id="custom-tabs-one-rm-tab" href="{{ route('transaksi.kajian-lanjutan', $medicalcd ?? '') }}"
                wire:navigate>Kajian
                Lanjutan</a>
        </li>
        @endpermission
        @permission('kajian_lanjutan-create')
        <li class="nav-item {{ Request::segment(3) == 'rekam-medis' ? 'active' : '' }}">
            <a class="nav-link {{ Request::segment(3) == 'rekam-medis' ? 'active' : '' }}" id="custom-tabs-one-rm-tab"
                @if ($item->medical_tp == 'MEDICAL_TP_01') href="{{ route('transaksi.rawat-inap.rekam-medis', $medicalcd ?? '') }}"
                @else
                href="{{ route('transaksi.rawat-inap.rekam-medis', $medicalcd ?? '') }}" @endif
                wire:navigate>Rekam
                Medis</a>
        </li>
        @endpermission
        @permission('tindakan_medis-create')
        <li class="nav-item {{ Request::segment(3) == 'tindakan-medis' ? 'active' : '' }}">
            <a class="nav-link {{ Request::segment(3) == 'tindakan-medis' ? 'active' : '' }}"
                id="custom-tabs-one-tindakan-tab"
                @if ($item->medical_tp == 'MEDICAL_TP_01') href="{{ route('transaksi.rawat-inap.tindakan-medis', $medicalcd ?? '') }}"
                @else
                href="{{ route('transaksi.rawat-inap.tindakan-medis', $medicalcd ?? '') }}" @endif
                wire:navigate>Tindakan
                Medis</a>
        </li>
        @endpermission
        @permission('cppt-create')
        <li class="nav-item {{ Request::segment(3) == 'cppt' ? 'active' : '' }}">
            <a class="nav-link {{ Request::segment(3) == 'cppt' ? 'active' : '' }}" id="custom-tabs-one-tindakan-tab"
                @if ($item->medical_tp == 'MEDICAL_TP_01') href="{{ route('transaksi.rawat-inap.cppt', $medicalcd ?? '') }}"
            @else
            href="{{ route('transaksi.rawat-inap.cppt', $medicalcd ?? '') }}" @endif
                wire:navigate>CPPT</a>
        </li>
        @endpermission
        @permission('laboratorium-create')
        <li class="nav-item {{ Request::segment(3) == 'laboratorium' ? 'active' : '' }}">
            <a @if ($item->medical_tp == 'MEDICAL_TP_01') href="{{ route('transaksi.rawat-inap.laboratorium', $medicalcd ?? '') }}"
                @else
                href="{{ route('transaksi.rawat-inap.laboratorium', $medicalcd ?? '') }}" @endif
                class="nav-link {{ Request::segment(3) == 'laboratorium' ? 'active' : '' }}"
                id="custom-tabs-one-lab-tab" href="#custom-tabs-one-lab" wire:navigate>Laboratorium</a>
        </li>
        @endpermission
        @permission('resep-create')
        {{-- <li class="nav-item">
            <a class="nav-link" id="custom-tabs-one-radiologi-tab" href="#custom-tabs-one-radiologi">Radiologi</a>
        </li> --}}
        <li class="nav-item {{ Request::segment(3) == 'resep-obat' ? 'active' : '' }}">
            <a class="nav-link {{ Request::segment(3) == 'resep-obat' ? 'active' : '' }}"
                id="custom-tabs-one-resep-tab"
                @if ($item->medical_tp == 'MEDICAL_TP_01') href="{{ route('transaksi.rawat-inap.resep-obat', $medicalcd ?? '') }}"
                @else
                href="{{ route('transaksi.rawat-inap.resep-obat', $medicalcd ?? '') }}" @endif
                wire:navigate>Resep/Obat</a>
        </li>
        @endpermission
        @permission('odontogram-create')
        <li class="nav-item {{ Request::segment(3) == 'odontogram' ? 'active' : '' }}">
            <a class="nav-link {{ Request::segment(3) == 'odontogram' ? 'active' : '' }}"
                id="custom-tabs-one-resep-tab"
                @if ($item->medical_tp == 'MEDICAL_TP_01') href="{{ route('transaksi.rawat-inap.odontogram', $medicalcd ?? '') }}"
                @else
                href="{{ route('transaksi.rawat-inap.odontogram', $medicalcd ?? '') }}" @endif
                wire:navigate>Odontogram</a>
        </li>
        @endpermission
        @permission('dokumen_pasien-create')
        <li class="nav-item {{ Request::segment(3) == 'document' ? 'active' : '' }}">
            <a class="nav-link {{ Request::segment(3) == 'document' ? 'active' : '' }}" id="custom-tabs-one-resep-tab"
                @if ($item->medical_tp == 'MEDICAL_TP_01') href="{{ route('transaksi.rawat-inap.document', $medicalcd ?? '') }}"
                @else
                href="{{ route('transaksi.rawat-inap.document', $medicalcd ?? '') }}" @endif
                wire:navigate>Dokumen Pasien</a>
        </li>
        @endpermission
        @permission('hhp-create')
        <li class="nav-item {{ Request::segment(3) == 'bhp' ? 'active' : '' }}">
            <a class="nav-link {{ Request::segment(3) == 'bhp' ? 'active' : '' }}" id="custom-tabs-one-resep-tab"
                @if ($item->medical_tp == 'MEDICAL_TP_01') href="#"
                @else
                href="#" @endif
                wire:navigate>BHP</a>
        </li>
        @endpermission
    </ul>

    @endif
</div>
