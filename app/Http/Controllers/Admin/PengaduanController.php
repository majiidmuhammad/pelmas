<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pengaduan;
use App\Models\Tanggapan;
use Illuminate\Http\Request;

class PengaduanController extends Controller
{
    public function index()
    {
        $pengaduan = Pengaduan::orderBy('tgl_pengaduan', 'desc')->get();

        return view('Admin.Pengaduan.index', ['pengaduan' =>$pengaduan]);
    }

    public function show($id)
    {
        $pengaduan = Pengaduan::where('id', $id)->first();

        $tanggapan = Tanggapan::where('pengaduan_id', $id)->first();

        return view('Admin.Pengaduan.show', ['pengaduan' => $pengaduan, 'tanggapan' => $tanggapan]);
    }
}
