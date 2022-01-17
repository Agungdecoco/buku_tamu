<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Queue extends Model
{
    use HasFactory;

    protected $fillable = ['tgl_konsultasi', 'consultants_nip', 'topik', 'tipe_konsultasi', 'ruang', 'anggota1', 'anggota2', 'anggota3'];

    public function consultants()
    {
        return $this->belongsTo('App\Models\Consultant', 'consultants_nip');
    }
}
