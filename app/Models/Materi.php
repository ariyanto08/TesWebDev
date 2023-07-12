<?php

namespace App\Models;


use App\Models\Kursus;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Materi extends Model
{
    use HasFactory;
    protected $table = 'materi';
    public function Kursus()
    {
        return $this->hasMany(Kursus::class, 'id');
    }
}
