

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Copy Resep</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css') }}/print-copy-resep.css">
    <!-- <link rel="stylesheet" type="text/css" href="http://103.155.105.43:80/assets/print/css/cetak-resep.css"> -->
    {{-- <script src="http://103.155.105.43:80/assets/plugins/jquery/jquery.min.js"></script> --}}
    <style type="text/css">

        h4, h5{
            padding-top: 0;
            padding-bottom: 5px;
            margin-top: 0;
            margin-bottom: 0;
            font-weight: bold;
        }

        table {
            border-collapse: collapse;
            width: 100%;
            border-width: none 0;
            font-size: 10px;
        }

        .box{
            margin: 0px;
        }

        .header, .wrapper {
            width: 100%;
            display: block;     }

        .wrapper{
            border-top: transparent;
            display: block;
            margin: 0;
            /*font-family: monospace;*/
            font-family:Tahoma, Verdana, Segoe, sans-serif;
            font-size: 12px
        }

        .info{
            padding-top: 10px;
            padding-bottom: 10px;
            border: 1px solid black;
            border-top: transparent;
        }

        .icon{
            width: 20%;
            display: block;
        }

        .text{
            width: 70%;
            display: block;
            float: right;
            margin-top: -53px;
        }

        #dokter{
            margin-top: 10px;
        }

        .no-antrian .page{
            width: 300px;
        }

        .text-apt{
            margin-top: 5px;
        }

        .content-kiri
        {
            width: 70%;
            float: left;
            padding-right: 0;
        }

        .date .content-kiri .space-noresep
        {
            margin-left: 28px;
        }

        .date .left .space-nama-pasien
        {
            margin-left: 3px;
        }

        .date .left .space-tgl-lahir
        {
            margin-left: 35px;
        }

        .date .left .space-norm
        {
            margin-left: 45px;
        }

        .space-obat
        {
            margin-left: 4px;
            position: relative;
            display: inline-table;
        }

        .space-jumlah-obat
        {
            text-align:left;
            padding-left:15px;
            margin-top: 5px;
            margin-bottom:5px;
        }

        .space-jumlah-obat .jumlah-obat
        {
            margin-left: 4px;
            position: relative;
            display: inline-table;
        }

        .space-doctor
        {
            margin-left: 9px;
        }


        .expired-dates
        {
            margin-left: 14px;
        }

        .keterangan-resep{
            margin-left: 16px;
        }

        .content-kanan
        {
            width: 30%;
            float: right;
            padding-right: 0;
            padding-left: 0;
        }

        .left, .right
        {
            width: 100% !important;
        }

        .table_conten
        {
            text-align: left;

        }

         @media print {
            @page {
                size: A4;
                margin: 10px;
            }

            footer {page-break-after: always;}

            html, body {
                margin-left: 10px !important;
            }
        }

        .text {
            font-family: monospace;
        }

        .page {
            display: block;
            margin: 0;
            /*font-family: monospace;*/
            font-family:Tahoma, Verdana, Segoe, sans-serif;
            font-size: 10px
        }

        .icon-logo-copyrecipe{
            display: inline-block;
            margin-top: 10px;
            float: left;
        }
        .icon-logo-copyrecipe .image-symbol-copyrecipe{
            width: 30px;
            height:auto;
        }
        .pull-left .main-container-recipes{
            padding: 7px 14px;

        }
        .pull-left .main-container-recipes .main-informations{
            display: block;
            float: left;
            width: 52%;
            font-size: 10px;
            /*margin-left: 20px;*/
        }
        .main-second-container-recipes div.information-potion{
            display:block;
            width: 20%;
            float: left;
            font-size: 10px;
            text-align: left;
        }
        .main-informations div.information-potion{
            text-align: left;
        }
        .footer .place{
            display: inline-block;
            float: left;
            margin-top: 100px;
        }
        .spacer-datenow{
            margin-bottom: 4px;
        }
    </style>
</head>
<body class="no-antrian">


    <div class="page">
        <div class="header">
            <div class="box">
                <div class="icon">
                    <img src="" style="width: 80px;height: 60px">
                </div>
                <div class="text">
                    <!-- <h3>RS SIMULASI</h3> -->
                    <!-- <h3>INSTALASI FARMASI</h3> -->
                    <h3>{{ $rs->rs_nm }}</h3>
                    <!-- <p style="font-size: 8px;">Jalan Amarilis, RT. 2 / RW. 12, Jatibening, Pondokgede, Kota Bekasi,  Telp.  </p> -->
                    <p style="font-size: 8px;">{{ $rs->address }}</p>
                    <p>Telp. {{ $rs->phone }} </p>

                    <!--<p class="text-apt">Apoteker : </p>-->
                </div>
            </div>
        </div>
        <hr>
        <h3 id="copi">COPY RESEP</h3>
        <div class="wrapper">
            <table cellpadding="0">
                <tbody>
                    <tr>
                        <td>Nama Apoteker</td>
                        <td>: </td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>No. SIPA</td>
                        <td>: </td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Nama Dokter</td>
                        <td>: {{ $data->dokter->dr_nm??"-" }}</td>
                    </tr>
                    <tr>
                        <td>Nomor Resep</td>
                        <td>: {{ $data->resep_no }}</td>
                    </tr>
                    <tr>
                        <td>Nama Pasien</td>
                        <td>: {{ $data->medical->pasien->pasien_nm??"-" }}</td>
                    </tr>
                    <tr>
                        <td>Tgl. Resep</td>
                        <td>: {{ $data->resep_date }}</td>
                    </tr>
                    <tr>
                        <td>Umur</td>
                        <td>:
                            @php
                            if($data->medical->pasien->birth_date??"" != "") {
                                $birthDate = new DateTime($data->medical->pasien->birth_date);
                                $today = new DateTime($data->resep_date);

                                $y = $today->diff($birthDate)->y;
                                $m = $today->diff($birthDate)->m;
                                $d = $today->diff($birthDate)->d;
	                        echo $y." tahun ".$m." bulan ".$d." hari";
                            }
                            else {
                            echo "0 tahun 0 bulan 0 hari";
                            }

                            @endphp

                        </td>
                    </tr>

                </tbody>
            </table>
        </div>
        <hr>
        <p class="place" style="margin-left: 180px">Wonosobo, {{ date('d-M-Y') }}</p>
        <table cellpadding="0">
            <tbody>
                @foreach ($data->resepData??[] as $item)
                <tr>
                    <td>{!! $item->data_nm !!}</td>
                    <td>
                        {{ $item->quantity }}
                        {{ $item->info_02 }}
                        <br>
                        {!! $item->info_01 !!}
                    </td>
                    </td>
                    <!-- <td>3x3  Bersama Makan Habiskan Pagi   </td> -->
                </tr>

                @endforeach
                </tbody>
        </table>
        <hr>
            <div style="text-align: center">
                <h4>Kajian Resep PIO</h4>
            </div>
            <table border="1">
                <tbody>
                <tr style="height: ;">
                <td style="width: 281px; height: 23px;" colspan="2">&nbsp;Kajian Resep Dan PIO</td>
                <td style="width: 45.0781px; height: 23px;">&nbsp;Ya</td>
                <td style="width: 17.9219px; height: 23px;">&nbsp;Tidak</td>
                </tr>
                <tr style="height: 23px;">
                <td style="width: 122px; height: 46px;" rowspan="2">Awal</td>
                <td style="width: 159px; height: 23px;">&nbsp;Resep Terbaca</td>
                <td style="width: 45.0781px; height: 23px;">&nbsp;</td>
                <td style="width: 17.9219px; height: 23px;">&nbsp;</td>
                </tr>
                <tr style="height: 23px;">
                <td style="width: 159px; height: 23px;">&nbsp;Tepat Identitas Pasien</td>
                <td style="width: 45.0781px; height: 23px;">&nbsp;</td>
                <td style="width: 17.9219px; height: 23px;">&nbsp;</td>
                </tr>
                <tr style="height: 23px;">
                <td style="width: 122px; height: 92.5px;" rowspan="4">&nbsp;Akhir</td>
                <td style="width: 159px; height: 23px;">&nbsp;Tepat Obat</td>
                <td style="width: 45.0781px; height: 23px;">&nbsp;</td>
                <td style="width: 17.9219px; height: 23px;">&nbsp;</td>
                </tr>
                <tr style="height: 23px;">
                <td style="width: 159px; height: 23px;">&nbsp;Tepat Dosis</td>
                <td style="width: 45.0781px; height: 23px;">&nbsp;</td>
                <td style="width: 17.9219px; height: 23px;">&nbsp;</td>
                </tr>
                <tr style="height: 23px;">
                <td style="width: 159px; height: 23px;">&nbsp;Tepat Rute Pemberian</td>
                <td style="width: 45.0781px; height: 23px;">&nbsp;</td>
                <td style="width: 17.9219px; height: 23px;">&nbsp;</td>
                </tr>
                <tr style="height: 23.5px;">
                <td style="width: 159px; height: 23.5px;">&nbsp;Tepat Waktu Pemberian</td>
                <td style="width: 45.0781px; height: 23.5px;">&nbsp;</td>
                <td style="width: 17.9219px; height: 23.5px;">&nbsp;</td>
                </tr>
                <tr style="height: 23px;">
                <td style="width: 281px; height: 23px;" colspan="2">&nbsp;Pio Kepada Pasien</td>
                <td style="width: 45.0781px; height: 23px;">&nbsp;Ya</td>
                <td style="width: 17.9219px; height: 23px;">Tidak&nbsp;</td>
                </tr>
                <tr style="height: 23px;">
                <td style="width: 281px; height: 23px;" colspan="2">&nbsp;Cara Minum Obat</td>
                <td style="width: 45.0781px; height: 23px;">&nbsp;</td>
                <td style="width: 17.9219px; height: 23px;">&nbsp;</td>
                </tr>
                <tr style="height: 23px;">
                <td style="width: 281px; height: 23px;" colspan="2">&nbsp;Efek Samping</td>
                <td style="width: 45.0781px; height: 23px;">&nbsp;</td>
                <td style="width: 17.9219px; height: 23px;">&nbsp;</td>
                </tr>
                <tr style="height: 23px;">
                <td style="width: 281px; height: 23px;" colspan="2">&nbsp;Penyimpanan Obat di Rumah</td>
                <td style="width: 45.0781px; height: 23px;">&nbsp;</td>
                <td style="width: 17.9219px; height: 23px;">&nbsp;</td>
                </tr>
                </tbody>
                </table>
                <!-- DivTable.com -->

    </div>

</body>
<script type="text/javascript">
     window.onload = function() { window.print(); }
     setTimeout(function(){ close(); }, 1000);
</script>
</html>
