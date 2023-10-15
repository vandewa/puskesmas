<div class="card-header p-0 pt-1">
    <ul class="nav nav-tabs" id="custom-tabs-one-transaksi-tab" role="tablist">
        <li class="nav-item">
            <a class="nav-link" id="custom-tabs-one-transaksi-tab"
                href="{{  route('transaksi.rawat-jalan.detail.rawat-jalan', $medicalcd??"")  }}" >Data
                Transaksi</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="custom-tabs-one-rm-tab" data-toggle="pill"
                href="#custom-tabs-one-rm" >Rekam Medis</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="custom-tabs-one-tindakan-tab" data-toggle="pill"
                href="#custom-tabs-one-tindakan">Tindakan
                Medis</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="custom-tabs-one-lab-tab" data-toggle="pill"
                href="#custom-tabs-one-lab">Laboratorium</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="custom-tabs-one-radiologi-tab" data-toggle="pill"
                href="#custom-tabs-one-radiologi"
                >Radiologi</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="custom-tabs-one-resep-tab"
                href="{{ route('transaksi.rawat-jalan.resep-obat', $medicalcd??"") }}"
                >Resep/Obat</a>
        </li>
    </ul>
</div>
