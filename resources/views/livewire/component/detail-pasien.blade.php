 {{-- DETAIL PASIEN --}}
 <div class="detail-pasien mb-4">
     <div class="row">
         <div class="col-md-4">
             <div class="form-group row margin-bawah">
                 <label class="col-sm-5 control-label pasien">Nama Pasien</label>
                 <label class="col-sm-1 control-label pasien">:</label>
                 <div class="col-sm-6">
                     <label for="pasien_nm" class="control-label pasien">{{ $item->pasien->pasien_nm ?? '' }}</label>
                 </div>
             </div>
             <div class="form-group row margin-bawah">
                 <label class="col-sm-5 control-label pasien">Jenis Rawat</label>
                 <label class="col-sm-1 control-label pasien">:</label>
                 <div class="col-sm-6">
                     <label for="pasien_nm" class="control-label pasien">{{ $item->jenisRawat->code_nm ?? '' }}</label>
                 </div>
             </div>
         </div>
         <div class="col-md-4">
             <div class="form-group row margin-bawah">
                 <label class="col-sm-5 control-label pasien">No RM</label>
                 <label class="col-sm-1 control-label pasien">:</label>
                 <div class="col-sm-6">
                     <label for="pasien_nm" class="control-label pasien">{{ $item->pasien->no_rm ?? '' }}</label>
                 </div>
             </div>
             <div class="form-group row margin-bawah">
                 <label class="col-sm-5 control-label pasien">Unit</label>
                 <label class="col-sm-1 control-label pasien">:</label>
                 <div class="col-sm-6">
                     @if ($item->medical_tp == 'MEDICAL_TP_01')
                         <label for="pasien_nm" class="control-label pasien">{{ $item->poli->medunit_nm ?? '' }}</label>
                     @else
                         <label for="pasien_nm" class="control-label pasien">{{ $item->ruang->ruang_nm ?? '' }}</label>
                     @endif
                 </div>
             </div>
         </div>
         <div class="col-md-4">
             <div class="form-group row margin-bawah">
                 <label class="col-sm-5 control-label pasien">Usia</label>
                 <label class="col-sm-1 control-label pasien">:</label>
                 <div class="col-sm-6">
                     <label for="pasien_nm"
                         class="control-label pasien">{{ hitung_umur($item->pasien->birth_date ?? '') }}</label>
                 </div>
             </div>
             <div class="form-group row margin-bawah">
                 <label class="col-sm-5 control-label pasien">Dokter</label>
                 <label class="col-sm-1 control-label pasien">:</label>
                 <div class="col-sm-6">
                     <label for="pasien_nm" class="control-label pasien">{{ $item->dokter->dr_nm ?? '' }}</label>
                 </div>
             </div>
         </div>
     </div>
 </div>
 @push('css')
     <style>
         .detail-pasien {
             background: #0193a9;
             color: #fff;
             text-transform: uppercase;
             font-weight: bold;
             font-size: 15px;
             text-align: left;
             padding-left: 10px;
             padding-top: 10px;
             padding-bottom: 5px;
             padding-right: 10px;
             border-top-left-radius: 10px;
             border-bottom-right-radius: 10px;
         }

         .margin-bawah {
             margin-bottom: 0.2rem;
         }
     </style>
 @endpush
