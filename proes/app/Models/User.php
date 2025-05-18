<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'tipo',
        'password',
        'moedas',
        'avatar_cabeca',
        'avatar_traje',
        'link_github',
        'link_linkedin',
        'instituicao_ensino',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function fases()
    {
        return $this->belongsToMany(Fase::class)->withPivot('acertos')->withTimestamps();
    }

    public function avatares()
    {
        return $this->belongsToMany(Avatar::class);
    }

    public function conquistas()
    {
        return $this->belongsToMany(Conquista::class, 'usuario_conquistas')->withTimestamps();
    }

    public function resultadosFases()
    {
        return $this->hasMany(ResultadoFase::class);
    }
}
