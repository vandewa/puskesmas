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
              {{-- <img src="{{ asset('AdminLTE/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo"
                  class="brand-image img-circle elevation-3" style="opacity: .8"> --}}
              <img src="{{ asset('logooo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
                  style="opacity: .8">
              <span class="brand-text font-weight-light">LPK Marzuba</span>
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
                      <a href="#" class="d-block">{{ auth()->user()->name }}</a>
                  </div>
              </div>

              <!-- Sidebar Menu -->
              <nav class="mt-2">
                  <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                      data-accordion="false">
                      <!-- Add icons to the links using the .nav-icon class
           with font-awesome or any other icon font library -->
                      @role('sales')
                          <li class="nav-item">
                              <a href="{{ route('admin.user') }}"
                                  class="nav-link  {{ Request::segment(2) == 'user' ? 'active' : '' }}">
                                  <i class="nav-icon fa-solid fa-user"></i>
                                  <p>
                                      Pendaftar
                                  </p>
                              </a>
                          </li>
                      @endrole
                      @role('user')
                          @if (auth()->user()->active_st == true)
                              <li class="nav-item">
                                  <a href="{{ route('pendaftaran.data-diri') }}"
                                      class="nav-link  {{ Request::segment(2) == 'data-diri' ? 'active' : '' }}">
                                      <i class="nav-icon fa-solid fa-user-pen"></i>
                                      <p>
                                          Data Diri
                                      </p>
                                  </a>
                              </li>
                          @endif
                          <li class="nav-item">
                              <a href="{{ route('dashboard') }}"
                                  class="nav-link  {{ Request::segment(1) == 'dashboard' ? 'active' : '' }}">
                                  <i class="nav-icon fa-solid fa-file-pen"></i>
                                  <p>
                                      Lamaran
                                  </p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="{{ route('pendaftaran.aktivasi') }}"
                                  class="nav-link  {{ Request::segment(2) == 'aktivasi' ? 'active' : '' }}">
                                  <i class="nav-icon fa-solid fa-file-circle-check"></i>
                                  <p>
                                      Aktivasi
                                  </p>
                              </a>
                          </li>
                          <livewire:component.sidebar.tagihan-sidebar>
                              <li class="nav-item">
                                  <a href="https://www.instagram.com/lpkmarzuba?igshid=OGQ5ZDc2ODk2ZA%3D%3D" target="_blank"
                                      class="nav-link">
                                      <i class="nav-icon fa-brands fa-instagram"></i>
                                      <p>
                                          Instagram
                                      </p>
                                  </a>
                              </li>
                          @endrole

                          @role('superadministrator')
                              <li
                                  class="nav-item
                              {{ Request::segment(2) == 'layanan' ? 'menu-is-opening menu-open' : '' }}
                              {{ Request::segment(2) == 'kelas' ? 'menu-is-opening menu-open' : '' }}
                          ">
                                  <a href="#"
                                      class="nav-link
                              {{ Request::segment(2) == 'layanan' ? 'active' : '' }}
                              {{ Request::segment(2) == 'kelas' ? 'active' : '' }}
                              ">
                                      <i class="nav-icon fas fa-book"></i>
                                      <p>
                                          Master Data
                                          <i class="fas fa-angle-left right"></i>
                                      </p>
                                  </a>
                                  <ul class="nav nav-treeview">
                                      <li class="nav-item">
                                          <a href="{{ route('master.layanan') }}"
                                              class="nav-link {{ Request::segment(2) == 'layanan' ? 'active' : '' }}">
                                              <i class="ml-2 far fa-circle nav-icon"></i>
                                              <p>Layanan</p>
                                          </a>
                                      </li>
                                      <li class="nav-item">
                                          <a href="{{ route('master.kelas') }}"
                                              class="nav-link {{ Request::segment(2) == 'kelas' ? 'active' : '' }}">
                                              <i class="ml-2 far fa-circle nav-icon"></i>
                                              <p>Kelas</p>
                                          </a>
                                      </li>
                                      <li class="nav-item">
                                          <a href="../examples/e-commerce.html" class="nav-link">
                                              <i class="ml-2 far fa-circle nav-icon"></i>
                                              <p>Sales</p>
                                          </a>
                                      </li>
                                      <li class="nav-item">
                                          <a href="{{ route('admin.pengguna') }}"
                                              class="nav-link  {{ Request::segment(2) == 'pengguna' ? 'active' : '' }}">
                                              <i class="ml-2 nav-icon fas fa-users"></i>
                                              <p>
                                                  Siswa
                                              </p>
                                          </a>
                                      </li>

                                  </ul>
                              </li>
                              <li class="nav-item">
                                  <a href="#" class="nav-link ">
                                      <i class="nav-icon fa-solid fa-money-check-dollar"></i>
                                      <p>
                                          Keuangan
                                          <i class="fas fa-angle-left right"></i>
                                      </p>
                                  </a>
                                  <ul class="nav nav-treeview">
                                      <li class="nav-item">
                                          <a href="../examples/invoice.html" class="nav-link">
                                              <i class="ml-2 far fa-circle nav-icon"></i>
                                              <p>Aktivasi Pendaftaran</p>
                                          </a>
                                      </li>
                                      <li class="nav-item">
                                          <a href="../examples/profile.html" class="nav-link">
                                              <i class="ml-2 far fa-circle nav-icon"></i>
                                              <p>Tagihan</p>
                                          </a>
                                      </li>
                                      <li class="nav-item">
                                          <a href="../examples/e-commerce.html" class="nav-link">
                                              <i class="ml-2 far fa-circle nav-icon"></i>
                                              <p>Terbayar</p>
                                          </a>
                                      </li>

                                  </ul>
                              </li>
                              <li class="nav-item">
                                  <a href="{{ route('admin.tiket') }}"
                                      class="nav-link  {{ Request::segment(2) == 'tiket' ? 'active' : '' }}">
                                      <i class="nav-icon fa-solid fa-laptop"></i>
                                      <p>
                                          Monitoring
                                      </p>
                                  </a>
                              <li class="nav-item">
                                  <a href="{{ route('admin.aktivasi-user') }}"
                                      class="nav-link  {{ Request::segment(2) == 'aktivasi-user' ? 'active' : '' }}">
                                      <i class="nav-icon fa-solid fa-file-circle-check"></i>
                                      <p>
                                          Aktivasi User
                                      </p>
                                  </a>
                              </li>
                              <li class="nav-item">
                                  <a href="{{ route('admin.seleksi-berkas') }}"
                                      class="nav-link  {{ Request::segment(2) == 'seleksi-berkas' ? 'active' : '' }}">
                                      <i class="nav-icon fa-solid fa-file-pen"></i>
                                      <p>
                                          Seleksi Berkas
                                      </p>
                                  </a>
                              </li>
                              <li class="nav-item">
                                  <a href="{{ route('admin.tes') }}"
                                      class="nav-link  {{ Request::segment(2) == 'tes' ? 'active' : '' }}">
                                      <i class="nav-icon fa-solid fa-file-lines"></i>
                                      <p>
                                          Psikotes & Test Fisik
                                      </p>
                                  </a>
                              </li>
                              <li class="nav-item">
                                  <a href="{{ route('admin.wawancara') }}"
                                      class="nav-link  {{ Request::segment(2) == 'wawancara' ? 'active' : '' }}">
                                      <i class="nav-icon fa-solid fa-comment-dots"></i>
                                      <p>
                                          Wawancara 1
                                      </p>
                                  </a>
                              </li>
                              <li class="nav-item">
                                  <a href="{{ route('admin.mcu') }}"
                                      class="nav-link  {{ Request::segment(2) == 'mcu' ? 'active' : '' }}">
                                      <i class="nav-icon fas fa-heartbeat"></i>
                                      <p>
                                          MCU
                                      </p>
                                  </a>
                              </li>
                              <li class="nav-item">
                                  <a href="{{ route('admin.pendidikan') }}"
                                      class="nav-link  {{ Request::segment(2) == 'pendidikan' ? 'active' : '' }}">
                                      <i class="nav-icon fas fa-graduation-cap"></i>
                                      <p>
                                          Pendidikan
                                      </p>
                                  </a>
                              </li>
                              <li class="nav-item">
                                  <a href="{{ route('admin.wawancara.user') }}"
                                      class="nav-link  {{ Request::segment(2) == 'wawancara-user' ? 'active' : '' }}">
                                      <i class="nav-icon fa-solid fa-person-circle-question"></i>
                                      <p>
                                          Wawancara User
                                      </p>
                                  </a>
                              </li>
                              <li class="nav-item">
                                  <a href="{{ route('admin.pengurusan.berkas') }}"
                                      class="nav-link  {{ Request::segment(2) == 'pengurusan-berkas' ? 'active' : '' }}">
                                      <i class="nav-icon fa-solid fa-file"></i>
                                      <p>
                                          Pengurusan Berkas Keberangkatan
                                      </p>
                                  </a>
                              </li>
                              <li class="nav-item">
                                  <a href="{{ route('admin.keberangkatan') }}"
                                      class="nav-link  {{ Request::segment(2) == 'keberangkatan' ? 'active' : '' }}">
                                      <i class="nav-icon fas fa-fighter-jet"></i>
                                      <p>
                                          Keberangkatan
                                      </p>
                                  </a>
                              </li>
                              <li class="nav-item">
                                  <a href="{{ route('admin.magang') }}"
                                      class="nav-link  {{ Request::segment(2) == 'magang' ? 'active' : '' }}">
                                      <i class="nav-icon fas fa-yen-sign"></i>
                                      <p>
                                          Magang di Jepang
                                      </p>
                                  </a>
                              </li>

                              <li class="nav-item">
                                  <a href="https://www.instagram.com/lpkmarzuba?igshid=OGQ5ZDc2ODk2ZA%3D%3D"
                                      target="_blank" class="nav-link">
                                      <i class="nav-icon fa-brands fa-instagram"></i>
                                      <p>
                                          Instagram
                                      </p>
                                  </a>
                              </li>
                      </ul>
                  @endrole
              </nav>
              <!-- /.sidebar-menu -->
          </div>
          <!-- /.sidebar -->
      </aside>
