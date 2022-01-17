<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guest extends Model
{
    use HasFactory;

    protected $fillable = ['nip', 'nama_tamu', 'tlp_tamu', 'email_tamu', 'jabatan_tamu', 'instansi', 'status'];
}
