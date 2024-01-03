<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Receipt example</title>

    <style>
        * {
            font-size: 12px;
            font-family: 'Times New Roman';
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

        img {
            max-width: inherit;
            width: inherit;
        }

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
            <h4>Selamat Datang di MPP Kabupaten Wonosobo <br>Nomor Antrian:</h4>
            <h1>{{ $data->poli->queue ?? '' }}{{ $data->queue_no }}</h1>

        </div>

        <p class="centered">
            Tanggal Cetak: <br>
            {{ date('Y-m-d H:i:s') }}
            <br>Dipersembahkan oleh:
            <br>Diskominfo Wonosobo
        </p>
    </div>
    <script>
        // window.print();
        // setTimeout(window.close(), 5000);
    </script>
</body>

</html>
