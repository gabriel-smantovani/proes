<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Avatar extends Model
{
    protected $table = 'avatares';

    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
