<div>
    <div class="mb-3">
        <label class="form-label">Alamat</label>
        <div class="row">
            <div class="col">
                <select name="provinsi" class="form-select">
                    <option value="null" selected disabled>--Pilih Provinsi--</option>
                    @foreach ($provinsi as $col)
                        <option value="{{ $col['id'].'/'.$col['nama'] }}">{{ $col['nama'] }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col">
                <select name="kota" class="form-select">
                    <option value="null" selected disabled>--Pilih Kota--</option>
                </select>
            </div>
        </div>
    </div>
</div>
