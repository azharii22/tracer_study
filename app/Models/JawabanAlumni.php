<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JawabanAlumni extends Model
{
    use HasFactory;
    protected $table = "jawaban_alumnis";
    protected $fillable = [
        'id_alumni',
        'id_pertanyaan',
        'id_evaluasi',
        'id_pembelajaran',
        'jawaban'
    ];

    public function Alumni(){
        return $this->belongsTo('App\Models\Alumni', 'id_alumni');
    }

    public function KuisionerAlumni(){
        return $this->belongsTo('App\Models\KuisionerAlumni', 'id_pertanyaan');
    }

    public function EvaluasiAlumni(){
        return $this->belongsTo('App\Models\EvaluasiAlumni', 'id_evaluasi');
    }

    public function Pembelajaran(){
        return $this->belongsTo('App\Models\Pembelajaran', 'id_pembelajaran');
    }
}
