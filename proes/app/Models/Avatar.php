<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Avatar extends Model
{
    protected $table = 'avatares';

    protected $fillable = ['id', 'nome', 'imagem', 'preco', 'equipado_em'];

    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
