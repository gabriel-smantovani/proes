<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modulo extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'titulo', 'desc', 'img_link'];

    public function fases()
    {
        return $this->hasMany(Fase::class);
    }

    public function materiaisDidaticos()
    {
        return $this->hasMany(MaterialDidatico::class);
    }
}
