<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsuarioConquista extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'user_id', 'conquista_id'];

    public function conquista()
    {
        return $this->belongsTo(Conquista::class, 'conquista_id');
    }
}
