<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    use HasFactory;

    protected $fillable = ['nama_tamu', 'nama_konsultan', 'tgl_konsultasi', 'topik', 'tipe_konsultasi', 'ruang'];
}
