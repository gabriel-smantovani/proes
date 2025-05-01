<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pergunta extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'fase_id', 'desc'];

    public function fase() {
        return $this->belongsTo(Fase::class);
    }

    public function respostas()
    {
        return $this->hasMany(Resposta::class);
    }
}
