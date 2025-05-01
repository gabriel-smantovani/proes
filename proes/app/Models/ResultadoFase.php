<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResultadoFase extends Model
{
    use HasFactory;

    protected $table = 'resultados_fases';

    protected $fillable = ['user_id', 'fase_id', 'pontuacao'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function fase()
    {
        return $this->belongsTo(Fase::class);
    }
}