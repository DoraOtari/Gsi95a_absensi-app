@extends('layouts.bootstrap5')
@section('konten')
<div class="col-lg-8 mx-auto">
    {{-- alert --}}
    @if (session('pesan'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong><i class="bi-check"></i></strong> {{ session('pesan') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    <div class="card border-0">
        <div class="card-body">
            <div class="d-flex justify-content-between">
                <h4 class="lead">
                    <i class="bi-person"></i>
                    Data Karyawan
                </h4>
                <a href="{{ url('karyawan/create') }}" class="btn btn-dark">
                    <i class="bi-plus"></i> Buat
                </a>
            </div>
            {{-- tabel --}}
            <table class="table">
                <thead>
                    <tr>
                        <th>Foto</th>
                        <th>NIK</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Jabatan</th>
                        <th>Detail</th>
                        <th>Edit</th>
                        <th>Hapus</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($karyawan as $kol)
                        <tr>
                            <td><img src="" alt=""></td>
                            <td>
                                <span class="badge bg-info">{{ $kol->nik }}</span> 
                            </td>
                            <td>{{ $kol->nama }}</td>
                            <td></td>
                            <td></td>
                            <td><i class="bi-eye text-info lead"></i></td>
                            <td>
                                <a href="{{ url('karyawan/'.$kol->id.'/edit') }}">
                                    <i class="bi-pen text-success lead"></i>
                                </a>
                            </td>
                            <td>
                                <form action="{{ url('karyawan/'.$kol->id) }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-sm">
                                        <i class="bi-trash lead text-danger"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7">
                                <h4 class="text-center"><i class="bi-search"></i> Data tidak ditemukan</h4>
                            </td>
                        </tr>  
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection