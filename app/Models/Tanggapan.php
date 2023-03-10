<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tanggapan extends Model
{
    use HasFactory;

    protected $table = 'tanggapan';

    protected $primaryKey = 'id_tanggapan';

    protected $fillable = [
        'pengaduan_id',
        'tgl_tanggapan',
        'tanggapan',
        'petugas_id',
    ];

    public function pengaduan()
    {
        return $this->belongsTo(Pengaduan::class);
    }
    public function petugas()
    {
        return $this->belongsTo(Pengaduan::class);
    }
}
