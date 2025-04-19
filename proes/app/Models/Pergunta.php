<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pergunta extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'id_quizz', 'desc'];

    public function quizz() {
        return $this->belongsTo(Quizz::class);
    }
}
