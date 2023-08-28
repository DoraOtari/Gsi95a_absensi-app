@extends('layouts.bootstrap5')
@section('konten')
    <div class="col-lg-8 mx-auto">
        <div class="card shadow">
            <div class="card-body">
                <div class="h4 lead"><i class="bi-form"></i> Buat Jabatan</div>
                <hr>
                <form action="{{ route('simpan jabatan') }}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Nama Jabatan</label>
                        <input type="text" name="nama" class="form-control" placeholder="type your text here">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Gaji Jabatan ? Hari</label>
                        <input type="number" name="gaji" class="form-control" placeholder="type your text here">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Status Kontrak</label>
                        <select name="status"class="form-select">
                            <option disabled selected>--Pilih Status--</option>
                            <option value="tetap">Tetap</option>
                            <option value="kontrak">Kontrak</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-dark rounded-pill float-end"><i class="bi-send"></i> Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection