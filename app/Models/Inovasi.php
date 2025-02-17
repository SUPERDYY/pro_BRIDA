<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inovasi extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'kategori', 'nama', 'tahapan', 'inisiator', 'jenis_inovasi',
        'bentuk_inovasi', 'tematik', 'urusan', 'waktu_ujicoba', 'waktu_penerapan',
        'rancangan', 'tujuan', 'manfaat', 'hasil', 'status'
    ];
}
