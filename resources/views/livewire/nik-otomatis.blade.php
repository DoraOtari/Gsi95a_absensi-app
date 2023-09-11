<div>
    <div class="mb-3">
        <label class="badge bg-dark form-label">NIK Karyawan</label>
        <input value="{{ $nik }}" name="nik" type="text" class="form-control-plaintext" readonly>
    </div>
    <div class="mb-3">
        <label class="form-label">Email</label>
        <select wire:model="user_id" name="user_id"  class="form-select">
            <option disabled selected value="null">--pilih email--</option>
            @foreach ($emails as $col)
               <option value="{{ $col->id }}">{{ $col->email }}</option> 
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label  class="form-label">Tanggal Lahir</label>
        <input type="date" class="form-control" wire:model="tgl_lahir" name="tanggal_lahir" >
    </div>
</div>
