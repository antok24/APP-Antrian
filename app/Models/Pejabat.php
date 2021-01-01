<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pejabat extends Model
{
    use HasFactory;

    protected $table = 'pejabat';
    protected $fillable= [
        'nip',
        'kode_upbjj',
        'nama_pegawai',
        'jabatan',
        'sub_bagian',
        'ttd_sertifikat',
        'file',
        'keterangan',
        'user_create',
        'user_update',
    ];
}
