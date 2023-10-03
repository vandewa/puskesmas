      <!-- Preloader -->
      {{-- <div class="preloader flex-column justify-content-center align-items-center">
          <img class="animation__shake" src="{{ asset('AdminLTE/dist/img/AdminLTELogo.png') }}" alt="AdminLTELogo"
              height="60" width="60">
      </div> --}}

      <!-- Navbar -->
      <nav class="main-header navbar navbar-expand navbar-white navbar-light">
          <!-- Left navbar links -->
          <ul class="navbar-nav">
              <li class="nav-item">
                  <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i
                          class="fas fa-bars"></i></a>
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
          <a href="index3.html" class="brand-link">
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
                          <a href="pages/widgets.html" class="nav-link active">
                              <i class="nav-icon fas fa-home"></i>
                              <p>
                                  Beranda
                              </p>
                          </a>
                      </li>

                      <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-flask"></i>
                            <p>
                                Sistem
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                              <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
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
                            <li class="nav-item">
                              <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>
                                  Data Medis
                                  <i class="fas fa-angle-left right"></i>
                                </p>
                              </a>

                              <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('master.spesialis') }}" wire:navigate class="nav-link">
                                      <i class="far fa-circle nav-icon ml-3"></i>
                                      <p>Spesialis</p>
                                    </a>
                                  </li>
                                  <li class="nav-item">
                                    <a href="pages/examples/login.html" class="nav-link">
                                      <i class="far fa-circle nav-icon ml-3"></i>
                                      <p>Group</p>
                                    </a>
                                  </li>
                                  <li class="nav-item">
                                    <a href="pages/examples/login.html" class="nav-link">
                                      <i class="far fa-circle nav-icon ml-3"></i>
                                      <p>Group</p>
                                    </a>
                                  </li>
                                  <li class="nav-item">
                                    <a href="pages/examples/login.html" class="nav-link">
                                      <i class="far fa-circle nav-icon ml-3"></i>
                                      <p>Group</p>
                                    </a>
                                  </li>
                                  <li class="nav-item">
                                    <a href="pages/examples/login.html" class="nav-link">
                                      <i class="far fa-circle nav-icon ml-3"></i>
                                      <p>Group</p>
                                    </a>
                                  </li>
                                  <li class="nav-item">
                                    <a href="pages/examples/login.html" class="nav-link">
                                      <i class="far fa-circle nav-icon ml-3"></i>
                                      <p>Group</p>
                                    </a>
                                  </li>
                              </ul>
                            </li>
                        </ul>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                              <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
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

                      <li class="nav-item">
                          <a href="#" class="nav-link">
                              <i class="nav-icon fas fa-user-circle"></i>
                              <p>
                                  Pasien
                                  <i class="right fas fa-angle-left"></i>
                              </p>
                          </a>
                          <ul class="nav nav-treeview">
                              <li class="nav-item">
                                  <a href="{{ route('pasien.index') }}" class="nav-link">
                                      <i class="far fa-circle nav-icon"></i>
                                      <p>Data Pasien</p>
                                  </a>
                              </li>
                              <li class="nav-item">
                                  <a href="./index.html" class="nav-link">
                                      <i class="far fa-circle nav-icon"></i>
                                      <p>Pendaftaran Pasien</p>
                                  </a>
                              </li>
                              <li class="nav-item">
                                  <a href="./index3.html" class="nav-link">
                                      <i class="far fa-circle nav-icon"></i>
                                      <p>View Pasien</p>
                                  </a>
                              </li>
                              <li class="nav-item">
                                  <a href="./index3.html" class="nav-link">
                                      <i class="far fa-circle nav-icon"></i>
                                      <p>Pasien Rujukan</p>
                                  </a>
                              </li>
                          </ul>
                      </li>
                      <li class="nav-item">
                          <a href="#" class="nav-link">
                              <i class="nav-icon fas fa-wheelchair"></i>
                              <p>
                                  Rawat Jalan
                                  <i class="right fas fa-angle-left"></i>
                              </p>
                          </a>
                          <ul class="nav nav-treeview">
                              <li class="nav-item">
                                  <a href="./index2.html" class="nav-link">
                                      <i class="far fa-circle nav-icon"></i>
                                      <p>Pendaftaran</p>
                                  </a>
                              </li>
                              <li class="nav-item">
                                  <a href="./index.html" class="nav-link">
                                      <i class="far fa-circle nav-icon"></i>
                                      <p>Transaksi Rawat Jalan</p>
                                  </a>
                              </li>
                              <li class="nav-item">
                                  <a href="./index3.html" class="nav-link">
                                      <i class="far fa-circle nav-icon"></i>
                                      <p>Rekam Medis</p>
                                  </a>
                              </li>
                              <li class="nav-item">
                                  <a href="./index3.html" class="nav-link">
                                      <i class="far fa-circle nav-icon"></i>
                                      <p>CPPT</p>
                                  </a>
                              </li>
                              <li class="nav-item">
                                  <a href="./index3.html" class="nav-link">
                                      <i class="far fa-circle nav-icon"></i>
                                      <p>Tindakan Medis</p>
                                  </a>
                              </li>
                              <li class="nav-item">
                                  <a href="./index3.html" class="nav-link">
                                      <i class="far fa-circle nav-icon"></i>
                                      <p>Laboratorium</p>
                                  </a>
                              </li>
                              <li class="nav-item">
                                  <a href="./index3.html" class="nav-link">
                                      <i class="far fa-circle nav-icon"></i>
                                      <p>Radiologi</p>
                                  </a>
                              </li>
                              <li class="nav-item">
                                  <a href="./index3.html" class="nav-link">
                                      <i class="far fa-circle nav-icon"></i>
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
                                      <i class="far fa-circle nav-icon"></i>
                                      <p>Booking</p>
                                  </a>
                              </li>
                              <li class="nav-item">
                                  <a href="./index.html" class="nav-link">
                                      <i class="far fa-circle nav-icon"></i>
                                      <p>Pendaftaran</p>
                                  </a>
                              </li>
                              <li class="nav-item">
                                  <a href="./index3.html" class="nav-link">
                                      <i class="far fa-circle nav-icon"></i>
                                      <p>Transaksi Rawat Inap</p>
                                  </a>
                              </li>
                              <li class="nav-item">
                                  <a href="./index3.html" class="nav-link">
                                      <i class="far fa-circle nav-icon"></i>
                                      <p>Rekam Medis</p>
                                  </a>
                              </li>
                              <li class="nav-item">
                                  <a href="./index3.html" class="nav-link">
                                      <i class="far fa-circle nav-icon"></i>
                                      <p>CPPT</p>
                                  </a>
                              </li>
                              <li class="nav-item">
                                  <a href="./index3.html" class="nav-link">
                                      <i class="far fa-circle nav-icon"></i>
                                      <p>Tindakan Medis</p>
                                  </a>
                              </li>
                              <li class="nav-item">
                                  <a href="./index3.html" class="nav-link">
                                      <i class="far fa-circle nav-icon"></i>
                                      <p>Laboratorium</p>
                                  </a>
                              </li>
                              <li class="nav-item">
                                  <a href="./index3.html" class="nav-link">
                                      <i class="far fa-circle nav-icon"></i>
                                      <p>Radiologi</p>
                                  </a>
                              </li>
                              <li class="nav-item">
                                  <a href="./index3.html" class="nav-link">
                                      <i class="far fa-circle nav-icon"></i>
                                      <p>Resep/Obat</p>
                                  </a>
                              </li>
                              <li class="nav-item">
                                  <a href="./index3.html" class="nav-link">
                                      <i class="far fa-circle nav-icon"></i>
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
                                      <i class="far fa-circle nav-icon"></i>
                                      <p>Rekam Medis</p>
                                  </a>
                              </li>
                              <li class="nav-item">
                                  <a href="./index.html" class="nav-link">
                                      <i class="far fa-circle nav-icon"></i>
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
                                      <i class="far fa-circle nav-icon"></i>
                                      <p>Tindakan Medis</p>
                                  </a>
                              </li>
                              <li class="nav-item">
                                  <a href="./index.html" class="nav-link">
                                      <i class="far fa-circle nav-icon"></i>
                                      <p>Laboratorium</p>
                                  </a>
                              </li>
                              <li class="nav-item">
                                  <a href="./index.html" class="nav-link">
                                      <i class="far fa-circle nav-icon"></i>
                                      <p>Radiologi</p>
                                  </a>
                              </li>
                              <li class="nav-item">
                                  <a href="./index.html" class="nav-link">
                                      <i class="far fa-circle nav-icon"></i>
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
                                      <i class="far fa-circle nav-icon"></i>
                                      <p>Rekam Medis</p>
                                  </a>
                              </li>
                              <li class="nav-item">
                                  <a href="./index.html" class="nav-link">
                                      <i class="far fa-circle nav-icon"></i>
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
                                      <i class="far fa-circle nav-icon"></i>
                                      <p>Proses Resep</p>
                                  </a>
                              </li>
                              <li class="nav-item">
                                  <a href="./index.html" class="nav-link">
                                      <i class="far fa-circle nav-icon"></i>
                                      <p>Retur</p>
                                  </a>
                              </li>
                              <li class="nav-item">
                                  <a href="./index.html" class="nav-link">
                                      <i class="far fa-circle nav-icon"></i>
                                      <p>Penjualan Bebas</p>
                                  </a>
                              </li>
                              <li class="nav-item">
                                  <a href="./index.html" class="nav-link">
                                      <i class="far fa-circle nav-icon"></i>
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
