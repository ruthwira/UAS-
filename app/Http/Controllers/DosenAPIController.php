<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Dosen;  

class DosenAPIController extends Controller
{
    public function all()
    {
        $dosen = Dosen::all();
        return response()->json([
            'success' => true,
            'message' => 'Berhasil Di Tampilkan',
            'data' => $dosen
        ],200);
    }
    public function create(Request $request)
    {
        $dosen = Dosen::create([
            'nidn' => $request->nidn,
            'nama' => $request->nama,
            'status' => $request->status,
            'jafung' => $request->jafung,
            'pakar' => $request->pakar,
        ]);
        if($dosen)
        {
            return response()->json([
                'success' => true,
                'message' => 'Berhasil Di Simpan',
            ],200);
        }
        else
        {
            return response()->json([
                'success' => false,
                'message' => 'Gagal Di Simpan',
            ],401);
        }
    }
    public function update($id, Request $request)
    {
        $dosen = Dosen::whereId($id)->update([
            'nidn' => $request->nidn,
            'nama' => $request->nama,
            'status' => $request->status,
            'jafung' => $request->jafung,
            'pakar' => $request->pakar,
        ]);

        if($dosen)
        {
            return response()->json([
                'success' => true,
                'message' => 'Berhasil Di Ubah',
            ],200);
        }
        else
        {
            return response()->json([
                'success' => false,
                'message' => 'Gagal Di Ubah',
            ],400);
        }
    }
    public function delete($id)
    {
        $dosen = Dosen::find($id);
        $dosen -> delete();
    
    if($dosen)
        {
            return response()->json([
                'success' => true,
                'message' => 'Berhasil Di Hapus',
            ],200);
        }
        else
        {
            return response()->json([
                'success' => false,
                'message' => 'Gagal Di Hapus',
            ],400);
        }
}
}