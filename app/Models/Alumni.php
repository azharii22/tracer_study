<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Alumni extends Authenticatable
{
    use Notifiable;
    // protected $guard = 'alumni';

    protected $table = "alumnis";
    protected $fillable = [
        'nim',
        'nama',
        'password',
        'prodi',
        'th_lulus',
        'no_hp',
        'email',
        'id_status'
    ];

    public function Status(){
        return $this->belongsTo('App\Models\Status', 'id_status');
    }

    public function jawaban()
    {
        return $this->hasMany(JawabanAlumni::class, 'id_alumni');
    }

    public function jawabanKuisioner()
    {
        return $this->hasMany(JawabanAlumni::class, 'id_alumni')->whereNull('id_pertanyaan');
    }

    public function bekerja()
    {
        return $this->alumni()->where('id_status', 1);
    }

    public function wirausaha()
    {
        return $this->alumni()->where('id_status', 2);
    }

    public function melanjutkanStudi()
    {
        return $this->alumni()->where('id_status', 3);
    }

    public function belumBekerja()
    {
        return $this->alumni()->where('id_status', 4);
    }

    public function scopeActive($query)
    {
        return $query->where('status', 'active');
    }

    public function TI()
    {
        return $this->alumni()->where('prodi', 'Teknik Informatika');
    }

    public function RPL()
    {
        return $this->alumni()->where('prodi', 'Rekayasa Perangkat Lunak');
    }
}
