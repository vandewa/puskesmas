

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{-- <link rel="shortcut icon" href="http://103.155.105.43:80/assets/images/HEXSYS.png" type="image/x-icon" /> --}}
    <title>Print Resep</title>
    {{-- <link rel="stylesheet" type="text/css" href="http://103.155.105.43:80/assets/print/css/cetak-resep.css"> --}}
    {{-- <script src="http://103.155.105.43:80/assets/plugins/jquery/jquery.min.js"></script> --}}
    <style type="text/css">
    .no-antrian .page { width: 350px; max-width: 100%; margin: 7px;margin-top: 15px; text-align: center; }
    @page {
        size:7cm 4cm;
    }
        h3 {
            font-size: 12px;
        }
        h4, h5{
            padding-top: 0;
            padding-bottom: 5px;
            margin-top: 0;
            margin-bottom: 0;
            font-weight: bold;
            font-size: 10px
        }

        .box{
            margin: 5px;
        }

        .header, .wrapper, .footer {
            width: 100%;
            display: block;
            border: 1px solid black;
        }


        .info{
            padding-top: 10px;
            padding-bottom: 10px;
            border: 1px solid black;
            border-top: transparent;
        }

        .icon{
            width: 30%;
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
            width: 250px;
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

        table {
            font-size: 10px;
        }
        .wrapper {
            padding-top:3px;
            padding-right: 10px;
            padding-left: 10px;
            padding-bottom: 13px;
        }

        @media print {
            footer {page-break-after: always;}
            @page {
                size:7cm 4cm;
            }
        }
    </style>
</head>
<body class="no-antrian">
<!-- @foreach ($data as $element) -->
	<div class="page">
		<!-- <div class="header">
			<div class="box">
				<div class="icon">
                    <img src="http://103.155.105.43:80/assets/images/HEXSYS.png" style="width: 60px;height: 50px">
				</div>
				<div class="text">
					<h3>RS SIMULASI</h3>
					<h4>INSTALASI FARMASI</h4>
					<p style="font-size: 8px;">Jalan Amarilis, RT. 2 / RW. 12, Jatibening, Pondokgede, Kota Bekasi,  Telp. </p>
				</div>
			</div>
		</div> -->
		<div class="wrapper">
            <div>
                <table width="100%">
                    <tbody>
                        <tr>
                            <td align="left">00100000006</td>
                            <td align="right">17/12/2023</td>

                        </tr>
                    </tbody>
                </table>
                <br>
                <p style="font-size: 12px" align="left">AHMAD RIVALDI</p>
                <br>
                <br>
                <p style="font-size: 10px" align="left">3x3  Bersama Makan Habiskan Pagi   </p>
                <br>
                <p style="font-size: 10px" align="left">7 TABLET</p>
                <p style="font-size: 10px" align="left">PIROXICAM 10MG</p>

            </div>


		</div>
        <!-- <div class="footer" style="padding: 5px">
            <p style="font-size: 10px">Terima Kasih</p>
            <p style="font-size: 10px">Semoga Lekas Sembuh</p>
        </div> -->
	</div>
    <footer></footer>
    <!-- @endforeach -->
    </body>
<script type="text/javascript">
    window.onload = function() { window.print(); }
    setTimeout(function(){ close(); }, 1000);
</script>
</html>
