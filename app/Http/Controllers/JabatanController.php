<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jabatan;

class JabatanController extends Controller
{
    public function tampil()
    {
        // perintah untuk mengambil data di database
        return view('jabatan.tampil', ['jabatan' => Jabatan::all()]);
    }

    public function tambah()
    {
       return view('jabatan.tambah');
    }

    public function edit(Jabatan $jabatan)
    {
        return view('jabatan.edit', compact('jabatan'));
    }

    public function simpan(Request $request)
    {
        // validasi data yg dikirim
        $valid = $request->validate([
            'nama' => 'required',
            'gaji' => 'required',
            'status' => 'required',
        ]);

        // perintah untuk menyimpan data
        Jabatan::create($valid);
        // perintah untuk pergi ke halaman lain
        return to_route('jabatan')->with('pesan', 'Berhasil tambah jabatan '.$request->nama);

    }

    public function update(Jabatan $jabatan, Request $request)
    {
        Jabatan::where('id',$jabatan->id)->update([
            'nama' => $request->nama,
            'gaji' => $request->gaji,
            'status' => $request->status,
        ]);

        return to_route('jabatan')->with('pesan', 'Berhasil update jabatan '.$request->nama);
    }

    public function hapus(Jabatan $jabatan)
    {
        Jabatan::destroy($jabatan->id);
        return to_route('jabatan')->with('pesan', 'Berhasil hapus jabatan '.$jabatan->nama);
    }
}
