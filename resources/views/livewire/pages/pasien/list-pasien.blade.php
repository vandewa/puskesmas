<div>
    <x-slot name="header">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Data Pasien</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Data</a></li>
                    <li class="breadcrumb-item active">Pasien</li>
                </ol>
            </div>
        </div>
    </x-slot>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="card card-success card-outline">
                        <table class="table">
                            <thead>
                                <th>No RM</th>
                                <th>Nama Pasien</th>
                                <th>Tgl Lahir</th>
                                <th>Alamat</th>
                                <th></th>
                            </thead>
                            <tbody>
                                @foreach ($posts as $item)
                                <tr>
                                    <td>{{ $item->no_rm }}</td>
                                    <td>{{ $item->pasien_nm }}</td>
                                    <td>{{ $item->register_date }}</td>
                                    <td>
                                        {{ $item->provinsi->region_nm }}, {{ $item->kabupaten->region_nm??"" }}, {{ $item->kecamatan->region_nm??"" }}, {{ $item->kelurahan->region_nm ??""}}
                                        {{ $item->address }}
                                    </td>
                                    <td></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card -->
                </div>
            </div>

        </div>
    </section>

</div>
