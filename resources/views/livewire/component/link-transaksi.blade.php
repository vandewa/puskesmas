<div class="card-header p-0 pt-1">
    <ul class="nav nav-tabs" id="custom-tabs-one-transaksi-tab" role="tablist">
        <li class="nav-item {{ Request::segment(3) == 'data-transaksi' ? 'active' : '' }}">
            <a class="nav-link {{ Request::segment(3) == 'data-transaksi' ? 'active' : '' }}"
                id="custom-tabs-one-transaksi-tab"
                href="{{ route('transaksi.rawat-jalan.data-transaksi', $medicalcd ?? '') }}" wire:navigate>Data
                Transaksi</a>
        </li>
        <li class="nav-item {{ Request::segment(2) == 'kajian-awal' ? 'active' : '' }}">
            <a class="nav-link {{ Request::segment(2) == 'kajian-awal' ? 'active' : '' }}" id="custom-tabs-one-rm-tab"
                href="{{ route('transaksi.kajian-awal', $medicalcd ?? '') }}" wire:navigate>Kajian Awal</a>
        </li>
        <li class="nav-item {{ Request::segment(2) == 'kajian-awal' ? 'active' : '' }}">
            <a class="nav-link {{ Request::segment(2) == 'kajian-lanjutan' ? 'active' : '' }}" id="custom-tabs-one-rm-tab"
                href="{{ route('transaksi.kajian-lanjutan', $medicalcd ?? '') }}" wire:navigate>Kajian Lanjutan</a>
        </li>
        <li class="nav-item {{ Request::segment(3) == 'rekam-medis' ? 'active' : '' }}">
            <a class="nav-link {{ Request::segment(3) == 'rekam-medis' ? 'active' : '' }}" id="custom-tabs-one-rm-tab"
                href="{{ route('transaksi.rawat-jalan.rekam-medis', $medicalcd ?? '') }}" wire:navigate>Rekam
                Medis</a>
        </li>
        <li class="nav-item {{ Request::segment(3) == 'tindakan-medis' ? 'active' : '' }}">
            <a class="nav-link {{ Request::segment(3) == 'tindakan-medis' ? 'active' : '' }}"
                id="custom-tabs-one-tindakan-tab"
                href="{{ route('transaksi.rawat-jalan.tindakan-medis', $medicalcd ?? '') }}" wire:navigate>Tindakan
                Medis</a>
        </li>
        <li class="nav-item {{ Request::segment(3) == 'laboratorium' ? 'active' : '' }}">
            <a href="{{ route('transaksi.rawat-jalan.laboratorium', $medicalcd) }}" class="nav-link {{ Request::segment(3) == 'laboratorium' ? 'active' : '' }}" id="custom-tabs-one-lab-tab" href="#custom-tabs-one-lab">Laboratorium</a>
        </li>
        {{-- <li class="nav-item">
            <a class="nav-link" id="custom-tabs-one-radiologi-tab" href="#custom-tabs-one-radiologi">Radiologi</a>
        </li> --}}
        <li class="nav-item {{ Request::segment(3) == 'resep-obat' ? 'active' : '' }}">
            <a class="nav-link {{ Request::segment(3) == 'resep-obat' ? 'active' : '' }}"
                id="custom-tabs-one-resep-tab" href="{{ route('transaksi.rawat-jalan.resep-obat', $medicalcd ?? '') }}"
                wire:navigate>Resep/Obat</a>
        </li>
    </ul>
</div>
