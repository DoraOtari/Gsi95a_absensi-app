<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JabatanController extends Controller
{
    public function tampil()
    {
        return view('jabatan.tampil');
    }

    public function tambah()
    {
       return view('jabatan.tambah');
    }

    public function edit()
    {
        return view('jabatan.edit');
    }

    public function simpan()
    {
        
    }

    public function update()
    {
        
    }

    public function hapus()
    {
        
    }
}
