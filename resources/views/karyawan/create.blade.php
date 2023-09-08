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
                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <select name="user_id"  class="form-select">
                            <option disabled selected>--pilih email--</option>
                            @foreach ($emails as $col)
                               <option value="{{ $col->id }}">{{ $col->email }}</option> 
                            @endforeach
                        </select>
                    </div>
                    <x-input name="tanggal_lahir" type="date" label="Tanggal Lahir" />
                    <livewire:api-daerah />
                </form>
            </div>
        </div>
    </div>
@endsection