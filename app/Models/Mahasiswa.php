<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;
    protected $fillable = ['nama_mahasiswa', 'program_studi_id'];

    public function programStudi()
    {
        return $this->belongsTo(ProgramStudi::class);
    }
}
