<div class="card-header p-0 pt-1">
    <ul class="nav nav-tabs" id="custom-tabs-two-transaksi-tab" role="tablist">
        <li class="nav-item {{ Request::segment(2) == 'suami-istri' ? 'active' : '' }}">
            <a class="nav-link {{ Request::segment(2) == 'suami-istri' ? 'active' : '' }}" id="custom-tabs-one-rm-tab"
                href="{{ route('pendaftaran.suami-istri') }}" wire:navigate>Suami / Istri</a>
        </li>
        <li class="nav-item {{ Request::segment(2) == 'anak' ? 'active' : '' }}">
            <a class="nav-link {{ Request::segment(2) == 'anak' ? 'active' : '' }}" id="custom-tabs-one-rm-tab"
                href="{{ route('pendaftaran.anak') }}" wire:navigate>Anak</a>
        </li>
        <li class="nav-item {{ Request::segment(2) == 'orangtua' ? 'active' : '' }}">
            <a class="nav-link {{ Request::segment(2) == 'orangtua' ? 'active' : '' }}" id="custom-tabs-one-rm-tab"
                href="{{ route('pendaftaran.orangtua') }}" wire:navigate>Orangtua</a>
        </li>
        <li class="nav-item {{ Request::segment(2) == 'saudara' ? 'active' : '' }}">
            <a class="nav-link {{ Request::segment(2) == 'saudara' ? 'active' : '' }}" id="custom-tabs-one-rm-tab"
                href="{{ route('pendaftaran.saudara') }}" wire:navigate>Saudara Kandung</a>
        </li>
        <li class="nav-item {{ Request::segment(2) == 'kenalan' ? 'active' : '' }}">
            <a class="nav-link {{ Request::segment(2) == 'kenalan' ? 'active' : '' }}" id="custom-tabs-one-rm-tab"
                href="{{ route('pendaftaran.kenalan') }}" wire:navigate>Keluarga / Kenalan</a>
        </li>

    </ul>
</div>
