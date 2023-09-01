@extends('layouts.bootstrap5')
@section('konten')
    <div class="col-lg-6 mx-auto">
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
                    <h4 class="lead"><i class="bi-table"></i> Data Jabatan</h4>
                    <a href="{{ route('tambah jabatan') }}" class="btn btn-dark rounded-pill float-end"><i class="bi-plus"></i> Tambah</a>
                </div>
                <hr>
                <table class="table" id="tabelku">
                   <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Gaji/Hari</th>
                            <th>Status</th>
                            <th>Edit</th>
                            <th>Hapus</th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- perintah untuk menampilkan data --}}
                        @forelse ($jabatan as $col)
                            <tr>
                                <td>{{ $col->nama }}</td>
                                <td>Rp. {{ number_format($col->gaji,2,',','.')  }}</td>
                                <td>{{ $col->status }}</td>
                                <td>
                                    <a href="{{ route('edit jabatan', $col->id) }}" class="btn btn-sm btn-success"><i class="bi-pen"></i></a>
                                </td>
                                <td>
                                    <form action="{{ route('hapus jabatan', $col->id) }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-sm btn-danger"><i class="bi-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="3">
                                    <h3 class="text-center"><i class="bi-search"></i> Data tidak ditemukan didatabase</h3>
                                </td>    
                            </tr>    
                        @endforelse
                    </tbody> 
                </table>
                
            </div>
        </div>
    </div>
@endsection