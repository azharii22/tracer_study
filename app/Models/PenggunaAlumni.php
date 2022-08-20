<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PenggunaAlumni extends Model
{
    use HasFactory;
    protected $table = "pengguna_alumnis";
    protected $fillable = [
        'nama',
        'email',
        'perusahaan',
        'jabatan',
        'alamat',
        'nim',
        'nama_mhs',
        'th_lulus',
        'prodi',
        'saran'
    ];
    public function jawaban()
    {
        return $this->hasMany(JawabanPenggunaAlumni::class, 'id_user');
    }
}
