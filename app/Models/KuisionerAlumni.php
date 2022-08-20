<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KuisionerAlumni extends Model
{
    use HasFactory;
    protected $table = "kuisioner_alumnis";
    protected $fillable = [
        'id_status',
        'pertanyaan',
        'jawaban_a',
        'jawaban_b',
        'jawaban_c',
        'jawaban_d',
        'jawaban_e',
        'jawaban_f',
        'jawaban_g',
        'jawaban_h'
    ];

    public function Status(){
        return $this->belongsTo('App\Models\Status', 'id_status');
    }
}
