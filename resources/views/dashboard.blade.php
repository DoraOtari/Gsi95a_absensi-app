@extends('layouts.bootstrap5')
@section('konten')
    <div class="row justify-content-center">
        <div class="col-5">
            <h1 class="display-2">Dashboard Absensi</h1>
            <p class="lead">Hi {{ Auth::user()->name }}, Selamat datang di dashboard aplikasi absensi</p>
            <figure>
                <blockquote class="blockquote">
                  <p class="text-success">Aku pernah menjadi pelangi untuk kamu yang ternyata buta warna</p>
                </blockquote>
                <figcaption class="blockquote-footer">
                  Fahri Skroepp
                </figcaption>
              </figure>
              <a href="" class="btn btn-dark gradasi"><i class="bi-bar-chart"></i> Performamu</a>
        </div>
        <div class="col-4">
            <img src="{{ asset('dashboard.jpg') }}" class="img-fluid">
        </div>
    </div>
@endsection