<div>
    <div class="form-group row ">
        <div class="col-md-6">
        <label for="provinsi">Provinsi</label>
            <select wire:model="selectedProvinsi" class="form-control">
                <option value="" selected>Pilih Provinsi</option>
                @foreach($provinsi as $provinsis)
                    <option value="{{ $provinsis->id }}">{{ $provinsis->nama_provinsi }}</option>
                @endforeach
            </select>
        </div>
        <div class="col-md-6">
        <label for="positif">Jumlah Positif</label>
        <input type="text" value="@if(isset($tracking1)){{$tracking1->positif}}@endif" class="form-control" name="positif" required>
        </div>
    </div> 

        <div class="form-group row ">
            <div class="col-md-6">
    @if(!is_null($selectedProvinsi))
            <label for="Kota">Kota</label>
                <select wire:model="selectedKota" class="form-control">
                    <option value="" selected>Pilih Kota</option>
                    @foreach($kota as $kota)
                        <option value="{{ $kota->id }}">{{ $kota->nama_kota }}</option>
                    @endforeach
                </select>
    @endif
            </div>
            <div class="col-md-6">
                <label for="sembuh">Jumlah Sembuh</label>
                <input type="text" class="form-control" value="@if(isset($tracking1)){{$tracking1->sembuh}}@endif"  name="sembuh" required>
            </div>
        </div>
        <div class="form-group row ">
            <div class="col-md-6">
    @if (!is_null($selectedKota))
            <label for="kecamatan">Kecamatan</label>
                <select wire:model="selectedKecamatan" class="form-control">
                    <option value="" selected>pilih kecamatan</option>
                    @foreach($kecamatan as $kecamatans)
                        <option value="{{ $kecamatans->id }}">{{ $kecamatans->nama_kecamatan }}</option>
                    @endforeach
                </select>
    @endif
            </div>
            <div class="col-md-6">
                <label for="meninggal">Jumlah Meninggal</label>
                <input type="text" class="form-control" value="@if(isset($tracking1)){{$tracking1->meninggal}}@endif" name="meninggal" required>
            </div>
        </div>
        <div class="form-group row ">
            <div class="col-md-6">
    @if (!is_null($selectedKecamatan))
            <label for="desa" >Desa</label>
                <select wire:model="selectedDesa" class="form-control">
                    <option value="" selected>pilih desa</option>
                    @foreach($desa as $desas)
                        <option value="{{ $desas->id }}">{{ $desas->nama_desa }}</option>
                    @endforeach
                </select>
    @endif
            </div>
            <div class="col-md-6">
                <label for="tgl">Tanggal</label>
                <input type="date" class="form-control" value="@if(isset($tracking1)){{$tracking1->tgl}}@endif"
                 name="tanggal" required>
            </div>
        </div>
        <div class="form-group row ">
            <div class="col-md-6">
    @if (!is_null($selecteDdesa))
            <label for="rw" >Rw</label>
                <select wire:model="selectedRw" class="form-control" name="nama_rw">
                    <option value="" selected>pilih rw</option>
                    @foreach($rw as $rws)
                        <option value="{{ $rws->id }}">{{ $rws->nama_rw }}</option>
                    @endforeach
                </select>
    @endif
            </div>
        </div>
</div>