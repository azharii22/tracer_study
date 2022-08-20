<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EvaluasiAlumni extends Model
{
    use HasFactory;
    protected $table = "evaluasi_alumnis";
    protected $fillable = [
        'pertanyaan',
        'sangat_besar',
        'besar',
        'cukup',
        'kurang',
        'tidak_sama_sekali'
    ];
}
