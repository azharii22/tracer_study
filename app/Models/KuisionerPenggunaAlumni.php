<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KuisionerPenggunaAlumni extends Model
{
    use HasFactory;
    protected $table = "kuisioner_pengguna_alumnis";
    protected $fillable = [
        'pertanyaan',
        'jawaban_a',
        'jawaban_b',
        'jawaban_c',
        'jawaban_d',
        'jawaban_e'
    ];
}
