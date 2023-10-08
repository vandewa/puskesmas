@extends('layouts/app')

@section('content')
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="box-body card-success card-outline" style="padding-left: 100px; background-color:white">
                <div class="box-header">
                </div>
                <div class="row">
                    <div class="col-lg-3 col-6 mt-4">
                        <a href="{{ route('pasien.pendaftaran') }}" wire:navigate>
                            <!-- small box -->
                            <div class="small-box bg-success sedang">
                                <div class="inner jarak">
                                    <center><i class="far fa-edit fa-3x"></i></center>
                                </div>
                                <p class="small-box-footer">List Pasien</p>
                            </div>
                        </a>
                    </div>

                    <!-- ./col -->
                    <div class="col-lg-3 col-6 mt-4">
                        <!-- small box -->
                        <a href="{{ route('pasien.index') }}" wire:navigate>
                            <div class="small-box bg-success sedang">
                                <div class="inner jarak">
                                    <center><i class="fas fa-user-circle fa-3x"></i></center>
                                </div>
                                <p class="small-box-footer">Pasien</p>
                            </div>
                        </a>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6 mt-4">
                        <!-- small box -->
                        <div class="small-box bg-success sedang">
                            <div class="inner jarak">
                                <center><i class="fas fa-wheelchair fa-3x"></i></center>
                            </div>
                            <p class="small-box-footer">Rawat Jalan</p>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6 mt-4">
                        <!-- small box -->
                        <div class="small-box bg-success sedang">
                            <div class="inner jarak">
                                <center><i class="fas fa-bed fa-3x"></i></center>
                            </div>
                            <p class="small-box-footer">Rawat Inap</p>
                        </div>
                    </div>
                    <!-- ./col -->
                </div>
            </div>
            <!-- /.row -->

        </div><!-- /.container-fluid -->
    </section>
@endsection

@push('css')
    <style>
        .sedang {
            width: 60%;
        }

        .jarak {
            padding: 15px;
        }
    </style>
@endpush
