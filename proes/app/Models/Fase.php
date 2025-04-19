<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fase extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'id_modulo', 'titulo', 'ja_jogada'];

    public function modulo() {
        return $this->belongsTo(Modulo::class);
    }
}
