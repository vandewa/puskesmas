<div>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <div class="card card-success card-outline">
                        <form class="form-horizontal mt-2" wire:submit='save'>
                            @if ($edit)
                                <input type="hidden" value="{{ $form['item_cd'] }}" wire:model="form.item_cd">
                            @endif
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label for="" class="col-sm-3 col-form-label">Kode Item</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" wire:model='form.item_cd'
                                                    @if ($edit) disabled @endif>
                                                @error('form.item_cd')
                                                    <span class="form-text text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="" class="col-sm-3 col-form-label">Nama Item</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" wire:model='form.item_nm'>
                                                @error('form.item_nm')
                                                    <span class="form-text text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Jenis</label>
                                            <div class="col-md-9">
                                                <select class="form-control" wire:model="form.type_cd">
                                                    <option value="">-- Pilih Jenis Inventori --</option>
                                                    @foreach ($jenis ?? [] as $item)
                                                        <option value="{{ $item['type_cd'] }}">{{ $item['type_nm'] }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                                @error('form.type_cd')
                                                    <span class="form-text text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Satuan</label>
                                            <div class="col-md-9">
                                                <select class="form-control" wire:model="form.unit_cd">
                                                    <option value="">-- Pilih Satuan Inventori --</option>
                                                    @foreach ($satuan ?? [] as $item)
                                                        <option value="{{ $item['unit_cd'] }}">{{ $item['unit_nm'] }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                                @error('form.unit_cd')
                                                    <span class="form-text text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Golongan</label>
                                            <div class="col-md-9">
                                                <select class="form-control" wire:model.live="form.golongan_cd">
                                                    <option value="">-- Pilih Golongan --</option>
                                                    @foreach ($gol ?? [] as $item)
                                                        <option value="{{ $item['golongan_cd'] }}">
                                                            {{ $item['golongan_nm'] }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                                @error('form.golongan_cd')
                                                    <span class="form-text text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Sub Golongan</label>
                                            <div class="col-md-9">
                                                <select class="form-control" wire:model="form.subgolongan_cd">
                                                    <option value="">-- Pilih Sub Golongan --</option>
                                                    @foreach ($subgol ?? [] as $item)
                                                        <option value="{{ $item['golongan_cd'] }}">
                                                            {{ $item['golongan_nm'] }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                                @error('form.subgolongan_cd')
                                                    <span class="form-text text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Kelompok</label>
                                            <div class="col-md-9">
                                                <select class="form-control" wire:model="form.kategori_cd">
                                                    <option value="">-- Pilih Kelompok --</option>
                                                    @foreach ($kelompok ?? [] as $item)
                                                        <option value="{{ $item['kategori_cd'] }}">
                                                            {{ $item['kategori_nm'] }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                                @error('form.kategori_cd')
                                                    <span class="form-text text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label for="" class="col-sm-3 col-form-label">Harga Beli</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control"
                                                    wire:model='form.item_price_buy'>
                                                @error('form.item_price_buy')
                                                    <span class="form-text text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="" class="col-sm-3 col-form-label">Harga Jual</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" wire:model='form.item_price'>
                                                @error('form.item_price')
                                                    <span class="form-text text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Pajak</label>
                                            <div class="col-md-9">
                                                <select class="form-control" wire:model="form.vat_tp">
                                                    <option value="">-- Pilih Jenis Pajak --</option>
                                                    @foreach ($pajak ?? [] as $item)
                                                        <option value="{{ $item['com_cd'] }}">{{ $item['code_nm'] }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                                @error('form.vat_tp')
                                                    <span class="form-text text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="" class="col-sm-3 col-form-label">PPN (%)</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" wire:model='form.ppn'>
                                                @error('form.ppn')
                                                    <span class="form-text text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="" class="col-sm-3 col-form-label">Stok Minimum</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control"
                                                    wire:model='form.minimum_stock'>
                                                @error('form.minimum_stock')
                                                    <span class="form-text text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="" class="col-sm-3 col-form-label">Stok
                                                Maksimum</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control"
                                                    wire:model='form.maximum_stock'>
                                                @error('form.maximum_stock')
                                                    <span class="form-text text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Principal</label>
                                            <div class="col-md-9">
                                                <select class="form-control" wire:model="form.principal_cd">
                                                    <option value="">-- Pilih Principal --</option>
                                                    @foreach ($principal ?? [] as $item)
                                                        <option value="{{ $item['principal_cd'] }}">
                                                            {{ $item['principal_nm'] }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                                @error('form.principal_cd')
                                                    <span class="form-text text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-3 control-label"></label>
                                            <div class="col-sm-9">
                                                <input class="form-check-input" type="radio" name="tipe"
                                                    id="genderMale" value="1" wire:model="form.inventory_st">
                                                <label class="form-check-label" for="genderMale">
                                                    Barang Inventori
                                                </label>

                                                &nbsp;&nbsp;&nbsp;&nbsp;
                                                &nbsp;&nbsp;&nbsp;&nbsp;

                                                <input class="form-check-input" type="radio" name="tipe"
                                                    id="genderFemale" value="1" wire:model="form.generic_st">
                                                <label class="form-check-label" for="genderFemale">
                                                    Generik
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-info">Simpan</button>
                                <a href="{{ route('inventori.inventori.index') }}"
                                    class="btn btn-default float-right">Kembali</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>
