<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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

    public function users()
    {
        return $this->belongsToMany(User::class)->withPivot('acertos')->withTimestamps();
    }
}
