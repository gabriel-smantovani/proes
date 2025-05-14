<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modulo extends Model
{
    use HasFactory;

    protected $fillable = ['titulo', 'desc', 'img_link', 'conquista_necessaria_id'];

    public function fases()
    {
        return $this->hasMany(Fase::class);
    }

    public function materiais_didaticos()
    {
        return $this->hasMany(MaterialDidatico::class);
    }
}
