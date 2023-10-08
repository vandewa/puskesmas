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
          <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                  <a class="nav-link" href="{{ route('logout') }}"
                      onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                      <div class="d-flex align-items-center">
                          <div class="ms-3"><i class="fas fa-sign-out-alt mr-2"></i></i>Keluar</div>
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
              <img src="{{ asset('AdminLTE/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo"
                  class="brand-image img-circle elevation-3" style="opacity: .8">
              <span class="brand-text font-weight-light">AdminLTE 3</span>
          </a>

          <!-- Sidebar -->
          <div class="sidebar">
              <!-- Sidebar user panel (optional) -->
              <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                  <div class="image">
                      <img src="{{ asset('AdminLTE/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2"
                          alt="User Image">
                  </div>
                  <div class="info">
                      <a href="#" class="d-block">Administrator</a>
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

                      <li
                          class="nav-item
                      {{ Request::segment(2) == 'spesialis' ? 'menu-is-opening menu-open' : '' }}
                      {{ Request::segment(2) == 'dokter' ? 'menu-is-opening menu-open' : '' }}
                      {{ Request::segment(2) == 'paramedis' ? 'menu-is-opening menu-open' : '' }}
                      {{ Request::segment(2) == 'poliklinik' ? 'menu-is-opening menu-open' : '' }}
                      {{ Request::segment(2) == 'tindakan-medis' ? 'menu-is-opening menu-open' : '' }}
                      {{ Request::segment(2) == 'jenis-penyakit' ? 'menu-is-opening menu-open' : '' }}
                      {{ Request::segment(2) == 'bangsal' ? 'menu-is-opening menu-open' : '' }}
                      {{ Request::segment(2) == 'kelas' ? 'menu-is-opening menu-open' : '' }}
                      {{ Request::segment(2) == 'kamar' ? 'menu-is-opening menu-open' : '' }}
                      {{ Request::segment(2) == 'tempat-tidur' ? 'menu-is-opening menu-open' : '' }}
                      {{ Request::segment(2) == 'list-jadwal-praktek' ? 'menu-is-opening menu-open' : '' }}
                      {{ Request::segment(2) == 'jadwal-praktek' ? 'menu-is-opening menu-open' : '' }}
                      ">
                          <a href="#" class="nav-link">
                              <i class="nav-icon fa fa-desktop"></i>
                              <p>
                                  Master
                                  <i class="right fas fa-angle-left"></i>
                              </p>
                          </a>
                          <ul class="nav nav-treeview">
                              <li class="nav-item">
                                  <a href="#" class="nav-link">
                                      <i class="fa fa-folder nav-icon ml-2"></i>
                                      <p>
                                          Admin
                                          <i class="fas fa-angle-left right"></i>
                                      </p>
                                  </a>

                                  <ul class="nav nav-treeview">
                                      <li class="nav-item">
                                          <a href="pages/examples/login.html" class="nav-link">
                                              <i class="far fa-circle nav-icon ml-3"></i>
                                              <p>Group</p>
                                          </a>
                                      </li>
                                      <li class="nav-item">
                                          <a href="pages/examples/login.html" class="nav-link">
                                              <i class="far fa-circle nav-icon ml-3"></i>
                                              <p>User</p>
                                          </a>
                                      </li>
                                      <li class="nav-item">
                                          <a href="pages/examples/login.html" class="nav-link">
                                              <i class="far fa-circle nav-icon ml-3"></i>
                                              <p>Autorisasi</p>
                                          </a>
                                      </li>
                                      <li class="nav-item">
                                          <a href="pages/examples/login.html" class="nav-link">
                                              <i class="far fa-circle nav-icon ml-3"></i>
                                              <p>Setting</p>
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
                              {{ Request::segment(2) == 'tindakan-medis' ? 'menu-is-opening menu-open' : '' }}
                              {{ Request::segment(2) == 'jenis-penyakit' ? 'menu-is-opening menu-open' : '' }}
                              {{ Request::segment(2) == 'bangsal' ? 'menu-is-opening menu-open' : '' }}
                              {{ Request::segment(2) == 'kelas' ? 'menu-is-opening menu-open' : '' }}
                              {{ Request::segment(2) == 'kamar' ? 'menu-is-opening menu-open' : '' }}
                              {{ Request::segment(2) == 'tempat-tidur' ? 'menu-is-opening menu-open' : '' }}
                              {{ Request::segment(2) == 'list-jadwal-praktek' ? 'menu-is-opening menu-open' : '' }}
                              {{ Request::segment(2) == 'jadwal-praktek' ? 'menu-is-opening menu-open' : '' }}

                              ">
                                  <a href="#"
                                      class="nav-link
                                      {{ Request::segment(2) == 'spesialis' ? 'active' : '' }}
                                      {{ Request::segment(2) == 'dokter' ? 'active' : '' }}
                                      {{ Request::segment(2) == 'paramedis' ? 'active' : '' }}
                                      {{ Request::segment(2) == 'poliklinik' ? 'active' : '' }}
                                      {{ Request::segment(2) == 'tindakan-medis' ? 'active' : '' }}
                                      {{ Request::segment(2) == 'jenis-penyakit' ? 'active' : '' }}
                                      {{ Request::segment(2) == 'bangsal' ? 'active' : '' }}
                                      {{ Request::segment(2) == 'kelas' ? 'active' : '' }}
                                      {{ Request::segment(2) == 'kamar' ? 'active' : '' }}
                                      {{ Request::segment(2) == 'tempat-tidur' ? 'active' : '' }}
                                      {{ Request::segment(2) == 'list-jadwal-praktek' ? 'active' : '' }}
                                      {{ Request::segment(2) == 'jadwal-praktek' ? 'active' : '' }}
                                      ">
                                      <i class="fa fa-folder nav-icon ml-2"></i>
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
                                                  <i class="far fa-dot-circle nav-icon ml-3"></i>
                                              @else
                                                  <i class="far fa-circle nav-icon ml-3"></i>
                                              @endif
                                              <p>Spesialis</p>
                                          </a>
                                      </li>
                                      <li class="nav-item">
                                          <a href="{{ route('master.dokter') }}"
                                              class="nav-link {{ Request::segment(2) == 'dokter' ? 'active' : '' }}">
                                              @if (Request::segment(2) == 'dokter')
                                                  <i class="far fa-dot-circle nav-icon ml-3"></i>
                                              @else
                                                  <i class="far fa-circle nav-icon ml-3"></i>
                                              @endif
                                              <p>Dokter</p>
                                          </a>
                                      </li>
                                      <li class="nav-item">
                                          <a href="{{ route('master.paramedis') }}"
                                              class="nav-link {{ Request::segment(2) == 'paramedis' ? 'active' : '' }}">
                                              @if (Request::segment(2) == 'paramedis')
                                                  <i class="far fa-dot-circle nav-icon ml-3"></i>
                                              @else
                                                  <i class="far fa-circle nav-icon ml-3"></i>
                                              @endif
                                              <p>Paramedis</p>
                                          </a>
                                      </li>
                                      <li
                                          class="nav-item  {{ Request::segment(2) == 'poliklinik' ? 'menu-is-opening menu-open' : '' }}">
                                          <a href="#"
                                              class="nav-link {{ Request::segment(2) == 'poliklinik' ? 'active' : '' }}">
                                              <i class="fa fa-folder nav-icon ml-3"></i>
                                              <p>Instalasi Medis
                                                  <i class="fas fa-angle-left right"></i>
                                              </p>
                                          </a>
                                          <ul class="nav nav-treeview">
                                              <li class="nav-item">
                                                  <a href="{{ route('master.poliklinik') }}" wire:navigate
                                                      class="nav-link  {{ Request::segment(2) == 'poliklinik' ? 'active' : '' }}">
                                                      @if (Request::segment(2) == 'poliklinik')
                                                          <i class="far fa-dot-circle nav-icon ml-5"></i>
                                                      @else
                                                          <i class="far fa-circle nav-icon ml-5"></i>
                                                      @endif
                                                      <p>Poliklinik</p>
                                                  </a>
                                              </li>
                                              <li class="nav-item">
                                                  <a href="#" wire:navigate class="nav-link">
                                                      <i class="far fa-circle nav-icon ml-5"></i>
                                                      <p>Laboratorium</p>
                                                  </a>
                                              </li>
                                              <li class="nav-item">
                                                  <a href="#" wire:navigate class="nav-link">
                                                      <i class="far fa-circle nav-icon ml-5"></i>
                                                      <p>Radiologi</p>
                                                  </a>
                                              </li>
                                          </ul>
                                      </li>

                                      <li class="nav-item">
                                          <a href="{{ route('master.tindakan-medis') }}"
                                              class="nav-link {{ Request::segment(2) == 'tindakan-medis' ? 'active' : '' }}">
                                              @if (Request::segment(2) == 'tindakan-medis')
                                                  <i class="far fa-dot-circle nav-icon ml-3"></i>
                                              @else
                                                  <i class="far fa-circle nav-icon ml-3"></i>
                                              @endif
                                              <p>Tindakan Medis</p>
                                          </a>
                                      </li>
                                      <li class="nav-item">
                                          <a href="{{ route('master.jenis-penyakit') }}"
                                              class="nav-link {{ Request::segment(2) == 'jenis-penyakit' ? 'active' : '' }}">
                                              @if (Request::segment(2) == 'jenis-penyakit')
                                                  <i class="far fa-dot-circle nav-icon ml-3"></i>
                                              @else
                                                  <i class="far fa-circle nav-icon ml-3"></i>
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
                                              <i class="fa fa-folder nav-icon ml-3"></i>
                                              <p>Akomodasi
                                                  <i class="fas fa-angle-left right"></i>
                                              </p>
                                          </a>
                                          <ul class="nav nav-treeview">
                                              <li class="nav-item">
                                                  <a href="{{ route('master.bangsal') }}" wire:navigate
                                                      class="nav-link  {{ Request::segment(2) == 'bangsal' ? 'active' : '' }}">
                                                      @if (Request::segment(2) == 'bangsal')
                                                          <i class="far fa-dot-circle nav-icon ml-5"></i>
                                                      @else
                                                          <i class="far fa-circle nav-icon ml-5"></i>
                                                      @endif
                                                      <p>Bangsal</p>
                                                  </a>
                                              </li>
                                              <li class="nav-item">
                                                  <a href="{{ route('master.kelas') }}" wire:navigate
                                                      class="nav-link {{ Request::segment(2) == 'kelas' ? 'active' : '' }}">
                                                      @if (Request::segment(2) == 'kelas')
                                                          <i class="far fa-dot-circle nav-icon ml-5"></i>
                                                      @else
                                                          <i class="far fa-circle nav-icon ml-5"></i>
                                                      @endif
                                                      <p>Kelas</p>
                                                  </a>
                                              </li>
                                              <li class="nav-item">
                                                  <a href="{{ route('master.kamar') }}" wire:navigate
                                                      class="nav-link {{ Request::segment(2) == 'kamar' ? 'active' : '' }}">
                                                      @if (Request::segment(2) == 'kamar')
                                                          <i class="far fa-dot-circle nav-icon ml-5"></i>
                                                      @else
                                                          <i class="far fa-circle nav-icon ml-5"></i>
                                                      @endif
                                                      <p>Kamar</p>
                                                  </a>
                                              </li>
                                              <li class="nav-item">
                                                  <a href="{{ route('master.tempat-tidur') }}" wire:navigate
                                                      class="nav-link {{ Request::segment(2) == 'tempat-tidur' ? 'active' : '' }}">
                                                      @if (Request::segment(2) == 'tempat-tidur')
                                                          <i class="far fa-dot-circle nav-icon ml-5"></i>
                                                      @else
                                                          <i class="far fa-circle nav-icon ml-5"></i>
                                                      @endif
                                                      <p>Tempat Tidur</p>
                                                  </a>
                                              </li>
                                          </ul>
                                      </li>
                                      <li class="nav-item">
                                          <a href="{{ route('master.jadwal-praktek.index') }}"
                                              class="nav-link {{ Request::segment(2) == 'list-jadwal-praktek' ? 'active' : '' }}{{ Request::segment(2) == 'jadwal-praktek' ? 'active' : '' }}">
                                              @if (Request::segment(2) == 'jadwal-praktek' || Request::segment(2) == 'list-jadwal-praktek')
                                                  <i class="far fa-dot-circle nav-icon ml-3"></i>
                                              @else
                                                  <i class="far fa-circle nav-icon ml-3"></i>
                                              @endif
                                              <p>Jadwal Praktek</p>
                                          </a>
                                      </li>
                                  </ul>
                              </li>
                          </ul>
                          <ul class="nav nav-treeview">
                              <li class="nav-item">
                                  <a href="#" class="nav-link">
                                      <i class="fa fa-folder nav-icon ml-2"></i>
                                      <p>
                                          Data Umum
                                          <i class="fas fa-angle-left right"></i>
                                      </p>
                                  </a>

                                  <ul class="nav nav-treeview">
                                      <li class="nav-item">
                                          <a href="pages/examples/login.html" class="nav-link">
                                              <i class="far fa-circle nav-icon"></i>
                                              <p>Login v1</p>
                                          </a>
                                      </li>
                                  </ul>
                              </li>
                          </ul>
                      </li>

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
                                          <i class="far fa-dot-circle nav-icon ml-3"></i>
                                      @else
                                          <i class="far fa-circle nav-icon ml-3"></i>
                                      @endif
                                      <p>Data Pasien</p>
                                  </a>
                              </li>
                              <li class="nav-item">
                                  <a href="{{ route('pasien.pendaftaran') }}"
                                      class="nav-link
                                  {{ request()->is('pasien/pendaftaran') ? 'active' : '' }}">
                                      @if (request()->is('pasien/pendaftaran') ? 'active' : '')
                                          <i class="far fa-dot-circle nav-icon ml-3"></i>
                                      @else
                                          <i class="far fa-circle nav-icon ml-3"></i>
                                      @endif
                                      <p>Pendaftaran Pasien</p>
                                  </a>
                              </li>
                              <li class="nav-item">
                                  <a href="./index3.html" class="nav-link">
                                      <i class="far fa-circle nav-icon ml-3"></i>
                                      <p>View Pasien</p>
                                  </a>
                              </li>
                              <li class="nav-item">
                                  <a href="./index3.html" class="nav-link">
                                      <i class="far fa-circle nav-icon ml-3"></i>
                                      <p>Pasien Rujukan</p>
                                  </a>
                              </li>
                          </ul>
                      </li>
                      <li class="nav-item {{ request()->is('*rawat-jalan*') ? 'menu-is-opening menu-open' : '' }}">
                          <a href="#" class="nav-link {{ request()->is('*rawat-jalan*') ? 'active' : '' }}">
                              <i class="nav-icon fas fa-wheelchair"></i>
                              <p>
                                  Rawat Jalan
                                  <i class="right fas fa-angle-left"></i>
                              </p>
                          </a>
                          <ul class="nav nav-treeview">
                              <li class="nav-item">

                                  <a href="{{ route('registrasi.rawat-jalan') }}" wire:navigate class="nav-link {{ request()->is('registrasi/rawat-jalan/*') ? 'active' : '' }}">
                                    @if (request()->is('registrasi/rawat-jalan'))
                                        <i class="far fa-dot-circle nav-icon ml-3"></i>
                                    @else
                                        <i class="far fa-circle nav-icon ml-3"></i>
                                    @endif

                                      <p>Pendaftaran</p>
                                  </a>
                              </li>
                              <li class="nav-item">



                                  <a href="{{ route('transaksi.rawat-jalan.list') }}" wire:navigate class="nav-link">
                                      @if (request()->is('transaksi/rawat-jalan/list') ? 'active' : '')
                                          <i class="far fa-dot-circle nav-icon ml-3"></i>
                                      @else
                                          <i class="far fa-circle nav-icon ml-3"></i>
                                      @endif
                                      <p>Transaksi Rawat Jalan</p>
                                  </a>
                              </li>
                              <li class="nav-item">
                                  <a href="./index3.html" class="nav-link">
                                      <i class="far fa-circle nav-icon ml-3"></i>
                                      <p>Rekam Medis</p>
                                  </a>
                              </li>
                              <li class="nav-item">
                                  <a href="./index3.html" class="nav-link">
                                      <i class="far fa-circle nav-icon ml-3"></i>
                                      <p>CPPT</p>
                                  </a>
                              </li>
                              <li class="nav-item">
                                  <a href="./index3.html" class="nav-link">
                                      <i class="far fa-circle nav-icon ml-3"></i>
                                      <p>Tindakan Medis</p>
                                  </a>
                              </li>
                              <li class="nav-item">
                                  <a href="./index3.html" class="nav-link">
                                      <i class="far fa-circle nav-icon ml-3"></i>
                                      <p>Laboratorium</p>
                                  </a>
                              </li>
                              <li class="nav-item">
                                  <a href="./index3.html" class="nav-link">
                                      <i class="far fa-circle nav-icon ml-3"></i>
                                      <p>Radiologi</p>
                                  </a>
                              </li>
                              <li class="nav-item">
                                  <a href="./index3.html" class="nav-link">
                                      <i class="far fa-circle nav-icon ml-3"></i>
                                      <p>Resep/Obat</p>
                                  </a>
                              </li>
                          </ul>
                      </li>
                      <li class="nav-item">
                          <a href="#" class="nav-link">
                              <i class="nav-icon fas fa-bed"></i>
                              <p>
                                  Rawat Inap
                                  <i class="right fas fa-angle-left"></i>
                              </p>
                          </a>
                          <ul class="nav nav-treeview">
                              <li class="nav-item">
                                  <a href="./index2.html" class="nav-link">
                                      <i class="far fa-circle nav-icon ml-3"></i>
                                      <p>Booking</p>
                                  </a>
                              </li>
                              <li class="nav-item">
                                  <a href="./index.html" class="nav-link">
                                      <i class="far fa-circle nav-icon ml-3"></i>
                                      <p>Pendaftaran</p>
                                  </a>
                              </li>
                              <li class="nav-item">
                                  <a href="./index3.html" class="nav-link">
                                      <i class="far fa-circle nav-icon ml-3"></i>
                                      <p>Transaksi Rawat Inap</p>
                                  </a>
                              </li>
                              <li class="nav-item">
                                  <a href="./index3.html" class="nav-link">
                                      <i class="far fa-circle nav-icon ml-3"></i>
                                      <p>Rekam Medis</p>
                                  </a>
                              </li>
                              <li class="nav-item">
                                  <a href="./index3.html" class="nav-link">
                                      <i class="far fa-circle nav-icon ml-3"></i>
                                      <p>CPPT</p>
                                  </a>
                              </li>
                              <li class="nav-item">
                                  <a href="./index3.html" class="nav-link">
                                      <i class="far fa-circle nav-icon ml-3"></i>
                                      <p>Tindakan Medis</p>
                                  </a>
                              </li>
                              <li class="nav-item">
                                  <a href="./index3.html" class="nav-link">
                                      <i class="far fa-circle nav-icon ml-3"></i>
                                      <p>Laboratorium</p>
                                  </a>
                              </li>
                              <li class="nav-item">
                                  <a href="./index3.html" class="nav-link">
                                      <i class="far fa-circle nav-icon ml-3"></i>
                                      <p>Radiologi</p>
                                  </a>
                              </li>
                              <li class="nav-item">
                                  <a href="./index3.html" class="nav-link">
                                      <i class="far fa-circle nav-icon ml-3"></i>
                                      <p>Resep/Obat</p>
                                  </a>
                              </li>
                              <li class="nav-item">
                                  <a href="./index3.html" class="nav-link">
                                      <i class="far fa-circle nav-icon ml-3"></i>
                                      <p>Bed Management</p>
                                  </a>
                              </li>
                          </ul>
                      </li>
                      <li class="nav-item">
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
                                      <i class="far fa-circle nav-icon ml-3"></i>
                                      <p>Rekam Medis</p>
                                  </a>
                              </li>
                              <li class="nav-item">
                                  <a href="./index.html" class="nav-link">
                                      <i class="far fa-circle nav-icon ml-3"></i>
                                      <p>CPPT</p>
                                  </a>
                              </li>
                          </ul>
                      </li>
                      <li class="nav-item">
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
                                      <i class="far fa-circle nav-icon ml-3"></i>
                                      <p>Tindakan Medis</p>
                                  </a>
                              </li>
                              <li class="nav-item">
                                  <a href="./index.html" class="nav-link">
                                      <i class="far fa-circle nav-icon ml-3"></i>
                                      <p>Laboratorium</p>
                                  </a>
                              </li>
                              <li class="nav-item">
                                  <a href="./index.html" class="nav-link">
                                      <i class="far fa-circle nav-icon ml-3"></i>
                                      <p>Radiologi</p>
                                  </a>
                              </li>
                              <li class="nav-item">
                                  <a href="./index.html" class="nav-link">
                                      <i class="far fa-circle nav-icon ml-3"></i>
                                      <p>Resep/Obat</p>
                                  </a>
                              </li>
                          </ul>
                      </li>
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
                                  <a href="./index2.html" class="nav-link">
                                      <i class="far fa-circle nav-icon ml-3"></i>
                                      <p>Rekam Medis</p>
                                  </a>
                              </li>
                              <li class="nav-item">
                                  <a href="./index.html" class="nav-link">
                                      <i class="far fa-circle nav-icon ml-3"></i>
                                      <p>Tracking RM</p>
                                  </a>
                              </li>
                          </ul>
                      </li>
                      <li class="nav-item">
                          <a href="#" class="nav-link">
                              <i class="nav-icon fas fa-flask"></i>
                              <p>
                                  Farmasi
                                  <i class="right fas fa-angle-left"></i>
                              </p>
                          </a>
                          <ul class="nav nav-treeview">
                              <li class="nav-item">
                                  <a href="./index2.html" class="nav-link">
                                      <i class="far fa-circle nav-icon ml-3"></i>
                                      <p>Proses Resep</p>
                                  </a>
                              </li>
                              <li class="nav-item">
                                  <a href="./index.html" class="nav-link">
                                      <i class="far fa-circle nav-icon ml-3"></i>
                                      <p>Retur</p>
                                  </a>
                              </li>
                              <li class="nav-item">
                                  <a href="./index.html" class="nav-link">
                                      <i class="far fa-circle nav-icon ml-3"></i>
                                      <p>Penjualan Bebas</p>
                                  </a>
                              </li>
                              <li class="nav-item">
                                  <a href="./index.html" class="nav-link">
                                      <i class="far fa-circle nav-icon ml-3"></i>
                                      <p>Pengambilan Obat</p>
                                  </a>
                              </li>
                          </ul>
                      </li>
                  </ul>
              </nav>
              <!-- /.sidebar-menu -->
          </div>
          <!-- /.sidebar -->
      </aside>
