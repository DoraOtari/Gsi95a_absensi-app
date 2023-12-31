<?php

namespace App\Http\Controllers;

use App\Models\Karyawan;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Jabatan;

class KaryawanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $karyawan = Karyawan::all();
        return view('karyawan.index', compact('karyawan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $emails = User::select(['email','id'])->get();
        $jabatan = Jabatan::select(['nama', 'id'])->get();
        return view('karyawan.create', compact('emails', 'jabatan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       Karyawan::create([
        "nama" => $request->nama,
        "nik" => $request->nik,
        "user_id" => $request->user_id,
        "tanggal_lahir" => $request->tanggal_lahir,
        "provinsi" => $request->provinsi,
        "kota" => $request->kota,
        "alamat" => $request->alamat,
        "jabatan_id" => $request->jabatan_id,
       ]);

       return redirect('karyawan')->with('pesan', 'Berhasil tambah karyawan baru');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Karyawan $karyawan)
    {
        $emails = User::select(['email','id'])->get();
        $jabatan = Jabatan::select(['nama', 'id'])->get();
        return view('karyawan.edit', compact('karyawan','emails','jabatan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Karyawan::where('id', $id)->update([
            "nama" => $request->nama,
            "nik" => $request->nik,
            "user_id" => $request->user_id,
            "tanggal_lahir" => $request->tanggal_lahir,
            "provinsi" => $request->provinsi,
            "kota" => $request->kota,
            "alamat" => $request->alamat,
            "jabatan_id" => $request->jabatan_id,
           ]);
    
           return redirect('karyawan')->with('pesan', 'Berhasil update data karyawan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Karyawan::destroy($id);

        return redirect('/karyawan')->with('pesan','Berhasil hapus data karyawan');
    }
}
