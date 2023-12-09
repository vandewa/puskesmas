<div>
    <div class="col-md-12">
        {{-- <div class="card card-success card-outline"> --}}
        <form class="mt-2 form-horizontal" wire:submit='save'>
            <div class="card-body">
                <div class="row">
                   <form action="" wire.submit='save'>
                    <div class="col-md-6">
                        <div class="mb-2 row">
                            <label for="" class="col-sm-3 col-form-label">Berat</label>
                            <div class="col-md-9">
                                <div class="mb-3 input-group">
                                    <input type="number" class="form-control" wire:model='form.berat'>
                                    <div class="input-group-append">
                                      <span class="input-group-text">Kg</span>
                                    </div>
                                </div>
                                @error('form.bicara_tp')
                                    <span class="form-text text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-2 row">
                            <label for="" class="col-sm-3 col-form-label">Tinggi</label>
                            <div class="col-md-9">
                                <div class="mb-3 input-group">
                                    <input type="number" class="form-control" wire:model='form.tinggi'>
                                    <div class="input-group-append">
                                      <span class="input-group-text">Cm</span>
                                    </div>
                                </div>
                                @error('form.komunikasi_tp')
                                    <span class="form-text text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-2 row">
                            <label for="" class="col-sm-3 col-form-label">IMT</label>
                            <div class="col-md-9">
                                <div class="mb-3 input-group">
                                    <input type="number" class="form-control" wire:model='form.imt'>
                                    <div class="input-group-append">
                                      <span class="input-group-text">Kg/M</span>
                                    </div>
                                </div>
                                @error('form.komunikasi_tp')
                                    <span class="form-text text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-2 row">
                            <label for="" class="col-sm-3 col-form-label">lingkar Perut</label>
                            <div class="col-md-9">
                                <div class="mb-3 input-group">
                                    <input type="number" class="form-control" wire:model='form.lingkar_perut'>
                                    <div class="input-group-append">
                                      <span class="input-group-text">Cm</span>
                                    </div>
                                </div>
                                @error('form.emosional_st')
                                    <span class="form-text text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-2 row">
                            <label for="" class="col-sm-3 col-form-label">LILA</label>
                            <div class="col-md-9">
                                <div class="mb-3 input-group">
                                    <input type="number" class="form-control" wire:model='form.lila'>
                                    <div class="input-group-append">
                                      <span class="input-group-text">Cm</span>
                                    </div>
                                </div>
                                @error('form.sosiologi_tp')
                                    <span class="form-text text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-2 row">
                            <label for="" class="col-sm-3 col-form-label">Status Gizi</label>
                            <div class="col-md-9">
                                <div class="mb-3 input-group">
                                   <select name="" class="form-control" id="" wire:model='form.status_gizi'>
                                    <option value="">Pilih Status</option>
                                    <option value="Kurang">Kurang</option>
                                    <option value="Normal">Normal</option>
                                    <option value="Lebih">Lebih</option>
                                   </select>
                                </div>
                                @error('form.sosiologi_tp')
                                    <span class="form-text text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="mt-4 card-footer">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="">
                                        <button type="button" class="btn btn-warning" wire:click='clear'>Batal</button>
                                        <button type="submit" class="btn btn-info">Simpan</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <form>
                </div>
                <ul class="nav nav-tabs">
                    <li class="nav-item">
                      <a class="nav-link @if($tab ==1) active @endif" wire:click='ubahTab(1)' href="#">Pemeriksaan</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link @if($tab ==2) active @endif"  wire:click='ubahTab(2)'  href="#">Riwayat</a>
                    </li>
                  </ul>
                <div class="mt-3 row">
                    @if($tab ==1)
                    <table class="table table-striped">
                        <thead>
                            <th>Waktu</th>
                            <th>Berat Badan</th>
                            <th>Tinggi Badan</th>
                            <th>IMT</th>
                            <th>Lingkar Perut</th>
                            <th>Lila</th>
                            <th>Status Gizi</th>
                        </thead>
                        <tbody>
                            @foreach ($posts as $item)
                            <tr @if($this->edit == $item->id) class="bg-secondary" @endif>
                                <td>
                                  {{ date('d/m/Y H:i:s', strtotime($item->created_at)) }}
                                </td>
                                <td>{{ $item->berat }}</td>
                                <td>{{ $item->tinggi }}</td>
                                <td>{{ $item->imt }}</td>
                                <td>{{ $item->lingkar_perut }}</td>
                                <td>{{ $item->lila }}</td>
                                <td>{{ $item->status_gizi }}</td>
                                <td>
                                    <button type="button" class="btn btn-sm btn-danger" wire:click='confirmDelete({{ $item->id }})'>Hapus</button>
                                    <button  type="button" class="btn btn-sm btn-warning" wire:click='rubah({{ $item->id }})'>Edit</button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $posts->links() }}
                    @else
                    <table class="table table-striped">
                        <thead>
                            <th>Waktu</th>
                            <th>Berat Badan</th>
                            <th>Tinggi Badan</th>
                            <th>IMT</th>
                            <th>Lingkar Perut</th>
                            <th>Lila</th>
                            <th>Status Gizi</th>
                        </thead>
                        <tbody>
                            @foreach ($riwayat as $item)
                            <tr @if($this->edit == $item->id) class="bg-secondary" @endif>
                                <td>
                                  {{ date('d/m/Y H:i:s', strtotime($item->created_at)) }}
                                </td>
                                <td>{{ $item->berat }}</td>
                                <td>{{ $item->tinggi }}</td>
                                <td>{{ $item->imt }}</td>
                                <td>{{ $item->lingkar_perut }}</td>
                                <td>{{ $item->lila }}</td>
                                <td>{{ $item->status_gizi }}</td>
                                <td>
                                    <button type="button" class="btn btn-sm btn-danger" wire:click='confirmDelete({{ $item->id }})'>Hapus</button>
                                    <button  type="button" class="btn btn-sm btn-warning" wire:click='rubah({{ $item->id }})'>Edit</button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $riwayat->links() }}
                    @endif
                </div>
            </div>
        </form>
    </div>
</div>
