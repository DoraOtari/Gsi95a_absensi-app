@extends('layouts.bootstrap5')
@section('konten')
    <div class="row justify-content-center">
        <div class="col-5">
            <img src="{{ asset('login.jpg') }}" class="img-fluid opacity-50">
        </div>
        <div class="col-5 position-absolute">
            <div class="card bg-transparent border-0">
                <div class="card-body">
                    <h4 class="card-title"><i class="bi-window"></i> Form Absensi</h4>
                    <p class="text-muted">Silahkan absen menggunakan nik anda</p>
                    <hr>
                    <form action="" method="post">
                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                  <label class="form-label">Tanggal</label>
                                  <input readonly type="text" class="form-control-plaintext" name="tanggal" value="{{ date('d-m-Y') }}">
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-3">
                                    <label class="form-label">Jam</label>
                                    <input readonly type="text" class="form-control-plaintext" name="jam" value="{{ date('H:i:s') }}">
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">NIK</label>
                            <input type="text" class="form-control" name="nik" placeholder="Type your text here">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Keterangan</label><br>
                            <div class="form-check form-check-inline">
                                <input checked class="form-check-input" type="radio" name="keterangan" value="masuk">
                                <label class="form-check-label">Masuk</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="keterangan" value="keluar">
                                <label class="form-check-label">Keluar</label>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-dark rounded-pill float-end">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection