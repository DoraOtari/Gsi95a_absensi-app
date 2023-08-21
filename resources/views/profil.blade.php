@extends('layouts.bootstrap5')
@section('konten')
    <div class="col-4 mx-auto">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title"><i class="bi-person-bounding-box"></i> Upload Foto Profil</h4>
                <hr>
                <form action="{{ route('upload foto') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="" class="form-label">Upload File</label>
                        <input type="file" name="foto_profil" required class="form-control">
                    </div>
                    <button class="btn btn-primary rounded-pill float-end" type="submit">
                       <i class="bi-cloud-upload"></i> Upload
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection