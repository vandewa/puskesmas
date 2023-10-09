<div>
<div class="row">
    <div id="div-form" class="col-sm-6">
        <form class="form-horizontal" method="post" id="form-resep" novalidate="" action="" enctype="multipart/form-data">
          <div class=" mb-1 row">
              <label class="col-sm-2 control-label">No Resep</label>
              <div class="col-sm-5">
                 <input type="text" name="no_resep" class="form-control" id="no_resep" style="width: 100%;" value="R-001231000000001" readonly="">
              </div>
          </div>
          <div class=" mb-1 row">
              <label class="col-sm-2 control-label">Obat</label>
              <div class="col-sm-6">
                 <!-- <select name="obat_cd" id="obat_cd" class="form-control select2-obat_cd" id="e7" style="width: 100%;"></select> -->
                  <input type="text" name="obat_search" id="obat_search" class="form-control" style="background-color: lightgoldenrodyellow">
                 <input type="hidden" name="obat_cd" id="obat_cd" class="form-control">
              </div>
              <div class="col-sm-3">
                  <label class="checkbox-inline">
                      <input type="checkbox" name="resep_tp" id="racik">
                      Racik
                  </label>
              </div>
              <script type="text/javascript">
                  $('#obat_cd').change(function () {
                      $.post("http://103.155.105.43:80/index.php/rawat-jalan/resep-obat/obat/name", {item_cd: $('#obat_cd').val()},
                      function (data)
                      {
                          obj = JSON.parse(data);
                          $('#obat_nm').val(obj.item_nm);
                      });
                  });
              </script>
          </div>
          <div class=" mb-1 row">
              <label class="col-sm-2 control-label"></label>
              <div class="col-sm-8">
                 <textarea id="obat_nm" name="obat_nm" class="form-control" readonly="readonly"></textarea>
              </div>
          </div>
          <div class=" mb-1 row">
              <label class="col-sm-2 control-label">Jumlah</label>
              <div class="col-sm-2">
                 <input type="number" name="jumlah" class="form-control" id="e7" style="width: 100%;" min="0">
              </div>
              <label for="satuan_jumlah" class="control-label"><p></p></label>
          </div>
          <div class=" mb-1 row">
              <label class="col-sm-2 control-label">Dosis</label>
              <div class="col-sm-2">
                 <input name="dosis_1" wire:model.live='dosisdepan' class="form-control" id="e7" style="width: 100%;">
              </div>
              <label class="col-sm-1 control-label">dd</label>
              <div class="col-sm-2">
                 <input name="dosis_2" wire:model.live='dosisbelakang' class="form-control" id="e7" style="width: 100%;">
              </div>
          </div>
          <div class=" mb-1 row">
              <label class="col-sm-2 control-label"></label>
              <div class="col-sm-8">
                  <label class="radio-inline">
                      <input name="consumption_type" type="radio" wire:model.live='hari' id="inlineRadio1" value="Sebelum Makan"> AC
                  </label>
                  <label class="radio-inline">
                      <input name="consumption_type" type="radio" wire:model.live='hari' id="inlineRadio1" value="Bersama Makan"> DC
                  </label>
                  <label class="radio-inline">
                      <input name="consumption_type" type="radio" wire:model.live='hari' id="inlineRadio1" value="Sesudah Makan"> PC
                  </label>
                  <label class="radio-inline">
                      <input name="consumption_type" type="radio" wire:model.live='hari' id="inlineRadio1" value="Bila perlu"> PRN
                  </label>
              </div>
          </div>
          <div class=" mb-1 row">
              <label class="col-md-2 control-label"></label>
              <div class="col-sm-8">
                  <label class="checkbox-inline">
                      <input type="checkbox" value="Pagi" wire:model.live='pagi'  name=""> Pagi
                  </label>

                  <label class="checkbox-inline">
                      <input type="checkbox" wire:model.live='siang' value="Siang"  name="consumption_day_2"> Siang
                  </label>
                  <label class="checkbox-inline">
                      <input type="checkbox" wire:model.live='sore' value="Sore" name="consumption_day_3"> Sore
                  </label>
                  <label class="checkbox-inline">
                      <input type="checkbox" wire:model.live='malam' value="Malam"  name="consumption_day_4"> Malam
                  </label>
              </div>
          </div>
          <div class=" row mb-1">
              <label class="col-md-2 control-label"></label>
                  <div class="col-sm-8">
                      <div class="checkbox">
                          <label>
                              <input type="checkbox" value="habiskan" wire:model.live='habiskan' name="consumption_finished">
                              <p style="font-weight: bold;"> Habiskan</p>
                          </label>
                      </div>
                  </div>
                  <div class="clearfix"></div>
          </div>

          <div class=" mb-1 row">
              <label class="col-sm-2 control-label"></label>
              <div class="col-sm-8">
                 <textarea id="dosis_akhir" name="dosis_akhir" class="form-control">{{ $this->catatan }}</textarea>
              </div>
          </div>
          <div class=" mb-1">
              <div class="col-sm-offset-2 col-sm-10">
                  <button type="button" class="btn btn-primary btn-sm btn-flat btn-tambah"><i class="fa fa-plus"></i> Tambah</button>
                  <button type="button" class="btn btn-default btn-sm btn-flat btn-kembali"><i class="fa fa-mail-reply"></i> Kembali</button>
              </div>
          </div>
      </form>
    </div>
    <div class="col-sm-6">
        <form id="form-isian" class="form-horizontal" method="post" novalidate="" action="" enctype="multipart/form-data">
          <div class=" mb-1 row">
              <label class="col-sm-2 control-label">Tanggal</label>
              <div class="col-sm-8">
                  <input type="text" id="datetime_trx" required="required" name="datetime_trx" value="09/10/2023" class="form-control jqui-datepicker" readonly="readonly">
              </div>
          </div>
          <div class=" mb-1 row">
              <label class="col-sm-2 control-label">Dokter</label>
              <div class="col-sm-8">
                 <select name="dr_cd" class="form-control select2-dokter select2-hidden-accessible" id="dr_cd" style="width: 100%;" tabindex="-1" aria-hidden="true"><option value="DR0004">dr. ANDI BASKOSO Sp.A</option></select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-dr_cd-container"><span class="select2-selection__rendered" id="select2-dr_cd-container" title="dr. ANDI BASKOSO Sp.A">dr. ANDI BASKOSO Sp.A</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
              </div>
          </div>
          <input name="medical_cd" type="text" value="180000003" hidden="">

          <div class=" mb-1 row">
              <label class="col-sm-2 control-label">Catatan</label>
              <div class="col-sm-8">
                 <textarea name="note" id="note" class="form-control"></textarea>
              </div>
          </div>

      </form>

      <br>

        <div class=" mb-1">
            <div class="col-sm-2 col-sm-offset-10">
              <label class="checkbox-inline">
                  <input type="checkbox" name="kronis" id="kronis">
                  <b class="text-danger">KRONIS</b>
              </label>
          </div>

        </div>

        <br>

        <div id="table-resep_wrapper" class="dataTables_wrapper form-inline dt-bootstrap4 no-footer"><div class="top"></div><table id="table-resep" class="table table-bordered dataTable no-footer" style="height: 200px" role="grid">
          <thead>
              <tr role="row"><th class="sorting" tabindex="0" aria-controls="table-resep" rowspan="1" colspan="1" aria-label="Nama Obat: activate to sort column ascending">Nama Obat</th><th class="table-cell-edit sorting" tabindex="0" aria-controls="table-resep" rowspan="1" colspan="1" aria-label="Jumlah: activate to sort column ascending">Jumlah</th><th class="table-cell-edit sorting" tabindex="0" aria-controls="table-resep" rowspan="1" colspan="1" aria-label="Dosis: activate to sort column ascending">Dosis</th><th class="sorting" tabindex="0" aria-controls="table-resep" rowspan="1" colspan="1" aria-label="Satuan: activate to sort column ascending">Satuan</th><th class="sorting" tabindex="0" aria-controls="table-resep" rowspan="1" colspan="1" aria-label=": activate to sort column ascending"></th></tr>
          </thead>
      <tbody><tr class="odd"><td valign="top" colspan="5" class="dataTables_empty">No data available in table</td></tr></tbody></table><div class="bottom"></div><div class="clear"></div></div>
      <div class="pull-right">

          <button type="submit" class="btn btn-primary btn-sm btn-flat btn-simpan"><i class="fa fa-save"></i> Simpan</button>
      </div>
    </div>
</div>
</div>
