<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JawabanPenggunaAlumni extends Model
{
    use HasFactory;
    protected $table = "jawaban_pengguna_alumnis";
    protected $fillable = [
        'id_user',
        'id_pertanyaan',
        'jawaban'
    ];

    public function PenggunaAlumni(){
        return $this->belongsTo('App\Models\PenggunaAlumni', 'id_user');
    }

    public function KuisionerPenggunaAlumni(){
        return $this->belongsTo('App\Models\KuisionerPenggunaAlumni', 'id_pertanyaan');
    }

}
