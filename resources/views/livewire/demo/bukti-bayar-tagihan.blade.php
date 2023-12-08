<div>
    <x-slot name="header">
        <div class="mb-2 row">
            <div class="col-sm-6">
                <h1 class="m-0">Bukti Bayar</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Pendaftaran</a></li>
                    <li class="breadcrumb-item active">Bukti Bayar</li>
                </ol>
            </div>
        </div>
    </x-slot>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">


                    <div class="card card-info">
                        <div class="card-header">
                            <h3 class="card-title"> Bukti Bayar</h3>
                        </div>
                        <!-- /.card-header -->

                        <div class="card-body ">

                            <div class="card-body row">
                                <div class="text-left col-md-5 col-sm-12">
                                    <div class="">
                                        <span>Tanggal Tagihan :</span><br>
                                        <span>Nama Layanan :</span><br>
                                        <span>Jumlah Tagihan :</span>
                                    </div>
                                </div>
                                <div class="col-md-7 col-sm-12">
                                    @if (session('status'))
                                        <div class="alert alert-success">
                                            {{ session('status') }}
                                        </div>
                                    @endif

                                    <form action="" wire:submit="save">
                                        <div class="form-group">
                                            <label for="inputName">Bukti Bayar </label>
                                            <input type="file" id="inputName"
                                                class="form-control @error('bukti') is-invalid @enderror"
                                                wire:model='bukti'>
                                            @error('bukti')
                                                <span id="exampleInputEmail1-error"
                                                    class="error invalid-feedback">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <input type="submit" class="btn btn-primary" value="Simpan">
                                        </div>
                                    </form>
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
