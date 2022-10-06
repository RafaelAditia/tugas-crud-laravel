<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penduduk extends Model
{
    use HasFactory;
    protected $fillable = ['NIK', 'nama', 'gender', 'alamat', 'status', 'pekerjaan', 'warga_negara', 'tempat_lahir', 'tanggal_lahir', 'gol_darah'];
}