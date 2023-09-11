@extends('layouts.bootstrap5')
@section('konten')
    <div class="col-lg-6 mx-auto">
        <div class="card border-0">
            <div class="card-body">
                <h4 class="card-title">
                    <i class="bi-person-plus"></i> Profil Karyawan
                </h4>
                <hr>
                <form action="{{ url('karyawan/create') }}" method="post">
                    @csrf
                    <x-input name="nama" type="text" label="Nama Karyawan" />
                    <livewire:nik-otomatis :emails="$emails" />
                    <livewire:api-daerah />
                    <textarea name="alamat" class="form-control mb-3"  rows="5" placeholder="masukan alamat lengkap"></textarea>
                    <x-tombol-submit />
                </form>
            </div>
        </div>
    </div>
@endsection