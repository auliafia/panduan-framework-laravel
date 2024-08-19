<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sayur extends Model
{
    use HasFactory;
    protected $table = 'sayur';

    protected $fillable = ['nama', 'stok', 'kategori', 'tanggal_panen'];
}
