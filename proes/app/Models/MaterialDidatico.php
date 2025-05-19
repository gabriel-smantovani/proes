<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MaterialDidatico extends Model
{
    use HasFactory;

    protected $table = 'materiais_didaticos';

    protected $fillable = ['modulo_id', 'titulo', 'caminho', 'tipo_de_arquivo', 'user_id'];

    public function modulo()
    {
        return $this->belongsTo(Modulo::class);
    }
}
