@extends('layouts/app')

@section('content')
    <div id="idnsticky_bar">
        <div id="sticybaricon">
            <a href="#" id="cs-logo">
                <span></span> </a>
        </div>
        <div id="sticky_bar_text">
            <p class="customdesco">
                <span style="font-family: 'Baloo Tammudu 2'; color:white;">Selamat Datang di </span>
            </p>
        </div>
        <div id="sticky_bar_btn">
            <a href="#"><button class="btn-hover color-2 ml-1">E-RM Puskesmas</button></a>
        </div>
    </div>


    <section class="content mt-5">
        <div class="container-fluid">

            <!-- Small boxes (Stat box) -->
            <div class="box-body card-success card-outline" style="background-color:white; padding-bottom:20px;">
                <div class="box-header">
                </div>
                <div class="container" style="max-width: 970px;">
                    <div class="row">
                        <div class="col-lg-3 col-6 mt-4">
                            <!-- small box -->
                            <a href="{{ route('pasien.pendaftaran') }}" wire:navigate class="hvr-float-shadow">
                                <div class="small-box bg-success" style="width: 150px;">
                                    <div class="inner jarak">
                                        <center><i class="far fa-edit fa-3x"></i></center>
                                    </div>
                                    <p class="small-box-footer">Pendaftaran Pasien</p>
                                </div>
                            </a>
                        </div>

                        <!-- ./col -->
                        <div class="col-lg-3 col-6 mt-4">
                            <!-- small box -->
                            <a href="{{ route('pasien.index') }}" wire:navigate class="hvr-float-shadow">
                                <div class="small-box bg-success" style="width: 150px;">
                                    <div class="inner jarak">
                                        <center><i class="fas fa-user-circle fa-3x"></i></center>
                                    </div>
                                    <p class="small-box-footer">List Pasien</p>
                                </div>
                            </a>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-3 col-6 mt-4">
                            <!-- small box -->
                            <a href="{{ route('registrasi.rawat-jalan') }}" wire:navigate class="hvr-float-shadow">
                                <div class="small-box bg-success" style="width: 150px;">
                                    <div class="inner jarak">
                                        <center><i class="fas fa-wheelchair fa-3x"></i></center>
                                    </div>
                                    <p class="small-box-footer">Rawat Jalan</p>
                                </div>
                            </a>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-3 col-6 mt-4">
                            <!-- small box -->
                            <a href="{{ route('registrasi.rawat-inap') }}" wire:navigate class="hvr-float-shadow">
                                <div class="small-box bg-success" style="width: 150px;">
                                    <div class="inner jarak">
                                        <center><i class="fas fa-bed fa-3x"></i></center>
                                    </div>
                                    <p class="small-box-footer">Rawat Inap</p>
                                </div>
                            </a>
                        </div>
                    </div>
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
    <style>
        #idnsticky_bar {
            padding: 8px 5px;
            background-image: linear-gradient(to right, #287a83, #15ab04, #15ab04, #287a83);
            position: -webkit-sticky;
            top: 0;
            z-index: 999;
            text-align: center;
            box-shadow: 0px 1px 11px #888888;
            color: #000000;
            font-family: 'Viga', sans-serif;
            font-size: 1.1em;
            display: block;
        }

        #sticky_bar_text,
        #sticybaricon,
        #sticky_bar_btn {
            display: inline-block;
        }

        #cs-logo {
            height: 27px;
            padding-top: 7px;
            background: url(https://app.crowdsignal.com/images/logo-white.svg) no-repeat center center;
            background-size: 30px 30px;
            width: 40px;
            color: transparent;
            display: list-item;
        }

        .btn-hover {
            font-size: 16px;
            font-weight: 600;
            color: #fff;
            cursor: pointer;
            padding: 10px 15px;
            text-align: center;
            border: none;
            background-size: 300% 100%;
            border-radius: 50px;
            moz-transition: all .4s ease-in-out;
            -o-transition: all .4s ease-in-out;
            -webkit-transition: all .4s ease-in-out;
            transition: all .4s ease-in-out;
        }

        .btn-hover:hover {
            background-position: 100% 0;
            moz-transition: all .4s ease-in-out;
            -o-transition: all .4s ease-in-out;
            -webkit-transition: all .4s ease-in-out;
            transition: all .4s ease-in-out;
        }

        p.customdesco {
            margin: 0;
            font-weight: 300;
        }

        .btn-hover:focus {
            outline: none;
        }

        .btn-hover.color-1 {
            background-image: linear-gradient(to right, #eb3941, #f15e64, #e14e53, #e2373f);
            box-shadow: 0 5px 15px rgba(242, 97, 103, .4);
        }

        .btn-hover.color-2 {
            background-color: white;
            color: #000000;
        }
    </style>
@endpush
