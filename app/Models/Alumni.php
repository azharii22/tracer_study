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
        'status'
    ];

    public function jawaban()
    {
        return $this->hasMany(JawabanAlumni::class, 'id_alumni');
    }
}
