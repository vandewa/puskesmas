
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Invoice Print</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('AdminLte') }}/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('AdminLte') }}/dist/css/adminlte.min.css">
</head>
<body>
<div class="wrapper">
  <!-- Main content -->
  <section class="invoice">
    <!-- title row -->
    <div class="row">
      <div class="col-12">
        <h2 class="page-header">
          <i class="fas fa-globe"></i> {{ $data->rs_nm }}
          <small class="float-right">Tanggal: {{ date('d/m/Y', strtotime($settlemen->entry_date)) }}</small>
        </h2>
      </div>
      <!-- /.col -->
    </div>
    <!-- info row -->
    <div class="row invoice-info">
      <div class="col-sm-4 invoice-col">
        Dari
        <address>
          <strong>{{ $settlemen->pasien->pasien_nm }}</strong><br>
          {{-- 795 Folsom Ave, Suite 600<br>
          San Francisco, CA 94107<br>
          Phone: (804) 123-5432<br>
          Email: info@almasaeedstudio.com --}}
        </address>
      </div>
      <!-- /.col -->
      <div class="col-sm-4 invoice-col">
        Kepada
        <address>
          <strong>{{ $data->rs_nm  }}</strong><br>
          {{-- 795 Folsom Ave, Suite 600<br>
          San Francisco, CA 94107<br>
          Phone: (555) 539-1037<br>
          Email: john.doe@example.com --}}
        </address>
      </div>
      <!-- /.col -->
      <div class="col-sm-4 invoice-col">
        <b>Nota #{{ $settlemen->invoice_no }}</b><br>
        <br>

      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->

    <!-- Table row -->
    <div class="row">
      <div class="col-12 table-responsive">
        <table class="table table-striped">
          <thead>
          <tr>
            <th>Qty</th>
            <th>Nama</th>
            <th>Harga</th>

            <th>Subtotal</th>
          </tr>
          </thead>
          <tbody>
            @foreach ($settlemen->tindakan as $item)
            <tr>
                <td>{{ $item->quantity }}</td>
                <td> {{ $item->data_nm }} </td>
                <td>{{ $item->item_price }}</td>
                <td>{{ $item->amount  }}</td>
              </tr>
            @endforeach


          </tbody>
        </table>
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->

    <div class="row">
      <!-- accepted payments column -->
      <div class="col-6">
        <table class="table table-bordered" >
            <tr>
                <td height="100" style="width:50%"></td>

                <td height="100" style="width:50%"> </td>

            </tr>
            <tr>
                <td class="text-center">{{ $settlemen->entry_nm }} <br>(Kasir)</td>
                <td class="text-center">{{ $settlemen->pasien->pasien_nm }} <br>(Penanggung Jawab)</td>
            </tr>


        </table>

      </div>
      <!-- /.col -->
      <div class="col-6">
        <p class="lead">Pembayaran Tanggal: {{ date('d/m/Y', strtotime($settlemen->entry_date)) }}</p>

        <div class="table-responsive">
          <table class="table">
            <tr>
              <th style="width:50%">Subtotal:</th>
              <td>{{ $settlemen->ext_amount }}</td>
            </tr>

            <tr>
              <th>Potongan:</th>
              <td>{{ $settlemen->amount_asuransi }}</td>
            </tr>
            <tr>
              <th>Total:</th>
              <td>{{ $settlemen->amount_pasien }}</td>
            </tr>
          </table>
        </div>
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </section>
  <!-- /.content -->
</div>
<!-- ./wrapper -->
<!-- Page specific script -->
<script>
  window.addEventListener("load", window.print());
</script>
</body>
</html>
