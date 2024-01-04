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
            <b>{{ ucwords($puskesmas->rs_nm ?? '') }}</b><br><br>
            <span>{{ $puskesmas->address ?? '' }}</span><br>
            <span>{{ $puskesmas->email ?? '' }} </span><br>
            <span>{{ $puskesmas->phone ?? '' }} </span><br>
            <hr>
            {{-- <h4>Selamat Datang di MPP Kabupaten Wonosobo <br>Nomor Antrian:</h4> --}}
            <h4>NOMOR ANTRIAN</h4>
            <h1>{{ $data->poli->queue ?? '' }}{{ $data->queue_no }}</h1>
            <p class="centered">
                {{-- Tanggal Cetak: <br> --}}
                {{-- {{ date('Y-m-d H:i:s') }} --}}
                <span>{{ $data->poli->medunit_nm ?? '' }}</span><br><br>
                {{ $qr }}<br><br>
                <span>{{ \Carbon\Carbon::now()->isoFormat('LLLL') }}</span>
                <br>
                <hr>
                <span><b>Semoga lekas sembuh :)</b></span><br><br>

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

    <script>
        // Cetak halaman
        window.print();

        // Menutup jendela cetak setelah pencetakan selesai atau dibatalkan
        window.addEventListener('afterprint', function(event) {
            // Menutup jendela cetak
            window.close();
        });
    </script>
</body>

</html>
