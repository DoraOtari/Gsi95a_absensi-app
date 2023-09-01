@extends('layouts.bootstrap5')
@section('konten')
    <div class="col-lg-8 mx-auto">
        <div class="card shadow">
            <div class="card-body">
                <div class="h4 lead"><i class="bi-window"></i> Buat Jabatan</div>
                <hr>
                <form action="{{ route('simpan jabatan') }}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Nama Jabatan</label>
                        <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" placeholder="type your text here">
                        @error('nama')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Gaji Jabatan / Hari</label>
                        <input type="number" name="gaji" class="form-control @error('gaji') is-invalid @enderror" placeholder="type your text here">
                        @error('gaji')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Status Kontrak</label>
                        <select name="status" class="form-select @error('status') is-invalid @enderror">
                            <option disabled selected>--Pilih Satu--</option>
                            <option value="tetap">Tetap</option>
                            <option value="kontrak">Kontrak</option>
                        </select>
                        @error('status')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-dark rounded-pill float-end"><i class="bi-send"></i> Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection