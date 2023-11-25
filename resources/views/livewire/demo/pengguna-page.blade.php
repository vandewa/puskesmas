<div>
    <x-slot name="header">
        <div class="mb-2 row">
            <div class="col-sm-6">
                <h1 class="m-0">Pengguna</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Admin</a></li>
                    <li class="breadcrumb-item active">Pengguna
            </div>
        </div>
    </x-slot>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">



                      <div class="card card-info">
                    <div class="card-header">
                    <h3 class="card-title"> Pengguna</h3>


                    </div>
                    <!-- /.card-header -->

                    <div class="card-body ">


                        <div class="row">

                                <div class="p-0 table-responsive">
                                    <table class="table table-hover text-nowrap">
                                        <thead>
                                        <tr>
                                            <th>Nama</th>
                                            <th>Email</th>
                                            <th>Telepon</th>
                                            <th>Status</th>
                                            <th>Role</th>
                                            <th>Tanggal Aktivasi</th>

                                            <th>Aksi</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ( $posts as $item)
                                            <tr>
                                                <td>{{ $item->name }}</td>
                                                <td>{{ $item->email }}</td>
                                                <td>{{ $item->telepon }}</td>
                                                <td>{{ $item->active_st }}</td>
                                                <td>{{ $item->name }}</td>
                                                <td>{{ $item->tanggal_upload }}</td>
                                                <td>
                                                    <button class="btn btn-sm btn-primary" >Detail</button>
                                                </td>
                                            </tr>
                                            @endforeach


                                        </tbody>
                                    </table>
                                    {{ $posts->links() }}
                                </div>
                            </div>

                        </div>


                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
                </div>
            </div>
        </div>
    </section>
</div>
