<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MaterialDidatico extends Model
{
    use HasFactory;

    protected $table = 'materiaisdidaticos';

    protected $fillable = ['modulo_id', 'titulo', 'link'];

    public function modulo()
    {
        return $this->belongsTo(Modulo::class);
    }
}
