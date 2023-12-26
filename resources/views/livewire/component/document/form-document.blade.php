<div>
    <form wire:submit="simpan">
    <div class="row">
        <div class="col-md-6">
            <div class="form-group row">
                <div class="col-md-3">Jenis Dokumen</div>
                <div class="col-md-9">
                    <select  class="form-control" placeholder="Cari" wire:model.live='form.document_tp'>
                        <option value="">Pilih Jenis Dokumen</option>
                        @foreach ($jenisdokumen as $item)
                        <option value="{{  $item->com_cd }}">{{  $item->code_nm }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            @if($form['document_tp'] == 'DOCUMENT_TP_05' or $form['document_tp'] == 'DOCUMENT_TP_06')
            <div class="form-group row">
                <div class="col-md-3">Keterangan</div>
                <div class="col-md-9">
                    <input type="text" wire:model='form.keterangan' class="form-control" name="" id="">
                </div>
            </div>
            @endif
            <div class="form-group row">
                <div class="col-md-3">Data</div>
                <div class="col-md-9">
                    <input type="file" class="form-control" name="" id="" wire:model='path'>
                </div>
            </div>
        </div>
        <div class="col-md-6">


        </div>
        <div class="row mt-3">
            <label for="" class="col-form-label col-md-2"></label>
            <div class="col-md-10">
               <button class="btn btn-primary" type="submit">Simpan</button>
            </div>
        </div>
    </div>
    </form>
</div>
