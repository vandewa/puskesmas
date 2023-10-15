<div>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    {{-- <div class="card card-success card-outline"> --}}
                    <form class="form-horizontal mt-2" wire:submit='save'>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="row mb-2">
                                        <label for="" class="col-sm-3 col-form-label">No RM</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control">
                                            @error('form.')
                                                <span class="form-text text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <label for="" class="col-sm-3 col-form-label">Nama Pasien</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control">
                                            @error('form.')
                                                <span class="form-text text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <label for="" class="col-sm-3 col-form-label">Tanggal Lahir</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control">
                                            @error('form.')
                                                <span class="form-text text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <label for="" class="col-sm-3 col-form-label">Tanggal Masuk</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control">
                                            @error('form.')
                                                <span class="form-text text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <label for="" class="col-sm-3 col-form-label">Dokter</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control">
                                            @error('form.')
                                                <span class="form-text text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <label for="" class="col-sm-3 col-form-label">Poliklinik</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control">
                                            @error('form.')
                                                <span class="form-text text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <label for="" class="col-sm-3 col-form-label">Rujukan</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control">
                                            @error('form.')
                                                <span class="form-text text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>
                                            <input type="checkbox" class="flat-green" id="kronis" name="kronis">
                                            Kronis
                                        </label>
                                        <label>
                                            <input type="checkbox" class="flat-green" id="risikojatuh"
                                                name="risikojatuh">
                                            Risiko Jatuh
                                        </label>
                                    </div>
                                    <div class="row mb-2">
                                        <label class="col-sm-3 control-label">Catatan</label>
                                        <div class="col-sm-9">
                                            <textarea name="note" class="form-control"></textarea>
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <label class="col-sm-3 control-label">Alergi</label>
                                        <div class="col-sm-9">
                                            <textarea name="alergi" class="form-control"></textarea>
                                        </div>
                                    </div>
                    </form>
                    <table class="table">
                        <tr>
                            <td><button type="button" class="btn btn-primary btn-sm btn-flat btn-block"
                                    onclick="simpan()"><i class="fa fa-floppy-o"></i> Simpan</button></td>
                            <td><button type="button" class="btn btn-danger btn-sm btn-flat btn-block"
                                    onclick="hapus()"><i class="fa fa-trash-o"></i> Hapus</button></td>
                            <td><a href="http://103.155.105.43:80/index.php/rawat-jalan/transaksi"
                                    class="btn btn-success btn-sm btn-flat btn-block"><i class="fa fa-mail-reply"></i>
                                    Kembali</a></td>
                        </tr>
                        <tr>
                            <td><a href="http://103.155.105.43:80/index.php"
                                    class="btn btn-warning btn-sm btn-flat btn-block"><i class="fa fa-pencil"></i> Ubah
                                    Data Pasien</a></td>
                            <td><a href="#" onclick="rujukpoli()"
                                    class="btn btn-info btn-sm btn-flat btn-block"><i class="fa fa-random"></i> Rujuk
                                    Poliklinik</a></td>
                            <td><a href="#" class="btn btn-default btn-sm btn-flat btn-block"><i
                                        class="fa fa-envelope"></i> Pesan</a></td>
                        </tr>
                    </table>
                </div>

                {{-- </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-info">Simpan</button>
                            <a href="{{ route('master.jadwal-praktek.index') }}"
                                class="btn btn-default float-right">Kembali</a>
                        </div> --}}
                {{-- </form> --}}
                {{-- </div> --}}
            </div>
        </div>
</div>
</section>
</div>
