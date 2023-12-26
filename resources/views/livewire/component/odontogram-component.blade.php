<div>
    <div class="col-md-12">
        {{-- <div class="card card-success card-outline"> --}}
        <form class="form-horizontal" wire:submit='save'>
            <div class="card-body">
                <div class="row">
                    <form action="" wire.submit='save'>
                        <div class="col-md-12">
                            <div class="text-center mb-3">
                                <img src="{{ asset('odontogram.png') }}" width="700">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row mb-2">
                                <label for="" class="col-sm-3 col-form-label">Elemen Gigi</label>
                                <div class="col-md-9">
                                    <select class="form-control" wire:model.defer='form.elemen_gigi'>
                                        <option value="">Pilih Elemen Gigi</option>
                                        <option value="11">11</option>
                                        <option value="12">12</option>
                                        <option value="13">13</option>
                                        <option value="14">14</option>
                                        <option value="15">15</option>
                                        <option value="16">16</option>
                                        <option value="17">17</option>
                                        <option value="18">18</option>
                                        <option value="18">18</option>
                                        <option value="21">21</option>
                                        <option value="22">22</option>
                                        <option value="23">23</option>
                                        <option value="24">24</option>
                                        <option value="25">25</option>
                                        <option value="26">26</option>
                                        <option value="27">27</option>
                                        <option value="28">28</option>
                                        <option value="31">31</option>
                                        <option value="32">32</option>
                                        <option value="33">33</option>
                                        <option value="34">34</option>
                                        <option value="35">35</option>
                                        <option value="36">36</option>
                                        <option value="37">37</option>
                                        <option value="38">38</option>
                                        <option value="41">41</option>
                                        <option value="42">42</option>
                                        <option value="43">43</option>
                                        <option value="44">44</option>
                                        <option value="45">45</option>
                                        <option value="46">46</option>
                                        <option value="47">47</option>
                                        <option value="48">48</option>
                                        <option value="51">51</option>
                                        <option value="52">52</option>
                                        <option value="53">53</option>
                                        <option value="54">54</option>
                                        <option value="55">55</option>
                                        <option value="61">61</option>
                                        <option value="62">62</option>
                                        <option value="63">63</option>
                                        <option value="64">64</option>
                                        <option value="66">65</option>
                                        <option value="71">71</option>
                                        <option value="72">72</option>
                                        <option value="73">73</option>
                                        <option value="74">74</option>
                                        <option value="77">75</option>
                                        <option value="81">81</option>
                                        <option value="82">82</option>
                                        <option value="83">83</option>
                                        <option value="84">84</option>
                                        <option value="88">85</option>
                                    </select>
                                    @error('form.kognitif_tp')
                                        <span class="form-text text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-2">
                                <label for="" class="col-sm-3 col-form-label">Diagnosa</label>
                                <div class="col-md-9">
                                    <div class="input-group ">
                                        <p class="form-control">{{ $icd->icd_nm ?? '' }}
                                        </p>
                                        <span class="input-group-append">
                                            <button type="button" class="btn btn-info btn-flat"
                                                wire:click="$dispatch('show-modal-diagnosa')">Cari</button>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <label for="" class="col-sm-3 col-form-label">Prosedur</label>
                                <div class="col-md-9">
                                    <select class="form-control" wire:model.live='form.prosedur_tp'>
                                        <option value="">Pilih Pelayanan</option>
                                        @foreach ($listProsedur ?? [] as $item)
                                            <option value="{{ $item['com_cd'] }}">
                                                {{ $item['code_nm'] }}</option>
                                        @endforeach
                                    </select>
                                    @error('form.prosedur_tp')
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
                        <div class="col-md-6">
                            <ul class="nav nav-tabs">
                                <li class="nav-item">
                                    <a class="nav-link @if ($tab == 1) active @endif"
                                        wire:click='ubahTab(1)' href="#">Pemeriksaan</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link @if ($tab == 2) active @endif"
                                        wire:click='ubahTab(2)' href="#">Riwayat</a>
                                </li>
                            </ul>
                            <div class="mt-3 row">
                                @if ($tab == 1)
                                    <table class="table table-striped">
                                        <thead>
                                            <th>Elemen Gigi</th>
                                            <th>Diagnosa</th>
                                            <th>Prosedur</th>
                                            <th></th>
                                        </thead>
                                        <tbody>
                                            @foreach ($posts as $item)
                                                <tr @if ($this->edit == $item->id) class="bg-secondary" @endif>
                                                    <td>{{ $item->elemen_gigi ?? '' }}</td>
                                                    <td>{{ $item->diagnosa->icd_nm ?? '' }}</td>
                                                    <td>{{ $item->prosedur->code_nm ?? '' }}</td>
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
                                            <th>Elemen Gigi</th>
                                            <th>Diagnosa</th>
                                            <th>Prosedur</th>
                                            <th></th>
                                        </thead>
                                        <tbody>
                                            @foreach ($riwayat as $item)
                                                <tr @if ($this->edit == $item->id) class="bg-secondary" @endif>
                                                    <td>{{ $item->elemen_gigi ?? '' }}</td>
                                                    <td>{{ $item->diagnosa->icd_nm ?? '' }}</td>
                                                    <td>{{ $item->prosedur->code_nm ?? '' }}</td>
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
                                    {{ $riwayat->links() }}
                                @endif
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </form>
    </div>
    <livewire:component.modal-diagnosa wire:key='modal-diagnosa'>
</div>
