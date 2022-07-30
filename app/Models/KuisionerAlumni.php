<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KuisionerAlumni extends Model
{
    use HasFactory;
    protected $table = "kuisioner_alumnis";
    protected $fillable = [
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
}
