<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pengaduan;
use App\Models\Tanggapan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TanggapanController extends Controller
{
    public function createOrUpdate(Request $request)
    {
        $pengaduan = Pengaduan::where('id', $request->id)->first();
        
        $tanggapan = Tanggapan::where('id_tanggapan', $request->id_tanggapan)->first();
        // dd($request);
        if ($tanggapan) 
        {
            Pengaduan::find($request->id)->update(['status' => $request->status]);
            
            $tanggapan->update([
                'tgl_tanggapan' => date('Y-m-d'),
                'tanggapan' => $request->tanggapan,
                'petugas_id' => Auth::guard('admin')->user()->id,
            ]);

            return redirect()->route('pengaduan.show', ['pengaduan' => $pengaduan, 'tanggapan' => $tanggapan]);
        } 
        else {
            Pengaduan::find($request->id)->update(['status' => $request->status]);

            $tanggapan = Tanggapan::create([
                'pengaduan_id' => $request->id,
                'tgl_tanggapan' => date('Y-m-d'),
                'tanggapan' => $request->tanggapan,
                'petugas_id' => Auth::guard('admin')->user()->id,
            ]);

            return redirect()->route('pengaduan.show', ['pengaduan' => $pengaduan, 'tanggapan' => $tanggapan])->with(['status' => 'Berhasil Dikrim']);
        }
    }
}
