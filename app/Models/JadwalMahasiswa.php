<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JadwalMahasiswa extends Model
{
    use HasFactory;
    protected $fillable = ['nama_mahasiswa', 'nim', 'kelas', 'dosen_id', 'mata_kuliah_id', 'jam_belajar'];

    public function dosen()
    {
        return $this->belongsTo(Dosen::class);
    }

    public function mataKuliah()
    {
        return $this->belongsTo(MataKuliah::class);
    }
}
