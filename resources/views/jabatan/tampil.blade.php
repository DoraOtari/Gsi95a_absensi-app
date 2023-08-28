@extends('layouts.bootstrap5')
@section('konten')
    <div class="col-lg-6 mx-auto">
        <div class="card border-0">
            <div class="card-body">
                <h4 class="lead"><i class="bi-table"></i> Data Jabatan</h4>
                <hr>
                <table class="table">
                   <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Status</th>
                            <th>Gaji/Hari</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td colspan="3">
                                <h3 class="text-center"><i class="bi-search"></i> Data tidak ditemukan didatabase</h3>
                            </td>    
                        </tr>    
                    </tbody> 
                </table>
                <a href="{{ route('tambah jabatan') }}" class="btn btn-dark rounded-pill float-end"><i class="bi-plus"></i> Tambah</a>
            </div>
        </div>
    </div>
@endsection