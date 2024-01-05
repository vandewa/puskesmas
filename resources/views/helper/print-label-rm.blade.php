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
            size: 4.5cm 3cm landscape;
        }

        /*.break-pages{
    page-break-after: always;
    }*/
    }
</style>

<body class="cols-2">
    <!-- @section('content') -->
        <page>
            <div class="main-container-labels">
                <div class="panel panel-boxlabel">
                    <div class="main-left uppercase-font">
                        <p><strong>RM. 00000006</strong> [<span class="datetimein"> L </span>] </p>
                        <p><strong>AHMAD RIVALDI </strong></p>
                        <div class="uppercase-font font-smalstyle">
                            <span class="tgllahir">
                                04/09/2017 (6 thn 4 bln) </span>
                            <p>CEMPAKA 1/TIM DOKTER</p>
                        </div>
                    </div>
                    <div class="barcodeTarget" id="barcode0" align=""></div>
                </div>
            </div>
            <!-- <div class="break-pages"> </div> -->
        </page>
    </body>
    <script src="http://103.155.105.43:80/assets/plugins/jquery/jquery.min.js"></script>
    <script type="text/javascript" src="http://103.155.105.43:80/assets/plugins/barcode/jquery-barcode.js"></script>
    <script type="text/javascript">
        function generateBarcode() {
            var value = "00000006";
            var btype = 'code128';
            var renderer = 'css';

            var settings = {
                output: renderer,
                bgColor: '',
                color: '#000000',
                barWidth: '1',
                barHeight: '20',
                showHRI: false,
            };
            $("#barcode0").html("").show().barcode(value, btype, settings);
        }

        $(document).ready(function() {
            generateBarcode();
        });
    </script>

    </html>
    <script type="text/javascript">
        window.onload = function() {
            window.print();
            setTimeout(function() {
                close();
            }, 100);
        }
    </script>
