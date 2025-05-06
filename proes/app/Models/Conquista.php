<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Conquista extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'nome', 'descricao'];

    public function usuarios()
    {
        return $this->belongsToMany(User::class, 'usuario_conquistas');
    }
}
