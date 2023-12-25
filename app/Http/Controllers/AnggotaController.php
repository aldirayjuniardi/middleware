<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//panggil model AnggotaModel
use App\Models\AnggotaModel;

class AnggotaController extends Controller
{
    //method untuk tampil data anggota
    public function anggotatampil()
    {
        $dataanggota = AnggotaModel::orderby('id_anggota', 'ASC')
        ->paginate(5);

        return view('halaman/view_anggota',['anggota'=>$dataanggota]);
    }

    //method untuk tambah data anggota
    public function anggotatambah(request $request)
    {
        $this->validate($request, [
            'nim' => 'required',
            'nama_anggota' => 'required',
            'prodi' => 'required',
            'hp' => 'required'
        ]);

        AnggotaModel::create([
            'nim' => $request->kode_buku,
            'nama_anggota' => $request->judul,
            'prodi' => $request->pengarang,
            'hp' => $request->kategori
        ]);
        return redirect('/anggota');
    }

    //method untuk hapus data anggota
    public function anggotahapus($id_anggota)
    {
        $dataanggota=AnggotaModel::find($id_anggota);
        $dataanggota->delete();

        return redirect()->back();
    }

    //method untuk edit data anggota
    public function anggotaedit($id_anggota, request $request)
    {
        $this->validate($request, [
            'nim' => 'required',
            'nama_anggota' => 'required',
            'prodi' => 'required',
            'hp' => 'required'
        
        ]);

        $id_anggota = AnggotaModel::find($id_anggota);
        $id_anggota->nim    = $request->kode_buku;
        $id_anggota->nama_anggota       = $request->judul;
        $id_anggota->prodi   = $request->pengarang;
        $id_anggota->hp    = $request->kategori;

        $id_anggota->save();
        
        return redirect()->back();
    }  
}