<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PeminjamanBukuController extends Controller
{
    public function index(){
        return view('peminjaman_buku');
    }

    public function hasil(Request $request){
        $this->validate($request, [
            'nama' => 'required|min:5',
            'jenis_kelamin' => 'required',
            'tanggal_pinjam' => 'required',
            'tema' => 'required',
            'isbn' => 'required'
            
            
        ]);

        return view('hasil_pinjam', [
            'data' => $request
        ]);
    }
}
