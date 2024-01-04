<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <link rel="stylesheet" href="style.css"> --}}
    <title>Receipt example</title>

    <style>
        * {
            font-size: 12px;
            font-family: 'Times New Roman';
            margin-left: 0px;
        }

        .centered {
            text-align: center;
            align-content: center;
        }

        h4 {
            font-size: 14px;
        }

        h1 {
            font-size: 32px;
        }

        .ticket {
            width: 155px;
            max-width: 155px;
        }

        /* img {
            max-width: inherit;
            width: inherit;
        } */

        @media print {

            .hidden-print,
            .hidden-print * {
                display: none !important;
            }
        }
    </style>
</head>

<body>
    <div class="ticket">
        <div class="centered">
            <div style="margin-bottom: 5px;">
                <img src="{{ asset('pemda.png') }}" alt="" style="max-height: 50px;">
                <img src="{{ asset('puskesmas.png') }}" alt="" style="max-height: 50px;">
            </div>
            {{-- <b>PEMERINTAH KABUPATEN WONOSOBO</b><br><br>
            <b>DINAS KESEHATAN</b><br> --}}
            <b>UPTD PUSKESMAS SAPURAN</b><br><br>
            <span>Jl Kalibawang Km. 18 Kp. Sidodadi, Telp. (0286) 611028</span><br>
            <span>puskesmassapuran@gmail.com </span>
            <hr>
            {{-- <h4>Selamat Datang di MPP Kabupaten Wonosobo <br>Nomor Antrian:</h4> --}}
            <h4>NOMOR ANTRIAN</h4>
            <h1>{{ $data->poli->queue ?? '' }}{{ $data->queue_no }}</h1>
            <p class="centered">
                {{-- Tanggal Cetak: <br> --}}
                {{-- {{ date('Y-m-d H:i:s') }} --}}
                <span>{{ \Carbon\Carbon::now()->isoFormat('LLLL') }}</span>
                <br>
                <hr>
                <span>Semoga lekas sembuh</span><br><br>
                {{-- <br>© Puskesmas Sapuran --}}
                <hr>
            </p>
        </div>
    </div>
    <div style="margin-top: 200px;">
        <h2></h2>
        <div style="display: none;">
            <img src="{{ asset('puskesmas.png') }}" alt="" style="max-height: 50px;">

        </div>
    </div>
</body>

</html>
