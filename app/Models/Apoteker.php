<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apoteker extends Model
{
    use HasFactory;
    protected $fillable = ['nama', 'lokasi', 'status'];

    public function scopeFilter($query, $filters)
    {
        return $query->when($filters['nama'] ?? null, function ($query, $nama) {
            $query->where('nama', 'like', '%' . $nama . '%');
        })->when($filters['lokasi'] ?? null, function ($query, $lokasi) {
            $query->where('lokasi', 'like', '%' . $lokasi . '%');
        })->when($filters['status'] ?? null, function ($query, $status) {
            $query->where('status', $status);
        });
    } 
}
