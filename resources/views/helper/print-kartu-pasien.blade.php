    <!DOCTYPE html>
    <html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>RS SIMULASI</title>
        <link rel="shortcut icon" href="http://103.155.105.43:80/assets/images/HEXSYS.png">
    </head>
    <style type="text/css">
        * {
            margin: 0;
            padding: 0;
        }

        .main-container-labels {
            display: inline;
        }

        .datetimein {
            font-size: 12px;
            font-style: bold;
        }

        .tgllahir {
            font-size: 12px;
            font-style: bold;
        }

        .panel {
            display: block;
            font-size: 12px;
            font-family: calibri;
        }

        .main-left {
            float: left;
            margin-top: 5px;
            margin-left: 5px;
        }

        .cols-2 {
            width: 20%;
        }

        .cols-6 {
            width: 60%;
        }

        .cols-4 {
            width: 40%;
        }

        .panel-boxlabel {
            font-size: 14px;
            border-radius: 6px;
            float: left;
            /* padding: 5px; */
            width: 4.5cm;
            height: 2cm;
        }

        .uppercase-font {
            text-transform: uppercase;
        }

        .text-float-left {
            text-align: left;
        }

        .text-float-right {
            text-align: right;
        }

        .font-smalstyle {
            font-size: 9px;
        }

        .barcodeTarget {
            /* float: right; */
            /* margin-right: -20px; */
        }

        @media print {
            @page {
                size: 4cm 3cm landscape;
            }

            /*.break-pages{
        page-break-after: always;
        }*/
        }
    </style>

    <body class="cols-2">
        <div class="main-container-labels">
            <div class="panel panel-boxlabel">
                <div class="main-left uppercase-font">
                    <p><strong>RM. {{ $data->no_rm ?? '' }}</strong> [<span class="datetimein">
                            {{ $data->jenisKelamin->code_nm ?? '' }} </span>] </p>
                    <p><strong>{{ substr($data->pasien_nm ?? '', 0, 18) }}</strong></p>
                    <div class="uppercase-font font-smalstyle">
                        <span class="tgllahir">
                            {{ $data->birth_date ?? '' }}
                        </span>
                    </div>
                </div>
                <div class="mt-3">
                    <table>
                        <tbody>
                            <tr>
                                <td>
                                    {!! DNS1D::getBarcodeHTML($data->no_rm, 'C128', 1, 15) !!}
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </body>
    <script src="http://103.155.105.43:80/assets/plugins/jquery/jquery.min.js"></script>

    </html>
    <script type="text/javascript">
        window.onload = function() {
            window.print();
            setTimeout(function() {
                close();
            }, 100);
        }
    </script>
