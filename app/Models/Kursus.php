<?php

namespace App\Models;

use App\Models\Materi;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Kursus extends Model
{
    use HasFactory;
    protected $table = 'kursus';

    function Materi()
    {
        return $this->belongsTo(Materi::class, 'id_kursus');
    }
}
