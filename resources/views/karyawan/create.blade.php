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
                </form>
            </div>
        </div>
    </div>
@endsection