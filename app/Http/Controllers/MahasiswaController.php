<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    /**
     * Fungsi index untuk menampilkan data semua mahasiswa
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Mahasiswa::all();
    }

    /**
     * Fungsi create untuk menambahkan mahasiswa baru
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $mahasiswa = new Mahasiswa();
        $mahasiswa->nama = $request->nama;
        $mahasiswa->alamat = $request->alamat;
        $mahasiswa->save();

        return "Data mahasiswa berhasil ditambahkan";
    }

    /**
     * Fungsi update untuk merubah data mahasiswa
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $nama = $request->nama;
        $alamat = $request->alamat;

        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->nama = $nama;
        $mahasiswa->alamat = $alamat;
        $mahasiswa->save();

        return "Data mahasiswa berhasil diubah";
    }

    /**
     * Fungsi untuk menghapus data mahasiswa
     *
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->delete();

        return "Data mahasiswa berhasil dihapus";
    }
}
