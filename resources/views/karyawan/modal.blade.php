<!-- Modal -->
<div class="modal fade" id="detail" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
    <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">
            <i class="bi-person"></i> Detail Karyawan
        </h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
        <table class="table table-striped">
            <tr>
                <td colspan="3">
                    <img style="aspect-ratio:1/1" class="d-block mx-auto rounded-circle img-thumbnail" width="100" src="{{ asset('storage/'.$kol->user->foto_profil) }}">
                </td>
            </tr>
            <tr>
                <th>Nama</th>
                <td>:</td>
                <td>{{ $kol->nama }}</td>
            </tr>
            <tr>
                <th>NIK</th>
                <td>:</td>
                <td>{{ $kol->nik }}</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>:</td>
                <td>{{ $kol->user->email }}</td>
            </tr>
            <tr>
                <th>Jabatan</th>
                <td>:</td>
                <td>{{ $kol->jabatan->nama }}</td>
            </tr>
            <tr>
                <th>Tanggal Lahir</th>
                <td>:</td>
                <td>{{ $kol->tanggal_lahir }}</td>
            </tr>
            <tr>
                <th>Provinsi</th>
                <td>:</td>
                @php
                    $provinsi = explode('/',$kol->provinsi);
                @endphp
                <td>{{ $provinsi[1] }}</td>
            </tr>
            <tr>
                <th>Kota</th>
                <td>:</td>
                @php
                    $kota = explode('/',$kol->kota);
                @endphp
                <td>{{ $kota[1] }}</td>
            </tr>
            <tr>
                <th>Jalan</th>
                <td>:</td>
                <td>{{ $kol->alamat }}</td>
            </tr>
            
        </table>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
    </div>
    </div>
</div>
</div>