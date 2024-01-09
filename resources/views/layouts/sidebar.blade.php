      <!-- Preloader --> {{-- <div class="preloader flex-column justify-content-center align-items-center">
          <img class="animation__shake" src="{{ asset('AdminLTE/dist/img/AdminLTELogo.png') }}" alt="AdminLTELogo"
              height="60" width="60">
      </div> --}}

      <!-- Navbar -->
      <nav class="main-header navbar navbar-expand navbar-white navbar-light">
          <!-- Left navbar links -->
          <ul class="navbar-nav">
              <li class="nav-item">
                  <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
              </li>
          </ul>

          <!-- Right navbar links -->
          <ul class="ml-auto navbar-nav">
              <li class="nav-item">
                  <a class="nav-link" href="{{ route('logout') }}"
                      onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                      <div class="d-flex align-items-center">
                          <div class="ms-3"><i class="mr-2 fas fa-sign-out-alt"></i></i>Keluar</div>
                      </div>
                      <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                          @csrf
                      </form>
                  </a>
              </li>
          </ul>
      </nav>
      <!-- /.navbar -->

      <!-- Main Sidebar Container -->
      <aside class="main-sidebar sidebar-light-success elevation-4">
          <!-- Brand Logo -->
          <a href="{{ route('dashboard') }}" class="brand-link">
              <img src="{{ asset(tampil_logo()) }}" class="brand-image img-circle elevation-3" style="opacity: .8">
              <span class="brand-text font-weight-light">E-Rekam Medis</span>
          </a>

          <!-- Sidebar -->
          <div class="sidebar">
              <!-- Sidebar user panel (optional) -->
              <div class="pb-3 mt-3 mb-3 user-panel d-flex">
                  <div class="image">
                      <img src="{{ asset('AdminLTE/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2"
                          alt="User Image">
                  </div>
                  <div class="info">
                      <a href="#" class="d-block">{{ Auth()->user()->name }}</a>
                  </div>
              </div>

              <!-- Sidebar Menu -->
              <nav class="mt-2">
                  <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                      data-accordion="false">
                      <!-- Add icons to the links using the .nav-icon class
           with font-awesome or any other icon font library -->
                      <li class="nav-item">
                          <a href="{{ route('dashboard') }}"
                              class="nav-link  {{ Request::segment(1) == 'dashboard' ? 'active' : '' }}{{ Request::segment(1) == '' ? 'active' : '' }}">
                              <i class="nav-icon fas fa-home"></i>
                              <p>
                                  Beranda
                              </p>
                          </a>
                      </li>
                      @permission('master-read')
                          <li
                              class="nav-item
                          {{ request()->is('master/*') ? 'menu-is-opening menu-open' : '' }}">
                              <a href="#" class="nav-link  {{ request()->is('master/*') ? 'active' : '' }}">
                                  <i class="nav-icon fa fa-desktop"></i>
                                  <p>
                                      Master
                                      <i class="right fas fa-angle-left"></i>
                                  </p>
                              </a>
                              <ul class="nav nav-treeview">
                                  <li
                                      class="nav-item
                              {{ Request::segment(2) == 'permission' ? 'menu-is-opening menu-open' : '' }}
                              {{ Request::segment(2) == 'role' ? 'menu-is-opening menu-open' : '' }}
                              {{ Request::segment(2) == 'role-index' ? 'menu-is-opening menu-open' : '' }}
                              {{ Request::segment(2) == 'user-index' ? 'menu-is-opening menu-open' : '' }}
                              {{ Request::segment(2) == 'user' ? 'menu-is-opening menu-open' : '' }}
                              ">
                                      <a href="#"
                                          class="nav-link
                                  {{ Request::segment(2) == 'permission' ? 'active' : '' }}
                                  {{ Request::segment(2) == 'role' ? 'active' : '' }}
                                  {{ Request::segment(2) == 'role-index' ? 'active' : '' }}
                                  {{ Request::segment(2) == 'user-index' ? 'active' : '' }}
                                  {{ Request::segment(2) == 'user' ? 'active' : '' }}
                                  ">
                                          <i class="ml-2 fa fa-folder nav-icon"></i>
                                          <p>
                                              Admin
                                              <i class="fas fa-angle-left right"></i>
                                          </p>
                                      </a>

                                      <ul class="nav nav-treeview">
                                          <li class="nav-item">
                                              <a href="{{ route('master.permission') }}"
                                                  class="nav-link {{ Request::segment(2) == 'permission' ? 'active' : '' }}">
                                                  @if (Request::segment(2) == 'permission')
                                                      <i class="ml-3 far fa-dot-circle nav-icon"></i>
                                                  @else
                                                      <i class="ml-3 far fa-circle nav-icon"></i>
                                                  @endif
                                                  <p>Permission</p>
                                              </a>
                                          </li>
                                          <li class="nav-item">
                                              <a href="{{ route('master.role.index') }}"
                                                  class="nav-link
                                              {{ Request::segment(2) == 'role-index' ? 'active' : '' }}
                                              {{ Request::segment(2) == 'role' ? 'active' : '' }}
                                              ">
                                                  @if (Request::segment(2) == 'role-index')
                                                      <i class="ml-3 far fa-dot-circle nav-icon"></i>
                                                  @elseif(Request::segment(2) == 'role')
                                                      <i class="ml-3 far fa-dot-circle nav-icon"></i>
                                                  @else
                                                      <i class="ml-3 far fa-circle nav-icon"></i>
                                                  @endif
                                                  <p>Role</p>
                                              </a>
                                          </li>
                                          <li class="nav-item">
                                              <a href="{{ route('master.user.index') }}"
                                                  class="nav-link
                                              {{ Request::segment(2) == 'user-index' ? 'active' : '' }}
                                              {{ Request::segment(2) == 'user' ? 'active' : '' }}
                                              ">
                                                  @if (Request::segment(2) == 'user-index')
                                                      <i class="ml-3 far fa-dot-circle nav-icon"></i>
                                                  @elseif(Request::segment(2) == 'user')
                                                      <i class="ml-3 far fa-dot-circle nav-icon"></i>
                                                  @else
                                                      <i class="ml-3 far fa-circle nav-icon"></i>
                                                  @endif
                                                  <p>User</p>
                                              </a>
                                          </li>

                                      </ul>
                                  </li>
                              </ul>
                              <ul class="nav nav-treeview">
                                  <li
                                      class="nav-item
                              {{ Request::segment(2) == 'spesialis' ? 'menu-is-opening menu-open' : '' }}
                              {{ Request::segment(2) == 'dokter' ? 'menu-is-opening menu-open' : '' }}
                              {{ Request::segment(2) == 'paramedis' ? 'menu-is-opening menu-open' : '' }}
                              {{ Request::segment(2) == 'poliklinik' ? 'menu-is-opening menu-open' : '' }}
                              {{ Request::segment(2) == 'laboratorium' ? 'menu-is-opening menu-open' : '' }}
                              {{ Request::segment(2) == 'radiologi' ? 'menu-is-opening menu-open' : '' }}
                              {{ Request::segment(2) == 'tindakan-medis' ? 'menu-is-opening menu-open' : '' }}
                              {{ Request::segment(2) == 'jenis-penyakit' ? 'menu-is-opening menu-open' : '' }}
                              {{ Request::segment(2) == 'bangsal' ? 'menu-is-opening menu-open' : '' }}
                              {{ Request::segment(2) == 'kelas' ? 'menu-is-opening menu-open' : '' }}
                              {{ Request::segment(2) == 'kamar' ? 'menu-is-opening menu-open' : '' }}
                              {{ Request::segment(2) == 'tempat-tidur' ? 'menu-is-opening menu-open' : '' }}
                              {{ Request::segment(2) == 'list-jadwal-praktek' ? 'menu-is-opening menu-open' : '' }}
                              {{ Request::segment(2) == 'jadwal-praktek' ? 'menu-is-opening menu-open' : '' }}
                              {{ Request::segment(2) == 'tarif' ? 'menu-is-opening menu-open' : '' }}
                              ">
                                      <a href="#"
                                          class="nav-link
                                      {{ Request::segment(2) == 'spesialis' ? 'active' : '' }}
                                      {{ Request::segment(2) == 'dokter' ? 'active' : '' }}
                                      {{ Request::segment(2) == 'paramedis' ? 'active' : '' }}
                                      {{ Request::segment(2) == 'poliklinik' ? 'active' : '' }}
                                      {{ Request::segment(2) == 'laboratorium' ? 'active' : '' }}
                                      {{ Request::segment(2) == 'radiologi' ? 'active' : '' }}
                                      {{ Request::segment(2) == 'tindakan-medis' ? 'active' : '' }}
                                      {{ Request::segment(2) == 'jenis-penyakit' ? 'active' : '' }}
                                      {{ Request::segment(2) == 'bangsal' ? 'active' : '' }}
                                      {{ Request::segment(2) == 'kelas' ? 'active' : '' }}
                                      {{ Request::segment(2) == 'kamar' ? 'active' : '' }}
                                      {{ Request::segment(2) == 'tempat-tidur' ? 'active' : '' }}
                                      {{ Request::segment(2) == 'list-jadwal-praktek' ? 'active' : '' }}
                                      {{ Request::segment(2) == 'jadwal-praktek' ? 'active' : '' }}
                                      {{ Request::segment(2) == 'tarif' ? 'active' : '' }}
                                      ">
                                          <i class="ml-2 fa fa-folder nav-icon"></i>
                                          <p>
                                              Data Medis
                                              <i class="fas fa-angle-left right"></i>
                                          </p>
                                      </a>
                                      <ul class="nav nav-treeview">
                                          <li class="nav-item">
                                              <a href="{{ route('master.spesialis') }}" wire:navigate
                                                  class="nav-link  {{ Request::segment(2) == 'spesialis' ? 'active' : '' }}">
                                                  @if (Request::segment(2) == 'spesialis')
                                                      <i class="ml-3 far fa-dot-circle nav-icon"></i>
                                                  @else
                                                      <i class="ml-3 far fa-circle nav-icon"></i>
                                                  @endif
                                                  <p>Spesialis</p>
                                              </a>
                                          </li>
                                          <li class="nav-item">
                                              <a href="{{ route('master.dokter') }}" wire:navigate
                                                  class="nav-link {{ Request::segment(2) == 'dokter' ? 'active' : '' }}">
                                                  @if (Request::segment(2) == 'dokter')
                                                      <i class="ml-3 far fa-dot-circle nav-icon"></i>
                                                  @else
                                                      <i class="ml-3 far fa-circle nav-icon"></i>
                                                  @endif
                                                  <p>Dokter</p>
                                              </a>
                                          </li>
                                          <li class="nav-item">
                                              <a href="{{ route('master.paramedis') }}" wire:navigate
                                                  class="nav-link {{ Request::segment(2) == 'paramedis' ? 'active' : '' }}">
                                                  @if (Request::segment(2) == 'paramedis')
                                                      <i class="ml-3 far fa-dot-circle nav-icon"></i>
                                                  @else
                                                      <i class="ml-3 far fa-circle nav-icon"></i>
                                                  @endif
                                                  <p>Paramedis</p>
                                              </a>
                                          </li>
                                          <li
                                              class="nav-item
                                          {{ Request::segment(2) == 'poliklinik' ? 'menu-is-opening menu-open' : '' }}
                                          {{ Request::segment(2) == 'laboratorium' ? 'menu-is-opening menu-open' : '' }}
                                          {{ Request::segment(2) == 'radiologi' ? 'menu-is-opening menu-open' : '' }}
                                          ">
                                              <a href="#"
                                                  class="nav-link {{ Request::segment(2) == 'poliklinik' ? 'active' : '' }}">
                                                  <i class="ml-3 fa fa-folder nav-icon"></i>
                                                  <p>Instalasi Medis
                                                      <i class="fas fa-angle-left right"></i>
                                                  </p>
                                              </a>
                                              <ul class="nav nav-treeview">
                                                  <li class="nav-item">
                                                      <a href="{{ route('master.poliklinik') }}" wire:navigate
                                                          class="nav-link  {{ Request::segment(2) == 'poliklinik' ? 'active' : '' }}">
                                                          @if (Request::segment(2) == 'poliklinik')
                                                              <i class="ml-5 far fa-dot-circle nav-icon"></i>
                                                          @else
                                                              <i class="ml-5 far fa-circle nav-icon"></i>
                                                          @endif
                                                          <p>Poliklinik</p>
                                                      </a>
                                                  </li>
                                                  <li class="nav-item">
                                                      <a href="{{ route('master.laboratorium') }}" wire:navigate
                                                          class="nav-link  {{ Request::segment(2) == 'laboratorium' ? 'active' : '' }}">
                                                          @if (Request::segment(2) == 'laboratorium')
                                                              <i class="ml-5 far fa-dot-circle nav-icon"></i>
                                                          @else
                                                              <i class="ml-5 far fa-circle nav-icon"></i>
                                                          @endif
                                                          <p>Laboratorium</p>
                                                      </a>
                                                  </li>
                                                  <li class="nav-item">
                                                      <a href="{{ route('master.radiologi') }}" wire:navigate
                                                          class="nav-link  {{ Request::segment(2) == 'radiologi' ? 'active' : '' }}">
                                                          @if (Request::segment(2) == 'radiologi')
                                                              <i class="ml-5 far fa-dot-circle nav-icon"></i>
                                                          @else
                                                              <i class="ml-5 far fa-circle nav-icon"></i>
                                                          @endif
                                                          <p>Radiologi</p>
                                                      </a>
                                                  </li>
                                              </ul>
                                          </li>

                                          <li class="nav-item">
                                              <a href="{{ route('master.tindakan-medis') }}" wire:navigate
                                                  class="nav-link {{ Request::segment(2) == 'tindakan-medis' ? 'active' : '' }}">
                                                  @if (Request::segment(2) == 'tindakan-medis')
                                                      <i class="ml-3 far fa-dot-circle nav-icon"></i>
                                                  @else
                                                      <i class="ml-3 far fa-circle nav-icon"></i>
                                                  @endif
                                                  <p>Tindakan Medis</p>
                                              </a>
                                          </li>
                                          <li class="nav-item">
                                              <a href="{{ route('master.jenis-penyakit') }}" wire:navigate
                                                  class="nav-link {{ Request::segment(2) == 'jenis-penyakit' ? 'active' : '' }}">
                                                  @if (Request::segment(2) == 'jenis-penyakit')
                                                      <i class="ml-3 far fa-dot-circle nav-icon"></i>
                                                  @else
                                                      <i class="ml-3 far fa-circle nav-icon"></i>
                                                  @endif
                                                  <p>Jenis Penyakit</p>
                                              </a>
                                          </li>
                                          <li
                                              class="nav-item
                                          {{ Request::segment(2) == 'bangsal' ? 'menu-is-opening menu-open' : '' }}
                                          {{ Request::segment(2) == 'kelas' ? 'menu-is-opening menu-open' : '' }}
                                          {{ Request::segment(2) == 'kamar' ? 'menu-is-opening menu-open' : '' }}
                                          {{ Request::segment(2) == 'tempat-tidur' ? 'menu-is-opening menu-open' : '' }}
                                          ">
                                              <a href="#"
                                                  class="nav-link
                                              {{ Request::segment(2) == 'bangsal' ? 'active' : '' }}
                                              {{ Request::segment(2) == 'kelas' ? 'active' : '' }}
                                              {{ Request::segment(2) == 'kamar' ? 'active' : '' }}
                                              {{ Request::segment(2) == 'tempat-tidurs' ? 'active' : '' }}
                                              ">
                                                  <i class="ml-3 fa fa-folder nav-icon"></i>
                                                  <p>Akomodasi
                                                      <i class="fas fa-angle-left right"></i>
                                                  </p>
                                              </a>
                                              <ul class="nav nav-treeview">
                                                  <li class="nav-item">
                                                      <a href="{{ route('master.bangsal') }}" wire:navigate
                                                          class="nav-link  {{ Request::segment(2) == 'bangsal' ? 'active' : '' }}">
                                                          @if (Request::segment(2) == 'bangsal')
                                                              <i class="ml-5 far fa-dot-circle nav-icon"></i>
                                                          @else
                                                              <i class="ml-5 far fa-circle nav-icon"></i>
                                                          @endif
                                                          <p>Bangsal</p>
                                                      </a>
                                                  </li>
                                                  <li class="nav-item">
                                                      <a href="{{ route('master.kelas') }}" wire:navigate
                                                          class="nav-link {{ Request::segment(2) == 'kelas' ? 'active' : '' }}">
                                                          @if (Request::segment(2) == 'kelas')
                                                              <i class="ml-5 far fa-dot-circle nav-icon"></i>
                                                          @else
                                                              <i class="ml-5 far fa-circle nav-icon"></i>
                                                          @endif
                                                          <p>Kelas</p>
                                                      </a>
                                                  </li>
                                                  <li class="nav-item">
                                                      <a href="{{ route('master.kamar') }}" wire:navigate
                                                          class="nav-link {{ Request::segment(2) == 'kamar' ? 'active' : '' }}">
                                                          @if (Request::segment(2) == 'kamar')
                                                              <i class="ml-5 far fa-dot-circle nav-icon"></i>
                                                          @else
                                                              <i class="ml-5 far fa-circle nav-icon"></i>
                                                          @endif
                                                          <p>Kamar</p>
                                                      </a>
                                                  </li>
                                                  <li class="nav-item">
                                                      <a href="{{ route('master.tempat-tidur') }}" wire:navigate
                                                          class="nav-link {{ Request::segment(2) == 'tempat-tidur' ? 'active' : '' }}">
                                                          @if (Request::segment(2) == 'tempat-tidur')
                                                              <i class="ml-5 far fa-dot-circle nav-icon"></i>
                                                          @else
                                                              <i class="ml-5 far fa-circle nav-icon"></i>
                                                          @endif
                                                          <p>Tempat Tidur</p>
                                                      </a>
                                                  </li>
                                              </ul>
                                          </li>
                                          <li
                                              class="nav-item
                                          {{ Request::segment(2) == 'tarif' ? 'menu-is-opening menu-open' : '' }}
                                          ">
                                              <a href="#"
                                                  class="nav-link
                                              {{ Request::segment(2) == 'tarif' ? 'active' : '' }}
                                              ">
                                                  <i class="ml-3 fa fa-folder nav-icon"></i>
                                                  <p>Tarif
                                                      <i class="fas fa-angle-left right"></i>
                                                  </p>
                                              </a>
                                              <ul class="nav nav-treeview">
                                                  <li class="nav-item">
                                                      <a href="{{ route('master.tarif.general') }}" wire:navigate
                                                          class="nav-link  {{ Request::segment(3) == 'general' ? 'active' : '' }}">
                                                          @if (Request::segment(3) == 'general')
                                                              <i class="ml-5 far fa-dot-circle nav-icon"></i>
                                                          @else
                                                              <i class="ml-5 far fa-circle nav-icon"></i>
                                                          @endif
                                                          <p>General</p>
                                                      </a>
                                                  </li>
                                                  <li class="nav-item">
                                                      <a href="{{ route('master.tarif.paramedis') }}" wire:navigate
                                                          class="nav-link  {{ Request::segment(3) == 'paramedis' ? 'active' : '' }}">
                                                          @if (Request::segment(3) == 'paramedis')
                                                              <i class="ml-5 far fa-dot-circle nav-icon"></i>
                                                          @else
                                                              <i class="ml-5 far fa-circle nav-icon"></i>
                                                          @endif
                                                          <p>Paramedis</p>
                                                      </a>
                                                  </li>
                                                  <li class="nav-item">
                                                      <a href="{{ route('master.tarif.unit-medis') }}" wire:navigate
                                                          class="nav-link  {{ Request::segment(3) == 'unit-medis' ? 'active' : '' }}">
                                                          @if (Request::segment(3) == 'unit-medis')
                                                              <i class="ml-5 far fa-dot-circle nav-icon"></i>
                                                          @else
                                                              <i class="ml-5 far fa-circle nav-icon"></i>
                                                          @endif
                                                          <p>Unit Medis</p>
                                                      </a>
                                                  </li>
                                                  <li class="nav-item">
                                                      <a href="{{ route('master.tarif.kelas') }}" wire:navigate
                                                          class="nav-link  {{ Request::segment(3) == 'kelas' ? 'active' : '' }}">
                                                          @if (Request::segment(3) == 'kelas')
                                                              <i class="ml-5 far fa-dot-circle nav-icon"></i>
                                                          @else
                                                              <i class="ml-5 far fa-circle nav-icon"></i>
                                                          @endif
                                                          <p>Kelas</p>
                                                      </a>
                                                  </li>
                                                  <li class="nav-item">
                                                      <a href="{{ route('master.tarif.tindakan-medis') }}" wire:navigate
                                                          class="nav-link  {{ Request::segment(3) == 'tindakan-medis' ? 'active' : '' }}">
                                                          @if (Request::segment(3) == 'tindakan-medis')
                                                              <i class="ml-5 far fa-dot-circle nav-icon"></i>
                                                          @else
                                                              <i class="ml-5 far fa-circle nav-icon"></i>
                                                          @endif
                                                          <p>Tindakan Medis</p>
                                                      </a>
                                                  </li>
                                                  <li class="nav-item">
                                                      <a href="{{ route('master.tarif.inventori') }}" wire:navigate
                                                          class="nav-link  {{ Request::segment(3) == 'inventori' ? 'active' : '' }}">
                                                          @if (Request::segment(3) == 'inventori')
                                                              <i class="ml-5 far fa-dot-circle nav-icon"></i>
                                                          @else
                                                              <i class="ml-5 far fa-circle nav-icon"></i>
                                                          @endif
                                                          <p>Inventori</p>
                                                      </a>
                                                  </li>

                                              </ul>
                                          </li>
                                          <li class="nav-item">
                                              <a href="{{ route('master.jadwal-praktek.index') }}" wire:navigate
                                                  class="nav-link {{ Request::segment(2) == 'list-jadwal-praktek' ? 'active' : '' }}{{ Request::segment(2) == 'jadwal-praktek' ? 'active' : '' }}">
                                                  @if (Request::segment(2) == 'jadwal-praktek' || Request::segment(2) == 'list-jadwal-praktek')
                                                      <i class="ml-3 far fa-dot-circle nav-icon"></i>
                                                  @else
                                                      <i class="ml-3 far fa-circle nav-icon"></i>
                                                  @endif
                                                  <p>Jadwal Praktek</p>
                                              </a>
                                          </li>
                                      </ul>
                                  </li>
                              </ul>
                              <ul class="nav nav-treeview">
                                  <li
                                      class="nav-item
                                   {{ Request::segment(2) == 'data-puskesmas' ? 'menu-is-opening menu-open' : '' }}">
                                      <a href="#"
                                          class="nav-link
                                  {{ Request::segment(2) == 'data-puskesmas' ? 'active' : '' }}
                                  ">
                                          <i class="ml-2 fa fa-folder nav-icon"></i>
                                          <p>
                                              Data Umum
                                              <i class="fas fa-angle-left right"></i>
                                          </p>
                                      </a>

                                      <ul class="nav nav-treeview">
                                          <li class="nav-item">
                                              <a href="{{ route('master.data-puskesmas') }}"
                                                  class="nav-link  {{ Request::segment(2) == 'data-puskesmas' ? 'active' : '' }}"
                                                  wire:navigate>
                                                  @if (Request::segment(2) == 'data-puskesmas')
                                                      <i class="ml-3 far fa-dot-circle nav-icon"></i>
                                                  @else
                                                      <i class="ml-3 far fa-circle nav-icon"></i>
                                                  @endif
                                                  <p>Data Puskesmas</p>
                                              </a>
                                          </li>
                                      </ul>
                                  </li>
                              </ul>
                              <ul class="nav nav-treeview">

                              </ul>
                          </li>
                      @endpermission
                      @permission('pendaftaran-create')
                          <li class="nav-item {{ request()->is('pasien/*') ? 'menu-is-opening menu-open' : '' }}">
                              <a href="#" class="nav-link {{ request()->is('pasien/*') ? 'active' : '' }}">
                                  <i class="nav-icon fas fa-user-circle"></i>
                                  <p>
                                      Pasien
                                      <i class="right fas fa-angle-left"></i>
                                  </p>
                              </a>
                              <ul class="nav nav-treeview">
                                  <li class="nav-item">
                                      <a href="{{ route('pasien.index') }}"
                                          class="nav-link {{ request()->is('pasien/list') ? 'active' : '' }}">
                                          @if (request()->is('pasien/list') ? 'active' : '')
                                              <i class="ml-3 far fa-dot-circle nav-icon"></i>
                                          @else
                                              <i class="ml-3 far fa-circle nav-icon"></i>
                                          @endif
                                          <p>Data Pasien</p>
                                      </a>
                                  </li>
                                  <li class="nav-item">
                                      <a href="{{ route('pasien.pendaftaran') }}" wire:navigate
                                          class="nav-link
                                  {{ request()->is('pasien/pendaftaran') ? 'active' : '' }}">
                                          @if (request()->is('pasien/pendaftaran') ? 'active' : '')
                                              <i class="ml-3 far fa-dot-circle nav-icon"></i>
                                          @else
                                              <i class="ml-3 far fa-circle nav-icon"></i>
                                          @endif
                                          <p>Pendaftaran Pasien</p>
                                      </a>
                                  </li>
                                  {{-- <li class="nav-item">
                                  <a href="./index3.html" class="nav-link">
                                      <i class="ml-3 far fa-circle nav-icon"></i>
                                      <p>View Pasien</p>
                                  </a>
                              </li> --}}
                                  {{-- <li class="nav-item">
                                  <a href="./index3.html" class="nav-link">
                                      <i class="ml-3 far fa-circle nav-icon"></i>
                                      <p>Pasien Rujukan</p>
                                  </a>
                              </li> --}}
                              </ul>
                          </li>
                      @endpermission
                      @permission('rawat_jalan-create')

                          <li
                              class="nav-item
                      {{ request()->is('rawat-jalan*') ? 'menu-is-opening menu-open' : '' }}
                      {{ request()->is('transaksi/rawat-jalan*') ? 'menu-is-opening menu-open' : '' }}
                      {{ request()->is('registrasi/rawat-jalan') ? 'menu-is-opening menu-open' : '' }}
                      ">
                              <a href="#"
                                  class="nav-link
                            {{ request()->is('rawat-jalan*') ? 'active' : '' }}
                            {{ request()->is('transaksi/rawat-jalan*') ? 'active' : '' }}
                            {{ request()->is('registrasi/rawat-jalan') ? 'active' : '' }}
                          ">
                                  <i class="nav-icon fas fa-wheelchair"></i>
                                  <p>
                                      Rawat Jalan
                                      <i class="right fas fa-angle-left"></i>
                                  </p>
                              </a>
                              <ul class="nav nav-treeview">
                                  @permission('pendaftaran-create')
                                      <li class="nav-item">
                                          <a href="{{ route('registrasi.rawat-jalan') }}"
                                              class="nav-link @if (Request::is('registrasi/rawat-jalan*')) active @endif">
                                              @if (request()->is('registrasi/rawat-jalan') || request()->is('registrasi/rawat-jalan/*'))
                                                  <i class="ml-3 far fa-dot-circle nav-icon"></i>
                                              @else
                                                  <i class="ml-3 far fa-circle nav-icon"></i>
                                              @endif
                                              <p>Pendaftaran</p>
                                          </a>
                                      </li>
                                  @endpermission
                                  @permission('data_transaksi-create')
                                      <li class="nav-item">
                                          <a href="{{ route('transaksi.rawat-jalan.list') }}"
                                              class="nav-link @if (Request::is('transaksi/rawat-jalan/list')) active @endif">
                                              @if (request()->is('transaksi/rawat-jalan/list') ? 'active' : '')
                                                  <i class="ml-3 far fa-dot-circle nav-icon"></i>
                                              @else
                                                  <i class="ml-3 far fa-circle nav-icon"></i>
                                              @endif
                                              <p>Transaksi Rawat Jalan</p>
                                          </a>
                                      </li>
                                  @endpermission
                                  @permission('rekam_medis-create')
                                      <li class="nav-item">
                                          <a href="{{ route('transaksi.rawat-jalan.list', 'transaksi.rawat-jalan.rekam-medis') }}"
                                              class="nav-link {{ request()->is('transaksi/rawat-jalan/list/transaksi.rawat-jalan.rekam-medis') ? 'active' : '' }}
                                      {{ request()->is('transaksi/rawat-jalan/list/rekam-medis/*') ? 'active' : '' }}
                                      ">
                                              @if (request()->is('transaksi/rawat-jalan/list/transaksi.rawat-jalan.rekam-medis') ? 'active' : '')
                                                  <i class="ml-3 far fa-dot-circle nav-icon"></i>
                                              @else
                                                  <i class="ml-3 far fa-circle nav-icon"></i>
                                              @endif
                                              <p>Rekam Medis</p>
                                          </a>
                                      </li>
                                  @endpermission
                                  {{-- <li class="nav-item">
                                  <a href="./index3.html" class="nav-link">
                                      <i class="ml-3 far fa-circle nav-icon"></i>
                                      <p>CPPT</p>
                                  </a>
                              </li> --}}
                                  @permission('tindakan_medis-create')
                                      <li class="nav-item">
                                          <a href="{{ route('transaksi.rawat-jalan.list', 'transaksi.rawat-jalan.tindakan-medis') }}"
                                              class="nav-link {{ request()->is('transaksi/rawat-jalan/list/transaksi.rawat-jalan.tindakan-medis') ? 'active' : '' }}
                                        {{ request()->is('transaksi/rawat-jalan/list/tindakan-medis/*') ? 'active' : '' }}
                                        ">
                                              @if (request()->is('transaksi/rawat-jalan/list/transaksi.rawat-jalan.tindakan-medis') ? 'active' : '')
                                                  <i class="ml-3 far fa-dot-circle nav-icon"></i>
                                              @else
                                                  <i class="ml-3 far fa-circle nav-icon"></i>
                                              @endif
                                              <p>Tindakan Medis</p>
                                          </a>
                                      </li>
                                  @endpermission
                                  @permission('laboratorium-create')
                                      <li class="nav-item">
                                          <a href="{{ route('transaksi.rawat-jalan.list', 'transaksi.rawat-jalan.laboratorium') }}"
                                              class="nav-link {{ request()->is('transaksi/rawat-jalan/list/transaksi.rawat-jalan.laboratorium') ? 'active' : '' }}
                                        {{ request()->is('transaksi/rawat-jalan/list/laboratorium/*') ? 'active' : '' }}
                                        ">
                                              @if (request()->is('transaksi/rawat-jalan/list/transaksi.rawat-jalan.laboratorium') ? 'active' : '')
                                                  <i class="ml-3 far fa-dot-circle nav-icon"></i>
                                              @else
                                                  <i class="ml-3 far fa-circle nav-icon"></i>
                                              @endif
                                              <p>Laboratorium</p>
                                          </a>

                                      </li>
                                  @endpermission
                                  {{-- <li class="nav-item">
                                  <a href="./index3.html" class="nav-link">
                                      <i class="ml-3 far fa-circle nav-icon"></i>
                                      <p>Radiologi</p>
                                  </a>
                              </li> --}}
                                  @permission('resep-create')
                                      <li class="nav-item">
                                          <a href="{{ route('transaksi.rawat-jalan.list', 'transaksi.rawat-jalan.resep-obat') }}"
                                              class="nav-link {{ request()->is('transaksi/rawat-jalan/list/transaksi.rawat-jalan.resep-obat') ? 'active' : '' }}
                                      {{ request()->is('transaksi/rawat-jalan/list/resep-obat/*') ? 'active' : '' }}
                                      ">
                                              @if (request()->is('transaksi/rawat-jalan/list/transaksi.rawat-jalan.resep-obat') ? 'active' : '')
                                                  <i class="ml-3 far fa-dot-circle nav-icon"></i>
                                              @else
                                                  <i class="ml-3 far fa-circle nav-icon"></i>
                                              @endif
                                              <p>Resep/Obat</p>
                                          </a>

                                      </li>
                                  @endpermission
                              </ul>
                          </li>
                      @endpermission
                      @permission('rawat_inap-create')
                          <li
                              class="nav-item
                      {{ request()->is('rawat-inap*') ? 'menu-is-opening menu-open' : '' }}
                      {{ request()->is('transaksi/rawat-inap*') ? 'menu-is-opening menu-open' : '' }}
                      {{ request()->is('registrasi/rawat-inap') ? 'menu-is-opening menu-open' : '' }}
                      ">
                              <a href="#"
                                  class="nav-link
                          {{ request()->is('rawat-inap*') ? 'active' : '' }}
                          {{ request()->is('transaksi/rawat-inap*') ? 'active' : '' }}
                          {{ request()->is('registrasi/rawat-inap') ? 'active' : '' }}

                            ">
                                  <i class="nav-icon fas fa-bed"></i>
                                  <p>
                                      Rawat Inap
                                      <i class="right fas fa-angle-left"></i>
                                  </p>
                              </a>
                              <ul class="nav nav-treeview">
                                  {{-- <li class="nav-item">
                                  <a href="./index2.html" class="nav-link">
                                      <i class="ml-3 far fa-circle nav-icon"></i>
                                      <p>Booking</p>
                                  </a>
                              </li> --}}
                                  @permission('pendaftaran-create')
                                      <li class="nav-item">
                                          <a href="{{ route('registrasi.rawat-inap') }}"
                                              class="nav-link {{ request()->is('registrasi/rawat-inap') ? 'active' : '' }}">
                                              @if (request()->is('registrasi/rawat-inap'))
                                                  <i class="ml-3 far fa-dot-circle nav-icon"></i>
                                              @else
                                                  <i class="ml-3 far fa-circle nav-icon"></i>
                                              @endif
                                              <p>Pendaftaran</p>
                                          </a>
                                      </li>
                                  @endpermission
                                  @permission('data_transaksi-create')
                                      <li class="nav-item">
                                          <a href="{{ route('transaksi.rawat-inap.list') }}"
                                              class="nav-link @if (Request::is('transaksi/rawat-inap/list')) active @endif">
                                              @if (request()->is('transaksi/rawat-inap/list') ? 'active' : '')
                                                  <i class="ml-3 far fa-dot-circle nav-icon"></i>
                                              @else
                                                  <i class="ml-3 far fa-circle nav-icon"></i>
                                              @endif
                                              <p>Transaksi Rawat Inap</p>
                                          </a>
                                      </li>
                                  @endpermission
                                  @permission('rekam_medis-create')
                                      <li class="nav-item">
                                          <a href="{{ route('transaksi.rawat-inap.list', 'transaksi.rawat-inap.rekam-medis') }}"
                                              class="nav-link {{ request()->is('transaksi/rawat-inap/list/transaksi.rawat-inap.rekam-medis') ? 'active' : '' }}
                                    {{ request()->is('transaksi/rawat-inap/list/rekam-medis/*') ? 'active' : '' }}
                                    ">
                                              @if (request()->is('transaksi/rawat-inap/list/transaksi.rawat-inap.rekam-medis') ? 'active' : '')
                                                  <i class="ml-3 far fa-dot-circle nav-icon"></i>
                                              @else
                                                  <i class="ml-3 far fa-circle nav-icon"></i>
                                              @endif
                                              <p>Rekam Medis</p>
                                          </a>
                                      </li>
                                  @endpermission
                                  {{-- <li class="nav-item">
                                  <a href="./index3.html" class="nav-link">
                                      <i class="ml-3 far fa-circle nav-icon"></i>
                                      <p>CPPT</p>
                                  </a>
                              </li> --}}
                                  @permission('tindakan_medis-create')
                                      <li class="nav-item">
                                          <a href="{{ route('transaksi.rawat-inap.list', 'transaksi.rawat-inap.tindakan-medis') }}"
                                              class="nav-link  {{ request()->is('transaksi/rawat-inap/list/transaksi.rawat-inap.tindakan-medis') ? 'active' : '' }}">
                                              @if (request()->is('transaksi/rawat-inap/list/transaksi.rawat-inap.tindakan-medis') ? 'active' : '')
                                                  <i class="ml-3 far fa-dot-circle nav-icon"></i>
                                              @else
                                                  <i class="ml-3 far fa-circle nav-icon"></i>
                                              @endif
                                              <p>Tindakan Medis</p>
                                          </a>
                                      </li>
                                  @endpermission
                                  @permission('laboratorium-create')
                                      <li class="nav-item">
                                          <a href="{{ route('transaksi.rawat-inap.list', 'transaksi.rawat-inap.laboratorium') }}"
                                              class="nav-link {{ request()->is('transaksi/rawat-inap/list/transaksi.rawat-inap.laboratorium') ? 'active' : '' }}">
                                              @if (request()->is('transaksi/rawat-inap/list/transaksi.rawat-inap.laboratorium') ? 'active' : '')
                                                  <i class="ml-3 far fa-dot-circle nav-icon"></i>
                                              @else
                                                  <i class="ml-3 far fa-circle nav-icon"></i>
                                              @endif
                                              <p>Laboratorium</p>
                                          </a>
                                      </li>
                                  @endpermission
                                  {{-- <li class="nav-item">
                                  <a href="./index3.html" class="nav-link">
                                      <i class="ml-3 far fa-circle nav-icon"></i>
                                      <p>Radiologi</p>
                                  </a>
                              </li> --}}
                                  @permission('resep-create')
                                      <li class="nav-item">
                                          <a href="{{ route('transaksi.rawat-inap.list', 'transaksi.rawat-inap.resep-obat') }}"
                                              class="nav-link {{ request()->is('transaksi/rawat-inap/list/transaksi.rawat-inap.resep-obat') ? 'active' : '' }}">
                                              @if (request()->is('transaksi/rawat-inap/list/transaksi.rawat-inap.resep-obat') ? 'active' : '')
                                                  <i class="ml-3 far fa-dot-circle nav-icon"></i>
                                              @else
                                                  <i class="ml-3 far fa-circle nav-icon"></i>
                                              @endif
                                              <p>Resep/Obat</p>
                                          </a>

                                      </li>
                                  @endpermission
                                  {{-- <li class="nav-item">
                                  <a href="./index3.html" class="nav-link">
                                      <i class="ml-3 far fa-circle nav-icon"></i>
                                      <p>Bed Management</p>
                                  </a>
                              </li> --}}
                              </ul>
                          </li>
                      @endpermission
                      {{-- <li class="nav-item">
                          <a href="#" class="nav-link">
                              <i class="nav-icon fas fa-folder-open"></i>
                              <p>
                                  EMR
                                  <i class="right fas fa-angle-left"></i>
                              </p>
                          </a>
                          <ul class="nav nav-treeview">
                              <li class="nav-item">
                                  <a href="./index2.html" class="nav-link">
                                      <i class="ml-3 far fa-circle nav-icon"></i>
                                      <p>Rekam Medis</p>
                                  </a>
                              </li>
                              <li class="nav-item">
                                  <a href="./index.html" class="nav-link">
                                      <i class="ml-3 far fa-circle nav-icon"></i>
                                      <p>CPPT</p>
                                  </a>
                              </li>
                          </ul>
                      </li> --}}
                      {{-- <li class="nav-item">
                          <a href="#" class="nav-link">
                              <i class="nav-icon fas fa-user-md"></i>
                              <p>
                                  CPOE
                                  <i class="right fas fa-angle-left"></i>
                              </p>
                          </a>
                          <ul class="nav nav-treeview">
                              <li class="nav-item">
                                  <a href="./index2.html" class="nav-link">
                                      <i class="ml-3 far fa-circle nav-icon"></i>
                                      <p>Tindakan Medis</p>
                                  </a>
                              </li>
                              <li class="nav-item">
                                  <a href="./index.html" class="nav-link">
                                      <i class="ml-3 far fa-circle nav-icon"></i>
                                      <p>Laboratorium</p>
                                  </a>
                              </li>
                              <li class="nav-item">
                                  <a href="./index.html" class="nav-link">
                                      <i class="ml-3 far fa-circle nav-icon"></i>
                                      <p>Radiologi</p>
                                  </a>
                              </li>
                              <li class="nav-item">
                                  <a href="./index.html" class="nav-link">
                                      <i class="ml-3 far fa-circle nav-icon"></i>
                                      <p>Resep/Obat</p>
                                  </a>
                              </li>
                          </ul>
                      </li> --}}
                      @permission('rekam_medis-create')
                          <li class="nav-item">
                              <a href="#" class="nav-link">
                                  <i class="nav-icon fas fa-copy"></i>
                                  <p>
                                      Rekam Medis
                                      <i class="right fas fa-angle-left"></i>
                                  </p>
                              </a>
                              <ul class="nav nav-treeview">
                                  <li class="nav-item">
                                      <a href="{{ route('list-rekam-medis') }}" class="nav-link">
                                          <i class="ml-3 far fa-circle nav-icon"></i>
                                          <p>Rekam Medis</p>
                                      </a>
                                  </li>
                                  {{-- <li class="nav-item">
                                  <a href="./index.html" class="nav-link">
                                      <i class="ml-3 far fa-circle nav-icon"></i>
                                      <p>Tracking RM</p>
                                  </a>
                              </li> --}}
                              </ul>
                          </li>
                      @endpermission
                      @permission('farmasi-create')
                          <li class="nav-item  {{ request()->is('farmasi*') ? 'menu-is-opening menu-open' : '' }}">
                              <a href="#" class="nav-link">
                                  <i class="nav-icon fas fa-flask"></i>
                                  <p>
                                      Farmasi
                                      <i class="right fas fa-angle-left"></i>
                                  </p>
                              </a>
                              <ul class="nav nav-treeview">
                                  <li class="nav-item">
                                      <a href="{{ route('farmasi.list') }}" class="nav-link" wire:navigate>
                                          @if (request()->is('farmasi/list') ? 'active' : '')
                                              <i class="ml-3 far fa-dot-circle nav-icon"></i>
                                          @else
                                              <i class="ml-3 far fa-circle nav-icon"></i>
                                          @endif
                                          <p>Proses Resep</p>
                                      </a>
                                  </li>
                                  {{-- <li class="nav-item">
                                  <a href="./index.html" class="nav-link">
                                      <i class="ml-3 far fa-circle nav-icon"></i>
                                      <p>Retur</p>
                                  </a>
                              </li> --}}
                                  {{-- <li class="nav-item">
                                  <a href="./index.html" class="nav-link">
                                      <i class="ml-3 far fa-circle nav-icon"></i>
                                      <p>Penjualan Bebas</p>
                                  </a>
                              </li> --}}
                                  <li class="nav-item">
                                      <a href="{{ route('farmasi.pengambilan') }}" class="nav-link">
                                          @if (request()->is('farmasi/pengambilan') ? 'active' : '')
                                              <i class="ml-3 far fa-dot-circle nav-icon"></i>
                                          @else
                                              <i class="ml-3 far fa-circle nav-icon"></i>
                                          @endif
                                          <p>Pengambilan Obat</p>
                                      </a>
                                  </li>
                              </ul>
                          </li>
                      @endpermission
                      @permission('kasir-create')
                          <li
                              class="nav-item
                      {{ request()->is('keuangan*') ? 'menu-is-opening menu-open' : '' }}">
                              <a href="#" class="nav-link  {{ request()->is('keuangan*') ? 'active' : '' }}">
                                  <i class="nav-icon fas fa-money-check-alt"></i>
                                  <p>
                                      Keuangan
                                      <i class="right fas fa-angle-left"></i>
                                  </p>
                              </a>
                              <ul class="nav nav-treeview">
                                  <li
                                      class="nav-item
                                  {{ request()->is('keuangan*') ? 'menu-is-opening menu-open' : '' }}
                                ">
                                      <a href="#"
                                          class="nav-link
                                      {{ request()->is('keuangan*') ? 'active' : '' }}
                                ">
                                          <i class="ml-3 fa fa-folder nav-icon"></i>
                                          <p>Proses Pembayaran
                                              <i class="fas fa-angle-left right"></i>
                                          </p>
                                      </a>
                                      <ul class="nav nav-treeview">
                                          <li class="nav-item">
                                              <a href="{{ route('keuangan.proses-pembayaran.rawat-jalan.list') }}"
                                                  wire:navigate
                                                  class="nav-link  {{ Request::segment(3) == 'rawat-jalan' ? 'active' : '' }}">
                                                  @if (Request::segment(3) == 'rawat-jalan')
                                                      <i class="ml-5 far fa-dot-circle nav-icon"></i>
                                                  @else
                                                      <i class="ml-5 far fa-circle nav-icon"></i>
                                                  @endif
                                                  <p>Rawat Jalan</p>
                                              </a>
                                          </li>
                                          <li class="nav-item">
                                              <a href="{{ route('keuangan.proses-pembayaran.rawat-inap.list') }}"
                                                  wire:navigate
                                                  class="nav-link {{ Request::segment(3) == 'rawat-inap' ? 'active' : '' }}">
                                                  @if (Request::segment(3) == 'rawat-inap')
                                                      <i class="ml-5 far fa-dot-circle nav-icon"></i>
                                                  @else
                                                      <i class="ml-5 far fa-circle nav-icon"></i>
                                                  @endif
                                                  <p>Rawat Inap</p>
                                              </a>
                                          </li>
                                      </ul>
                                  </li>
                              </ul>
                          </li>
                      @endpermission
                      @permission('inventori-create')
                          <li
                              class="nav-item
                        {{ request()->is('inventori*') ? 'menu-is-opening menu-open' : '' }}">
                              <a href="#" class="nav-link  {{ request()->is('inventori*') ? 'active' : '' }}">
                                  <i class="nav-icon fas fa-boxes"></i>
                                  <p>
                                      Inventori
                                      <i class="right fas fa-angle-left"></i>
                                  </p>
                              </a>
                              <ul class="nav nav-treeview">
                                  <li
                                      class="nav-item
                                {{ Request::segment(2) == 'inventori' ? 'menu-is-opening menu-open' : '' }}
                                {{ Request::segment(2) == 'list-inventori' ? 'menu-is-opening menu-open' : '' }}
                                {{ Request::segment(2) == 'unit-satuan' ? 'menu-is-opening menu-open' : '' }}
                                {{ Request::segment(2) == 'principal' ? 'menu-is-opening menu-open' : '' }}
                                {{ Request::segment(2) == 'list-principal' ? 'menu-is-opening menu-open' : '' }}
                                {{ Request::segment(2) == 'supplier' ? 'menu-is-opening menu-open' : '' }}
                                {{ Request::segment(2) == 'list-supplier' ? 'menu-is-opening menu-open' : '' }}
                                {{ Request::segment(2) == 'list-tipe' ? 'menu-is-opening menu-open' : '' }}
                                ">
                                      <a href="#"
                                          class="nav-link
                                    {{ Request::segment(2) == 'inventori' ? 'active' : '' }}
                                    {{ Request::segment(2) == 'list-inventori' ? 'active' : '' }}
                                    {{ Request::segment(2) == 'unit-satuan' ? 'active' : '' }}
                                    {{ Request::segment(2) == 'principal' ? 'active' : '' }}
                                    {{ Request::segment(2) == 'list-principal' ? 'active' : '' }}
                                    {{ Request::segment(2) == 'supplier' ? 'active' : '' }}
                                    {{ Request::segment(2) == 'list-supplier' ? 'active' : '' }}
                                    {{ Request::segment(2) == 'list-tipe' ? 'active' : '' }}
                                    ">
                                          <i class="ml-2 fa fa-folder nav-icon"></i>
                                          <p>
                                              Data Inventori
                                              <i class="fas fa-angle-left right"></i>
                                          </p>
                                      </a>

                                      <ul class="nav nav-treeview">
                                          <li class="nav-item">
                                              <a href="{{ route('inventori.pos-inventori') }}"
                                                  class="nav-link
                                        {{ Request::segment(2) == 'pos-inventori' ? 'active' : '' }}
                                        "
                                                  wire:navigate>
                                                  @if (Request::segment(2) == 'pos-inventori' || Request::segment(2) == 'pos-inventori')
                                                      <i class="ml-3 far fa-dot-circle nav-icon"></i>
                                                  @else
                                                      <i class="ml-3 far fa-circle nav-icon"></i>
                                                  @endif
                                                  <p>Pos Inventori</p>
                                              </a>
                                          </li>
                                          <li class="nav-item">
                                              <a href="{{ route('inventori.unit-satuan') }}"
                                                  class="nav-link
                                        {{ Request::segment(2) == 'unit-satuan' ? 'active' : '' }}
                                        "
                                                  wire:navigate>
                                                  @if (Request::segment(2) == 'unit-satuan' || Request::segment(2) == 'unit-satuan')
                                                      <i class="ml-3 far fa-dot-circle nav-icon"></i>
                                                  @else
                                                      <i class="ml-3 far fa-circle nav-icon"></i>
                                                  @endif
                                                  <p>Unit/Satuan</p>
                                              </a>
                                          </li>
                                          <li class="nav-item">
                                              <a href="{{ route('inventori.tipe-inventori.index') }}"
                                                  class="nav-link
                                    {{ Request::segment(2) == 'list-tipe' ? 'active' : '' }}
                                    "
                                                  wire:navigate>
                                                  @if (Request::segment(2) == 'list-tipe' || Request::segment(2) == 'list-tipe')
                                                      <i class="ml-3 far fa-dot-circle nav-icon"></i>
                                                  @else
                                                      <i class="ml-3 far fa-circle nav-icon"></i>
                                                  @endif
                                                  <p>Tipe</p>
                                              </a>
                                          </li>
                                          <li class="nav-item">
                                              <a href="{{ route('inventori.inventori.index') }}"
                                                  class="nav-link
                                    {{ Request::segment(2) == 'inventori' ? 'active' : '' }}
                                    {{ Request::segment(2) == 'list-inventori' ? 'active' : '' }}
                                    "
                                                  wire:navigate>
                                                  @if (Request::segment(2) == 'inventori' || Request::segment(2) == 'list-inventori')
                                                      <i class="ml-3 far fa-dot-circle nav-icon"></i>
                                                  @else
                                                      <i class="ml-3 far fa-circle nav-icon"></i>
                                                  @endif
                                                  <p>Inventori</p>
                                              </a>
                                          </li>
                                          <li class="nav-item">
                                              <a href="{{ route('inventori.supplier.index') }}"
                                                  class="nav-link
                                    {{ Request::segment(2) == 'supplier' ? 'active' : '' }}
                                    {{ Request::segment(2) == 'list-supplier' ? 'active' : '' }}
                                    "
                                                  wire:navigate>
                                                  @if (Request::segment(2) == 'supplier' || Request::segment(2) == 'list-supplier')
                                                      <i class="ml-3 far fa-dot-circle nav-icon"></i>
                                                  @else
                                                      <i class="ml-3 far fa-circle nav-icon"></i>
                                                  @endif
                                                  <p>Supplier</p>
                                              </a>
                                          </li>
                                          <li class="nav-item">
                                              <a href="{{ route('inventori.principal.index') }}"
                                                  class="nav-link
                                    {{ Request::segment(2) == 'principal' ? 'active' : '' }}
                                    {{ Request::segment(2) == 'list-principal' ? 'active' : '' }}
                                    "
                                                  wire:navigate>
                                                  @if (Request::segment(2) == 'principal' || Request::segment(2) == 'list-principal')
                                                      <i class="ml-3 far fa-dot-circle nav-icon"></i>
                                                  @else
                                                      <i class="ml-3 far fa-circle nav-icon"></i>
                                                  @endif
                                                  <p>Principal</p>
                                              </a>
                                          </li>
                                      </ul>

                                  </li>

                              </ul>
                              <ul class="nav nav-treeview">
                                  <li
                                      class="nav-item
                       {{ Request::segment(2) == 'inventori' ? 'menu-is-opening menu-open' : '' }}
                       {{ Request::segment(2) == 'list-inventori' ? 'menu-is-opening menu-open' : '' }}
                       {{ Request::segment(2) == 'unit-satuan' ? 'menu-is-opening menu-open' : '' }}
                       {{ Request::segment(2) == 'principal' ? 'menu-is-opening menu-open' : '' }}
                       {{ Request::segment(2) == 'list-principal' ? 'menu-is-opening menu-open' : '' }}
                       {{ Request::segment(2) == 'supplier' ? 'menu-is-opening menu-open' : '' }}
                       {{ Request::segment(2) == 'list-supplier' ? 'menu-is-opening menu-open' : '' }}
                       {{ Request::segment(2) == 'list-tipe' ? 'menu-is-opening menu-open' : '' }}
                       ">
                                      <a href="#"
                                          class="nav-link
                      {{ Request::segment(2) == 'inventori' ? 'active' : '' }}
                      {{ Request::segment(2) == 'list-inventori' ? 'active' : '' }}
                      {{ Request::segment(2) == 'unit-satuan' ? 'active' : '' }}
                      {{ Request::segment(2) == 'principal' ? 'active' : '' }}
                      {{ Request::segment(2) == 'list-principal' ? 'active' : '' }}
                      {{ Request::segment(2) == 'supplier' ? 'active' : '' }}
                      {{ Request::segment(2) == 'list-supplier' ? 'active' : '' }}
                      {{ Request::segment(2) == 'list-tipe' ? 'active' : '' }}
                      ">
                                          <i class="ml-2 fa fa-folder nav-icon"></i>
                                          <p>
                                              Transaksi Inventori
                                              <i class="fas fa-angle-left right"></i>
                                          </p>
                                      </a>

                                      <ul class="nav nav-treeview">
                                          <li class="nav-item">
                                              <a href="{{ route('inventori.pos-inventori') }}"
                                                  class="nav-link
                                    {{ Request::segment(2) == 'pos-inventori' ? 'active' : '' }}
                                    "
                                                  wire:navigate>
                                                  @if (Request::segment(2) == 'pos-inventori' || Request::segment(2) == 'pos-inventori')
                                                      <i class="ml-3 far fa-dot-circle nav-icon"></i>
                                                  @else
                                                      <i class="ml-3 far fa-circle nav-icon"></i>
                                                  @endif
                                                  <p>Stok Inventori</p>
                                              </a>
                                          </li>
                                          <li class="nav-item">
                                              <a href="{{ route('inventori.pos-inventori') }}"
                                                  class="nav-link
                                    {{ Request::segment(2) == 'pos-inventori' ? 'active' : '' }}
                                    "
                                                  wire:navigate>
                                                  @if (Request::segment(2) == 'pos-inventori' || Request::segment(2) == 'pos-inventori')
                                                      <i class="ml-3 far fa-dot-circle nav-icon"></i>
                                                  @else
                                                      <i class="ml-3 far fa-circle nav-icon"></i>
                                                  @endif
                                                  <p>Barang Masuk</p>
                                              </a>
                                          </li>
                                          <li class="nav-item">
                                              <a href="{{ route('inventori.pos-inventori') }}"
                                                  class="nav-link
                                    {{ Request::segment(2) == 'pos-inventori' ? 'active' : '' }}
                                    "
                                                  wire:navigate>
                                                  @if (Request::segment(2) == 'pos-inventori' || Request::segment(2) == 'pos-inventori')
                                                      <i class="ml-3 far fa-dot-circle nav-icon"></i>
                                                  @else
                                                      <i class="ml-3 far fa-circle nav-icon"></i>
                                                  @endif
                                                  <p>Barang Keluar</p>
                                              </a>
                                          </li>
                                          <li class="nav-item">
                                              <a href="{{ route('inventori.pos-inventori') }}"
                                                  class="nav-link
                                    {{ Request::segment(2) == 'pos-inventori' ? 'active' : '' }}
                                    "
                                                  wire:navigate>
                                                  @if (Request::segment(2) == 'pos-inventori' || Request::segment(2) == 'pos-inventori')
                                                      <i class="ml-3 far fa-dot-circle nav-icon"></i>
                                                  @else
                                                      <i class="ml-3 far fa-circle nav-icon"></i>
                                                  @endif
                                                  <p>Transfer Barang</p>
                                              </a>
                                          </li>
                                          <li class="nav-item">
                                              <a href="{{ route('inventori.pos-inventori') }}"
                                                  class="nav-link
                                    {{ Request::segment(2) == 'pos-inventori' ? 'active' : '' }}
                                    "
                                                  wire:navigate>
                                                  @if (Request::segment(2) == 'pos-inventori' || Request::segment(2) == 'pos-inventori')
                                                      <i class="ml-3 far fa-dot-circle nav-icon"></i>
                                                  @else
                                                      <i class="ml-3 far fa-circle nav-icon"></i>
                                                  @endif
                                                  <p>Penyesuaian</p>
                                              </a>
                                          </li>
                                      </ul>

                                  </li>
                              </ul>
                          </li>
                      @endpermission
                  </ul>
              </nav>
              <!-- /.sidebar-menu -->
          </div>
          <!-- /.sidebar -->
      </aside>
