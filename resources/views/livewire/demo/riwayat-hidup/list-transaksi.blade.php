<div class="card-header p-0 pt-1">
    <ul class="nav nav-tabs" id="custom-tabs-two-transaksi-tab" role="tablist">
        <li class="nav-item {{ Request::segment(2) == 'sekolah' ? 'active' : '' }}">
            <a class="nav-link {{ Request::segment(2) == 'sekolah' ? 'active' : '' }}" id="custom-tabs-one-rm-tab"
                href="{{ route('pendaftaran.sekolah') }}" wire:navigate>Sekolah</a>
        </li>
        <li class="nav-item {{ Request::segment(2) == 'kursus' ? 'active' : '' }}">
            <a class="nav-link {{ Request::segment(2) == 'kursus' ? 'active' : '' }}" id="custom-tabs-one-rm-tab"
                href="{{ route('pendaftaran.kursus') }}" wire:navigate>Kursus</a>
        </li>
        <li class="nav-item {{ Request::segment(2) == 'pengalaman-kerja' ? 'active' : '' }}">
            <a class="nav-link {{ Request::segment(2) == 'pengalaman-kerja' ? 'active' : '' }}"
                id="custom-tabs-one-rm-tab" href="{{ route('pendaftaran.pengalaman-kerja') }}" wire:navigate>Pengalaman
                Kerja</a>
        </li>
        <li class="nav-item {{ Request::segment(2) == 'pengalaman-luar-negeri' ? 'active' : '' }}">
            <a class="nav-link {{ Request::segment(2) == 'pengalaman-luar-negeri' ? 'active' : '' }}"
                id="custom-tabs-one-rm-tab" href="{{ route('pendaftaran.pengalaman-luar-negeri') }}"
                wire:navigate>Pengalaman Di Luar
                Negeri</a>
        </li>
        <li class="nav-item {{ Request::segment(2) == 'referensi' ? 'active' : '' }}">
            <a class="nav-link {{ Request::segment(2) == 'referensi' ? 'active' : '' }}"
                href="{{ route('pendaftaran.referensi') }}" wire:navigate>Referensi</a>
        </li>
        <li class="nav-item {{ Request::segment(2) == 'pengalaman-berorganisasi' ? 'active' : '' }}">
            <a class="nav-link {{ Request::segment(2) == 'pengalaman-berorganisasi' ? 'active' : '' }}"
                id="custom-tabs-one-rm-tab" href="{{ route('pendaftaran.pengalaman-berorganisasi') }}"
                wire:navigate>Pengalaman
                Berorganisasi</a>
        </li>

    </ul>
</div>
