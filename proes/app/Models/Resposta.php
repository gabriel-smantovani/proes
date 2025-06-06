<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resposta extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'pergunta_id', 'desc', 'correta'];

    public function pergunta()
    {
        return $this->belongsTo(Pergunta::class);
    }
}
