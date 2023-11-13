<div class="card-header p-0 pt-1">
    <ul class="nav nav-tabs" id="custom-tabs-two-transaksi-tab" role="tablist">
        <li class="nav-item {{ Request::segment(3) == 'rekam-medis' ? 'active' : '' }}">
            <a class="nav-link {{ Request::segment(3) == 'rekam-medis' ? 'active' : '' }}" id="custom-tabs-one-rm-tab"
                href="{{ route('pendaftaran.suami-istri') }}" wire:navigate>Suami / Istri</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="custom-tabs-two-data-rekam-medis-tab" data-toggle="pill"
                href="#custom-tabs-two-data-rekam-medis" role="tab" aria-controls="custom-tabs-two-data-rekam-medis"
                aria-selected="false">Anak</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="custom-tabs-two-riwayat-rekam-medis-tab" data-toggle="pill"
                href="#custom-tabs-two-riwayat-rekam-medis" role="tab"
                aria-controls="custom-tabs-two-riwayat-rekam-medis" aria-selected="false">Orang Tua</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="custom-tabs-two-riwayat-rekam-medis-tab" data-toggle="pill"
                href="#custom-tabs-two-riwayat-rekam-medis" role="tab"
                aria-controls="custom-tabs-two-riwayat-rekam-medis" aria-selected="false">Saudara Kandung</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="custom-tabs-two-riwayat-rekam-medis-tab" data-toggle="pill"
                href="#custom-tabs-two-riwayat-rekam-medis" role="tab"
                aria-controls="custom-tabs-two-riwayat-rekam-medis" aria-selected="false">Keluarga / Kenalan</a>
        </li>

    </ul>
</div>
