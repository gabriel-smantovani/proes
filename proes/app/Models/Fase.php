<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ResultadoFase;

class Fase extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'modulo_id', 'titulo', 'user_id'];

    public function modulo()
    {
        return $this->belongsTo(Modulo::class);
    }

    public function perguntas()
    {
        return $this->hasMany(Pergunta::class);
    }

    public function resultados_fases()
    {
        return $this->hasMany(ResultadoFase::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class)->withPivot('acertos')->withTimestamps();
    }

    public function resultadoDoUsuario($usuarioId)
    {
        return $this->resultados_fases()
                    ->where('user_id', $usuarioId)
                    ->first();
    }
}
