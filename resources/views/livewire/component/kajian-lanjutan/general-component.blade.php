<div>
    <div class="col-md-12">
        {{-- <div class="card card-success card-outline"> --}}
        <form class="mt-2 form-horizontal" wire:submit='save'>
            <div class="card-body">
                <div class="row">
                    <form action="" wire.submit='save'>
                        <div class="col-md-6">
                            <div class="mb-2 row">
                                <label for="" class="col-sm-3 col-form-label">Kepala</label>
                                <div class="col-md-9">
                                    <div class="mb-3 input-group">
                                        <select name="" id="" class="form-control"
                                            wire:model='form.kepala'>
                                            <option value="DBN">DBN (Dalam Batas Normal)</option>
                                            <option value="Asimetris">Asimetris</option>
                                        </select>
                                    </div>
                                    @error('form.kepala')
                                        <span class="form-text text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-2 row">
                                <label for="" class="col-sm-3 col-form-label">Mata</label>
                                <div class="col-md-9">
                                    <div class="mb-3 input-group">
                                        <select name="" id="" class="form-control"
                                            wire:model='form.mata'>
                                            <option value="DBN">DBN (Dalam Batas Normal)</option>
                                            <option value="Anemis">Anemis</option>
                                            <option value="Ikterik">Ikterik</option>
                                            <option value="Anisokor">Anisokor</option>
                                            <option value="Midriasis">Midriasis</option>
                                            <option value="Miosis">Miosis</option>
                                        </select>
                                    </div>
                                    @error('form.mata')
                                        <span class="form-text text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-2 row">
                                <label for="" class="col-sm-3 col-form-label">Telinga</label>
                                <div class="col-md-9">
                                    <div class="mb-3 input-group">
                                        <select name="" id="" class="form-control"
                                            wire:model='form.teling'>
                                            <option value="DBN">DBN (Dalam Batas Normal)</option>
                                            <option value="Berdengung">Berdengung</option>
                                            <option value="Nyeri">Nyeri</option>
                                            <option value="Tuli">Tuli</option>
                                        </select>
                                    </div>
                                    @error('form.teling')
                                        <span class="form-text text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-2 row">
                                <label for="" class="col-sm-3 col-form-label">Leher</label>
                                <div class="col-md-9">
                                    <div class="mb-3 input-group">
                                        <select name="" id="" class="form-control"
                                            wire:model='form.leher'>
                                            <option value="DBN">DBN (Dalam Batas Normal)</option>
                                            <option value="Pembesaran Tyroid">Pembesaran Tyroid</option>
                                            <option value="Pembesaran KGB">Pembesaran KGB</option>
                                            <option value="Kaku Duduk">Kaku Duduk</option>

                                        </select>
                                    </div>
                                    @error('form.leher')
                                        <span class="form-text text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">

                            <div class="mb-2 row">
                                <label for="" class="col-sm-2 col-form-label">Dada</label>
                                <div class="col-md-10">
                                    <div class="row mb-2">
                                        <div class="col-md-6">
                                            <input type="checkbox" value="DBN" wire:model="updateTypes">
                                            <label>DBN (Dalam Batas Normal)</label><br>
                                            <input type="checkbox" wire:model="updateTypes" value="Asimetris">
                                            <label>Asimetris</label><br>
                                            <input type="checkbox" wire:model="updateTypes" value="Retraksi">
                                            <label>Retraksi</label><br>
                                            <input type="checkbox" wire:model="updateTypes" value="NyeriDada">
                                            <label>Nyeri Dada</label><br>

                                        </div>
                                        <div class="col-md-3">
                                            <input type="checkbox" wire:model="updateTypes" value="Ronkhi">
                                            <label>Ronkhi</label><br>
                                            <input type="checkbox" wire:model="updateTypes" value="Wheezing">
                                            <label>Wheezing</label><br>
                                            <input type="checkbox" value="Takhikardi" wire:model="updateTypes">
                                            <label>Takhikardi</label><br>

                                        </div>
                                        <div class="col-md-3">
                                            <input type="checkbox" wire:model="updateTypes" value="Mur-mur">
                                            <label>Mur-mur</label><br>
                                            <input type="checkbox" wire:model="updateTypes" value="Aritmia">
                                            <label>Aritmia</label><br>
                                            <input type="checkbox" wire:model="updateTypes" value="Palpitasi">
                                            <label>Palpitasi</label><br>

                                        </div>
                                    </div>
                                    @error('form.dada')
                                        <span class="form-text text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-2 row">
                                <label for="" class="col-sm-3 col-form-label">Abdomen</label>
                                <div class="col-md-9">
                                    <div class="mb-3 input-group">
                                        <select name="" id="" class="form-control"
                                            wire:model='form.abdomen'>
                                            <option value="DBN">DBN (Dalam Batas Normal)</option>
                                            <option value="Kembung">Kembung</option>
                                            <option value="Ascites">Ascites</option>
                                            <option value="Tegang">Tegang</option>
                                            <option value="Nyeri Tekan">Nyeri Tekan</option>

                                        </select>
                                    </div>
                                    @error('form.abdomen')
                                        <span class="form-text text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-2 row">
                                <label for="" class="col-sm-3 col-form-label">Extremitas</label>
                                <div class="col-md-9">
                                    <div class="mb-3 input-group">
                                        <select name="" id="" class="form-control"
                                            wire:model='form.extremistis'>
                                            <option value="DBN">DBN (Dalam Batas Normal)</option>
                                            <option value="CRT < 2">CRT < 2</option>
                                            <option value="Odem">Odem</option>
                                            <option value="Fraktur">Fraktur</option>
                                        </select>
                                    </div>
                                    @error('form.extremistis')
                                        <span class="form-text text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="mt-4 card-footer">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="">
                                            <button type="button" class="btn btn-warning"
                                                wire:click='clear'>Batal</button>
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
                        <a class="nav-link @if ($tab == 1) active @endif" wire:click='ubahTab(1)'
                            href="#">Pemeriksaan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @if ($tab == 2) active @endif" wire:click='ubahTab(2)'
                            href="#">Riwayat</a>
                    </li>
                </ul>
                <div class="mt-3 row">
                    @if ($tab == 1)

                        <table class="table table-striped">
                            <thead>
                                <th>Waktu</th>
                                <th>Kepala</th>
                                <th>Mata</th>
                                <th>Telinga</th>
                                <th>Leher</th>
                                <th>Dada</th>
                                <th>Abdomen</th>
                                <th>Extrimistis</th>
                                <th>action</th>
                            </thead>
                            <tbody>
                                @foreach ($posts as $item)
                                    <tr @if ($this->edit == $item->id) class="bg-secondary" @endif>
                                        <td>
                                            {{ date('d/m/Y H:i:s', strtotime($item->created_at)) }}
                                        </td>

                                        <td>{{ $item->kepala ?? '' }}</td>
                                        <td>{{ $item->mata ?? '' }}</td>
                                        <td>{{ $item->teling ?? '' }}</td>
                                        <td>{{ $item->leher ?? '' }}</td>
                                        <td>{{ $item->dada ?? '' }}</td>
                                        <td>{{ $item->abdomen ?? '' }}</td>
                                        <td>{{ $item->extremistis ?? '' }}</td>
                                        <td>
                                            <button type="button" class="btn btn-sm btn-danger"
                                                wire:click='confirmDelete({{ $item->id }})'>Hapus</button>
                                            <button type="button" class="btn btn-sm btn-warning"
                                                wire:click='rubah({{ $item->id }})'>Edit</button>
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
                                <th>Kepala</th>
                                <th>Mata</th>
                                <th>Telinga</th>
                                <th>Leher</th>
                                <th>Dada</th>
                                <th>Abdomen</th>
                                <th>Extrimistis</th>
                                {{-- <th>action</th> --}}
                            </thead>
                            <tbody>
                                @foreach ($riwayat as $item)
                                    <tr @if ($this->edit == $item->id) class="bg-secondary" @endif>
                                        <td>
                                            {{ date('d/m/Y H:i:s', strtotime($item->created_at)) }}
                                        </td>

                                        <td>{{ $item->kepala ?? '' }}</td>
                                        <td>{{ $item->mata ?? '' }}</td>
                                        <td>{{ $item->teling ?? '' }}</td>
                                        <td>{{ $item->leher ?? '' }}</td>
                                        <td>{{ $item->dada ?? '' }}</td>
                                        <td>{{ $item->abdomen ?? '' }}</td>
                                        <td>{{ $item->extremistis ?? '' }}</td>
                                        {{-- <td>
                                    <button type="button" class="btn btn-sm btn-danger" wire:click='confirmDelete({{ $item->id }})'>Hapus</button>
                                    <button  type="button" class="btn btn-sm btn-warning" wire:click='rubah({{ $item->id }})'>Edit</button>
                                </td> --}}
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
